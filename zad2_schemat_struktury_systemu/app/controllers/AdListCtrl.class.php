<?php

namespace app\controllers;

use app\forms\AdSearchForm;
use PDOException;

class AdListCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new AdSearchForm();
	}
		
	public function validate() {
		$this->form->tytul = getFromRequest('sf_tytul');
		if ( getMessages()->isError() ) return false;
		
		return ! getMessages()->isError();
	}
	
	public function action_adList(){
		$this->validate();
		
		$search_params = [];
		if ( isset($this->form->tytul) && strlen($this->form->tytul) > 0) {
			$search_params['tytul[~]'] = '%'.$this->form->tytul.'%';
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		$where ["ORDER"] = "tytul";
		
		try{
			$this->records = getDB()->select("ogloszenia", [
					"[>]kat_ogloszen" => ["IDkategoria" => "IDkategoria"],
					"[>]zdjecia" => ["IDogloszenie" => "IDogloszenie"]
					],[
					"ogloszenia.IDogloszenie",
					"ogloszenia.IDuzytkownik",
					"ogloszenia.IDkategoria",
					"ogloszenia.tytul",
					"ogloszenia.opis",
					"ogloszenia.cena",
					"ogloszenia.srednia_ocen",
					"kat_ogloszen.nazwa",
					"zdjecia.zdjecie",
					], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
				
		getSmarty()->assign('searchForm',$this->form);
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->display('AdList.tpl');
	}	
}