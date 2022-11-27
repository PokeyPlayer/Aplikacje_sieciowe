<?php

namespace app\controllers;

use app\forms\CalcSearchForm;
use PDOException;

class CalcListCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new CalcSearchForm();
	}
		
	public function validate() {
		$this->form->kwota = getFromRequest('sf_kwota');

		if (! is_numeric ( $this->form->kwota ) && strlen($this->form->kwota) > 0) {
			getMessages()->addError('Kwota musi być liczbą całkowitą.');
		}
		if ( getMessages()->isError() ) return false;

		if($this->form->kwota < 0 && strlen($this->form->kwota) > 0){
			getMessages()->addError('Kwota kredytu nie może być ujemna.');
		}
		
		return ! getMessages()->isError();
	}
	
	public function action_calcList(){
		$this->validate();
		
		$search_params = [];
		if ( isset($this->form->kwota) && strlen($this->form->kwota) > 0) {
			$search_params['kwota[~]'] = $this->form->kwota.'%';
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		$where ["ORDER"] = "kwota";
		
		try{
			$this->records = getDB()->select("wyniki", [
					"IDwynik",
					"kwota",
					"lata",
					"oprocentowanie",
					"wynik",
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
				
		getSmarty()->assign('searchForm',$this->form);
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->display('CalcList.tpl');
	}	
}