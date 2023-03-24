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
		
		$aktualna_strona = isset($_GET['page']) ? $_GET['page'] : 1;
		$wyniki_na_strone = 3;
		$wynik = (($aktualna_strona - 1) * $wyniki_na_strone);

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
					],
					[
						"tytul[~]" => $this->form->tytul,
						"LIMIT" => [$wynik, $wyniki_na_strone]
					]);
					
					$this->count = getDB()->count("ogloszenia", [
						"tytul[~]" => $this->form->tytul
					]);

					$liczba_stron = ceil($this->count / $wyniki_na_strone);

		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}

		
		function generowanie_linkow($aktualna_strona, $liczba_stron) {
			$link = '';
			
			if ($aktualna_strona > 1) {
				 $link .= '<a class="btn btn-primary" href="' . $_SERVER['PHP_SELF'] . '?page=1"> << </a> ';
				 $link .= '<a class="btn btn-primary" href="' . $_SERVER['PHP_SELF'] . '?page=' . ($aktualna_strona - 1) . '"> < </a> ';
			}
			$i = $aktualna_strona;
			for ($i=1; $i <= $liczba_stron; $i++) {
				 if ($i > 0 && $i <= $liczba_stron) {  
					  if ($aktualna_strona == $i  && $i != 0) {
						   $link .= '<a class="btn btn-primary">' . $i. '</a>';			  
					  }
					  else {
						   if($i>=($aktualna_strona-1) && $i<=($aktualna_strona+1)){
						   $link .= ' <a class="btn btn-primary" href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '"> ' . $i . '</a> ';
						   }
					  }
				 }
			}
			if ($aktualna_strona < $liczba_stron) {
				 $link .= '<a class="btn btn-primary" href="' . $_SERVER['PHP_SELF'] . '?page=' . ($aktualna_strona + 1) . '"> > </a>';
				 $link .= '<a class="btn btn-primary" href="' . $_SERVER['PHP_SELF'] . '?page=' . ($liczba_stron) . '"> >> </a>';
			}
			return $link;
	   }
		
		getSmarty()->assign('searchForm',$this->form);
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->assign('strony',$liczba_stron);
		getSmarty()->assign('s', generowanie_linkow($aktualna_strona, $liczba_stron));
		getSmarty()->display('AdList.tpl');
	}	
}