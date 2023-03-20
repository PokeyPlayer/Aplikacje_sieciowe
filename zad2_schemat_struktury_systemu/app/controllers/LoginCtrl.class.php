<?php
namespace app\controllers;

use app\forms\LoginForm;

class LoginCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function validate(){
		$this->form->login = getFromRequest('login');
		$this->form->haslo = getFromRequest('haslo');
	
		if (!(isset($this->form->login) && isset($this->form->haslo))){
			return false;
		}
			
		if (empty($this->form->login)) {
			getMessages()->addError('Nie podano loginu');
		}
		if (empty($this->form->haslo)) {
			getMessages()->addError('Nie podano hasła');
		}
		if (getMessages()->isError()) return false;
		
		return ! getMessages()->isError();
	}
	
	public function action_loginShow(){
		$this->generateView(); 
	}

	public function action_login(){
		if ($this->validate()){
			try {
				$this->records = getDB()->select("uzytkownicy", [
					"[>]katalog" => ["IDuzytkownik" => "IDuzytkownik"],
				],
				[
					"uzytkownicy.IDuzytkownik",
					"uzytkownicy.login",
					"uzytkownicy.haslo",
					"katalog.IDrola"
				],
				[
					"uzytkownicy.login" => $this->form->login,
				]
				);

				$this->records2=getDB()->get("uzytkownicy", [
					"uzytkownicy.IDuzytkownik",
					"uzytkownicy.haslo"
				],
				[
					"uzytkownicy.login" => $this->form->login,
				]
				);
	
				if(count($this->records)>0){
					if(password_verify($this->form->haslo, $this->records2["haslo"])){
						if($this->records[0]["IDrola"] == 2){
							addRole('user');
							$_SESSION['IDuzytkownik']=$this->records2["IDuzytkownik"];
							getMessages()->addInfo('Poprawnie zalogowano do systemu.');
							forwardTo("adList");	
						}else{
							addRole('admin');
							$_SESSION['IDuzytkownik']=$this->records2["IDuzytkownik"];
							getMessages()->addInfo('Poprawnie zalogowano do panelu administracyjnego.');
							forwardTo("adminView");
						}
					}else{
					getMessages()->addError('Podane haslo jest nieprawidlowe');
					$this->generateView();
					}
				}else{
					getMessages()->addError('Uzytkownik o podanym loginie nie istnieje. Zarejestruj się.');
					$this->generateView();
				}				
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}		
		} else {			
			$this->generateView(); 
		}	
	}
	
	public function action_logout(){
		session_destroy();		
		redirectTo('adList');	
	}
	
	public function generateView(){		
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');		
	}
}