<?php
namespace app\controllers;

use app\forms\UserForm;
use DateTime;
use PDOException;

class UserCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new UserForm();
	}
	
	public function validateSave(){
		$this->form->IDuzytkownik = getFromRequest('IDuzytkownik',true,'Błędne wywołanie aplikacji1');
		$this->form->email = getFromRequest('email',true,'Błędne wywołanie aplikacji2');
		$this->form->imie = getFromRequest('imie',true,'Błędne wywołanie aplikacji3');
		$this->form->nazwisko = getFromRequest('nazwisko',true,'Błędne wywołanie aplikacji4');
		$this->form->miasto = getFromRequest('miasto',true,'Błędne wywołanie aplikacji5');
		$this->form->numer_tel = getFromRequest('numer_tel',true,'Błędne wywołanie aplikacji6');
		
		if ( getMessages()->isError() ) return false;

			
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
		
		if (getMessages()->isError()) return false;

		if(strlen($this->form->numer_tel)!=9){
			getMessages()->addError('Podano błędny numer telefonu');
		}
		if (getMessages()->isError()) return false;

		return ! getMessages()->isError();
	}

	public function validateEdit() {
		$this->form->IDuzytkownik = getFromRequest('id',true,'Błędne wywołanie aplikacji1');
		return ! getMessages()->isError();
	}

	public function action_userEdit(){
		if ($this->validateEdit()){
			try {
				$record = getDB()->get("uzytkownicy", "*",[
					"IDuzytkownik" => $this->form->IDuzytkownik
				]);
				$this->form->IDuzytkownik = $record['IDuzytkownik'];
				$this->form->email = $record['email'];
				$this->form->imie = $record['imie'];
				$this->form->nazwisko = $record['nazwisko'];
				$this->form->miasto = $record['miasto'];
				$this->form->numer_tel = $record['numer_tel'];
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas odczytu danych użytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		} 
		$this->generateView();	
	}

	public function action_userDelete(){		
		if ($this->validateEdit() ){		
			try{
				$IDuzytkownik = getDB()->id();
				getDB()->delete("uzytkownicy",[
					"IDuzytkownik" => $this->form->IDuzytkownik
				]);
				getMessages()->addInfo('Pomyślnie usunięto użytkownika');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania użytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		}
		forwardTo('adminView');		
	}

	public function action_userSave(){
		if ($this->validateSave()) {
			$IDuzyt=$_SESSION['IDuzytkownik'];
			try {
				getDB()->update("uzytkownicy", [
					"IDkto_zmodyfikowal" => $IDuzyt,
					"imie" => $this->form->imie,
					"nazwisko" => $this->form->nazwisko,
					"email" => $this->form->email,
					"miasto" => $this->form->miasto,
					"numer_tel" => $this->form->numer_tel,
					], [ 
					"IDuzytkownik" => $this->form->IDuzytkownik
					]);
				getMessages()->addInfo('Pomyślnie edytowano profil użytkownika');
			}catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu danych uzytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			forwardTo('adminView');
		}else {
			$this->generateView();
		}		
	}
	
	public function generateView(){		
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('UserEditView.tpl');		
	}
}