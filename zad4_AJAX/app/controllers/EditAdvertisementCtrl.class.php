<?php
namespace app\controllers;

use app\forms\EditAdvertisementForm;
use DateTime;
use PDOException;

class EditAdvertisementCtrl{
	private $form;
	private $record;
	private $record2;
	
	public function __construct(){
		$this->form = new EditAdvertisementForm();
	}
	
	public function validateSave(){
		$this->form->IDogloszenie = getFromRequest('IDogloszenie',true,'Błędne wywołanie aplikacji1');
		$this->form->tytul = getFromRequest('tytul',true,'Błędne wywołanie aplikacji2');
		$this->form->kategoria = getFromRequest('kategoria',true,'Błędne wywołanie aplikacji3');
		$this->form->opis = getFromRequest('opis',true,'Błędne wywołanie aplikacji4');
		$this->form->cena = getFromRequest('cena',true,'Błędne wywołanie aplikacji5');
		
		if ( getMessages()->isError() ) return false;

		if (empty($this->form->tytul)) {
			getMessages()->addError('Podaj tytul');
		}
		if (empty($this->form->kategoria)) {
			getMessages()->addError('Wybierz kategorię');
		}
		if (empty($this->form->opis)) {
			getMessages()->addError('Podaj opis');
		}
		if (empty($this->form->cena)) {
			getMessages()->addError('Podaj cenę');
		}
		if (getMessages()->isError()) return false;
		
		return ! getMessages()->isError();
	}

	public function validateEdit() {
		$this->form->IDogloszenie = getFromRequest('id',true,'Błędne wywołanie aplikacji1');
		return ! getMessages()->isError();
	}

	public function action_advertisementEdit(){
		if ($this->validateEdit()){
			try {
				$record = getDB()->get("ogloszenia", "*",[
					"IDogloszenie" => $this->form->IDogloszenie
				]);
				$this->form->IDogloszenie = $record['IDogloszenie'];
				$this->form->tytul = $record['tytul'];
				$this->form->kategoria = $record['IDkategoria'];
				$this->form->opis = $record['opis'];
				$this->form->cena = $record['cena'];

				$record2 = getDB()->get("kat_ogloszen", "*",[
					"IDkategoria" => $this->form->kategoria
				]);
				$this->form->kategoria_nazwa = $record2['nazwa'];
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas odczytu danych ogłoszenia');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		} 
		$this->generateView();	
	}

	public function action_advertisementDelete(){		
		if ($this->validateEdit() ){		
			try{
				getDB()->delete("ogloszenia",[
					"IDogloszenie" => $this->form->IDogloszenie
				]);
				getMessages()->addInfo('Pomyślnie usunięto ogłoszenie');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania ogłoszenia');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		}
		forwardTo('myAdvertisements');		
	}

	public function action_advertisementSave(){
		if ($this->validateSave()) {
			try { 
				getDB()->update("ogloszenia", [
					"tytul" => $this->form->tytul,
					"IDkategoria" => $this->form->kategoria,
					"opis" => $this->form->opis,
					"cena" => $this->form->cena,
					], [ 
					"IDogloszenie" => $this->form->IDogloszenie
					]);
				getMessages()->addInfo('Pomyślnie edytowano ogłoszenie');
			}catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu ogłoszenia');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			forwardTo('myAdvertisements');
		}else {
			$this->generateView();
		}		
	}
	
	public function generateView(){		
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('EditAdvertisementView.tpl');		
	}
}