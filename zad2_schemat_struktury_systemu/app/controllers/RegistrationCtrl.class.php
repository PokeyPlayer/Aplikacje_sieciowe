<?php
namespace app\controllers;

use app\forms\RegistrationForm;

class RegistrationCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new RegistrationForm();
	}
	
	public function validate(){
		$this->form->login = getFromRequest('login',true,'Błędne wywołanie aplikacji1');
		$this->form->haslo = getFromRequest('haslo',true,'Błędne wywołanie aplikacji2');
		$this->form->haslo2 = getFromRequest('haslo2',true,'Błędne wywołanie aplikacji3');
		$this->form->email = getFromRequest('email',true,'Błędne wywołanie aplikacji4');
		$this->form->imie = getFromRequest('imie',true,'Błędne wywołanie aplikacji5');
		$this->form->nazwisko = getFromRequest('nazwisko',true,'Błędne wywołanie aplikacji6');
		$this->form->miasto = getFromRequest('miasto',true,'Błędne wywołanie aplikacji7');
		$this->form->numer_tel = getFromRequest('numer_tel',true,'Błędne wywołanie aplikacji8');
			
		if (empty($this->form->imie)) {
			getMessages()->addError('Podaj imie');
		}
		if (empty($this->form->nazwisko)) {
			getMessages()->addError('Podaj nazwisko');
		}
		if (empty($this->form->email)) {
			getMessages()->addError('Podaj adres email');
		}
		if (empty($this->form->miasto)) {
			getMessages()->addError('Podaj miasto');
		}
		if (empty($this->form->numer_tel)) {
			getMessages()->addError('Podaj numer telefonu');
		}
		if (empty($this->form->login)) {
			getMessages()->addError('Podaj login');
		}
		if (empty($this->form->haslo)) {
			getMessages()->addError('Podaj hasło');
		}
		if (empty($this->form->haslo2)) {
			getMessages()->addError('Powtórz hasło');
		}
		if (getMessages()->isError()) return false;

		
		if(strlen($this->form->numer_tel)!=9){
			getMessages()->addError('Podano błędny numer telefonu');
		}

		if(strlen($this->form->haslo)<8){
			getMessages()->addError('Hasło musi sie składać przynajmniej z 8 znaków');
		}
		else if(strlen($this->form->haslo)>17){
			getMessages()->addError('Hasło może sie składac maksymalnie z 16 znakow');
		}
		if (getMessages()->isError()) return false;

		if($this->form->haslo != $this->form->haslo2){
			getMessages()->addError('Podane hasła różnią się');
		}
		if (getMessages()->isError()) return false;
		
		return ! getMessages()->isError();
	}
	
	public function action_registrationShow(){
		$this->generateView(); 
	}

	public function action_registration(){
		if ($this->validate()){
			$this->zaszyfrowane = password_hash($this->form->haslo, PASSWORD_DEFAULT);

			try {
				$this->odczyt = getDB()->count("uzytkownicy", "*",
				[
					"login" => $this->form->login,
				]);

				if($this->odczyt==0){
				getDB()->insert("uzytkownicy", [
					"imie" => $this->form->imie,
					"nazwisko" => $this->form->nazwisko,
					"email" => $this->form->email,
					"miasto" => $this->form->miasto,
					"numer_tel" => $this->form->numer_tel,
					"login" => $this->form->login,
					"haslo" => $this->zaszyfrowane,
					"IDkto_utworzyl" => 1,
					"IDkto_zmodyfikowal" =>	1,
					]);	
					$IDuzytkownik = getDB()->id();

					getDB()->update("uzytkownicy", [
						"IDkto_utworzyl" => $IDuzytkownik,
						"IDkto_zmodyfikowal" =>	$IDuzytkownik
					],
					[	"IDuzytkownik" => $IDuzytkownik,
					]);
					
					getDB()->insert("katalog", [
						"IDuzytkownik" => $IDuzytkownik,
						"IDrola" => 2,
					]);

				getMessages()->addInfo('Pomyślnie utworzono konto użytkownika. Zaloguj się.');
				forwardTo('adList');
					
				}else{
					getMessages()->addError('Uzytkownik o takim loginie juz istnieje. Podaj inny login');
					$this->generateView();
				}
			} 
			catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas tworzenia konta użytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}				
		}else {
		   $this->generateView();
		}	
	}
	
	public function generateView(){		
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('RegistrationView.tpl');		
	}
}