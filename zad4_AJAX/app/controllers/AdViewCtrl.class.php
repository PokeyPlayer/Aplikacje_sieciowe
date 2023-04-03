<?php

namespace app\controllers;

use app\forms\AdViewForm;
use DateTime;
use PDOException;

class AdViewCtrl {

	private $form;
	private $records;
	private $records2;

	public function __construct(){
		$this->form = new AdViewForm();
	}

	public function validate() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		if (getMessages()->isError()) return false;
	
		return ! getMessages()->isError();
	}

	public function action_adView(){
		if ( $this->validate() ){		
		try{
			$this->records = getDB()->select("ogloszenia", [
					"[>]kat_ogloszen" => ["IDkategoria" => "IDkategoria"],
					"[>]zdjecia" => ["IDogloszenie" => "IDogloszenie"],
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
					["ogloszenia.IDogloszenie" => $this->form->id,
					]
				);

				$this->records2 = getDB()->select("komentarze", [
					"[>]uzytkownicy" => ["IDuzytkownik" => "IDuzytkownik"],
					],[
						"komentarze.IDkomentarz",
						"komentarze.IDuzytkownik",
						"komentarze.IDogloszenie",
						"komentarze.komentarz",
						"komentarze.ocena",
						"uzytkownicy.IDuzytkownik",
						"uzytkownicy.imie",
					],
					["komentarze.IDogloszenie" => $this->form->id,
					]
				);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
	}
	$this->generateView();
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->assign('wyniki2',$this->records2);
		getSmarty()->display('AdView.tpl');
	}
}