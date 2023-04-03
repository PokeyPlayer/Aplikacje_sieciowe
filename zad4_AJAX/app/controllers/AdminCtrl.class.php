<?php

namespace app\controllers;

use app\forms\AdSearchForm;
use PDOException;

class AdminCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new AdSearchForm();
	}
		
	public function validate() {
		$this->form->uzytkownik = getFromRequest('sf_uzytkownik');
		if (getMessages()->isError()) return false;
		
		return ! getMessages()->isError();
	}
	
	public function load_data(){
		$this->validate();
		
		$search_params = [];
		if ( isset($this->form->uzytkownik) && strlen($this->form->uzytkownik) > 0) {
			$search_params['imie[~]'] = '%'.$this->form->uzytkownik.'%';
			$search_params['nazwisko[~]'] = '%'.$this->form->uzytkownik.'%';
			$search_params['login[~]'] = '%'.$this->form->uzytkownik.'%';
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "OR" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		
		try{
			$this->records = getDB()->select("uzytkownicy", [
				"IDuzytkownik",
				"login",
				"haslo",
				"email",
				"imie",
				"nazwisko",
				"miasto",
				"numer_tel",
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania listy użytkowników');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
	}

	public function action_adminView() {
		$this->load_data();
		getSmarty()->assign('searchForm2',$this->form);
		getSmarty()->assign('uzytkownicy',$this->records);
		getSmarty()->display('AdminView.tpl');
	}

	public function action_adminViewPart() {
		$this->load_data();
		getSmarty()->assign('searchForm2',$this->form);
		getSmarty()->assign('uzytkownicy',$this->records);
		getSmarty()->display('AdminViewTable.tpl');
	}
}