<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {
	private $form;
	private $wynik;
	private $hide_intro;

	public function __construct(){
		$this->form = new CalcForm();
		$this->wynik = new CalcResult();
		$this->hide_intro = false;
	}
	
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}
	
	public function validate() {
		if(! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))){
			return false;
		}else { 
			$this->hide_intro = true;
		}
		
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty kredytu.');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano okresu spłaty kredytu.');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania kredytu.');
		}
		
		if (! getMessages()->isError()) {
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota kredytu musi być liczbą całkowitą.');
			}		
			if (! is_numeric ( $this->form->lata )) {
				getMessages()->addError('Okres spłaty kredytu musi być liczbą całkowitą.');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Oprocentowanie kredytu musi być liczbą całkowitą.');
			}
		}

		if (! getMessages()->isError()) {
			if($this->form->kwota < 0){
				getMessages()->addError('Kwota kredytu nie może być ujemna.');
			}
			if($this->form->lata < 0){
				getMessages()->addError('Okres spłaty kredytu nie może być ujemny.');
			}
			if($this->form->oprocentowanie < 0){
				getMessages()->addError('Oprocentowanie kredytu nie może być ujemne.');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');

			$this->wynik->wynik = (($this->form->kwota*$this->form->oprocentowanie*0.01)+$this->form->kwota)/($this->form->lata*12);
			$this->wynik->wynik = round($this->wynik->wynik,2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function generateView(){	
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','Kontroler główny');
				
		getSmarty()->assign('hide_intro',$this->hide_intro);
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('wynik',$this->wynik);
		
		getSmarty()->display('CalcView.tpl');
	}
}
