<?php

namespace app\controllers;

use app\forms\CalcEditForm;
use app\transfer\CalcResult;
use DateTime;
use PDOException;

class CalcEditCtrl {

	private $form;
	private $wynik;

	public function __construct(){
		$this->form = new CalcEditForm();
		$this->wynik = new CalcResult();
	}

	public function validateSave() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		$this->form->kwota = getFromRequest('kwota',true,'Błędne wywołanie aplikacji');
		$this->form->lata = getFromRequest('lata',true,'Błędne wywołanie aplikacji');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie',true,'Błędne wywołanie aplikacji');

		if ( getMessages()->isError() ) return false;

		if (empty(trim($this->form->kwota))) {
			getMessages()->addError('Wprowadź kwotę.');
		}
		if (empty(trim($this->form->lata))) {
			getMessages()->addError('Wprowadź okres kredytowania.');
		}
		if (empty(trim($this->form->oprocentowanie))) {
			getMessages()->addError('Wprowadź oprocentowanie.');
		}
		if ( getMessages()->isError() ) return false;

		
		if (! is_numeric ( $this->form->kwota )) {
			getMessages()->addError('Kwota kredytu musi być liczbą całkowitą.');
		}		
		if (! is_numeric ( $this->form->lata )) {
			getMessages()->addError('Okres spłaty kredytu musi być liczbą całkowitą.');
		}
		if (! is_numeric ( $this->form->oprocentowanie )) {
			getMessages()->addError('Oprocentowanie kredytu musi być liczbą całkowitą.');
		}
		if ( getMessages()->isError() ) return false;


		if($this->form->kwota < 0){
			getMessages()->addError('Kwota kredytu nie może być ujemna.');
		}
		if($this->form->lata < 0){
			getMessages()->addError('Okres spłaty kredytu nie może być ujemny.');
		}
		if($this->form->oprocentowanie < 0){
			getMessages()->addError('Oprocentowanie kredytu nie może być ujemne.');
		}
		
		return ! getMessages()->isError();
	}

	public function action_calcCompute(){
		
		if ($this->validateSave()) {
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');

			$this->wynik->wynik = (($this->form->kwota*$this->form->oprocentowanie*0.01)+$this->form->kwota)/($this->form->lata*12);
			$this->wynik->wynik = round($this->wynik->wynik,2);
		}
			getMessages()->addInfo('Wykonano obliczenia.');
	}
		
	public function validateEdit() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	
	public function action_calcNew(){
		$this->generateView();
	}
	
	public function action_calcEdit(){
		if ( $this->validateEdit() ){
			try {
				$record = getDB()->get("wyniki", "*",[
					"IDwynik" => $this->form->id
				]);
				$this->form->id = $record['IDwynik'];
				$this->form->kwota = $record['kwota'];
				$this->form->lata = $record['lata'];
				$this->form->oprocentowanie = $record['oprocentowanie'];
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas odczytu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		} 
		$this->generateView();		
	}

	public function action_calcDelete(){		
		if ( $this->validateEdit() ){		
			try{
				getDB()->delete("wyniki",[
					"IDwynik" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		}
		forwardTo('calcList');		
	}

	public function action_calcSave(){
		if ($this->validateSave()) {
			$this->action_calcCompute();
			try {
				if ($this->form->id == '') {
					$count = getDB()->count("wyniki");
					if ($count <= 20) {
						getDB()->insert("wyniki", [
							"kwota" => $this->form->kwota,
							"lata" => $this->form->lata,
							"oprocentowanie" => $this->form->oprocentowanie,
							"wynik" => $this->wynik->wynik,
						]);
					} else {
						getMessages()->addInfo('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
						$this->generateView();
						exit();
					}
				} else { 
					getDB()->update("wyniki", [
						"kwota" => $this->form->kwota,
						"lata" => $this->form->lata,
						"oprocentowanie" => $this->form->oprocentowanie,
						"wynik" => $this->wynik->wynik
					], [ 
						"IDwynik" => $this->form->id
					]);
				}
				getMessages()->addInfo('Pomyślnie zapisano rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			forwardTo('calcList');

		} else {
			$this->generateView();
		}		
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('CalcEdit.tpl');
	}
}