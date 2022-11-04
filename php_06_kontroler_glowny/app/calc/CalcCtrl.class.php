<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
	private $messages;
	private $form;
	private $wynik;
	private $hide_intro;

	public function __construct(){
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->wynik = new CalcResult();
		$this->hide_intro = false;
	}
	
	
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
	
	
	public function validate() {
		if(! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))){
			return false;
		}else { 
			$this->hide_intro = true;
		}
		
		if ($this->form->kwota == "") {
			$this->messages->addError('Nie podano kwoty kredytu.');
		}
		if ($this->form->lata == "") {
			$this->messages->addError('Nie podano okresu spłaty kredytu.');
		}
		if ($this->form->oprocentowanie == "") {
			$this->messages->addError('Nie podano oprocentowania kredytu.');
		}
		
		if (! $this->messages->isError()) {
			if (! is_numeric ( $this->form->kwota )) {
				$this->messages->addError('Kwota kredytu musi być liczbą całkowitą.');
			}		
			if (! is_numeric ( $this->form->lata )) {
				$this->messages->addError('Okres spłaty kredytu musi być liczbą całkowitą.');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->messages->addError('Oprocentowanie kredytu musi być liczbą całkowitą.');
			}
		}

		if (! $this->messages->isError()) {
			if($this->form->kwota < 0){
				$this->messages->addError('Kwota kredytu nie może być ujemna.');
			}
			if($this->form->lata < 0){
				$this->messages->addError('Okres spłaty kredytu nie może być ujemny.');
			}
			if($this->form->oprocentowanie < 0){
				$this->messages->addError('Oprocentowanie kredytu nie może być ujemne.');
			}
		}
		
		return ! $this->messages->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
			$this->messages->addInfo('Parametry poprawne.');

			$this->wynik->wynik = (($this->form->kwota*$this->form->oprocentowanie*0.01)+$this->form->kwota)/($this->form->lata*12);
			$this->wynik->wynik = round($this->wynik->wynik,2);
			
			$this->messages->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('wynik',$this->wynik);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
	}
}
