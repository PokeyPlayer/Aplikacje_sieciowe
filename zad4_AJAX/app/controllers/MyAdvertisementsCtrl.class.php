<?php

namespace app\controllers;

use PDOException;

class MyAdvertisementsCtrl {

	private $records;

	public function action_myAdvertisements(){
		$IDuzytkownik=$_SESSION['IDuzytkownik'];
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
					   "ogloszenia.IDuzytkownik" => $IDuzytkownik,
					]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania ogłoszeń');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
				
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->display('MyAdvertisementsView.tpl');
	}	
}