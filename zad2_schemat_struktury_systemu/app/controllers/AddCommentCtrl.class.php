<?php

namespace app\controllers;

use app\forms\AddCommentForm;
use DateTime;
use PDOException;

class AddCommentCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new AddCommentForm();
	}

	public function validateEdit() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji1');
		$this->form->id_uzyt = getFromSession('IDuzytkownik',true,'Błędne wywołanie aplikacji2');
		if ( getMessages()->isError() ) return false;

		return ! getMessages()->isError();
	}

	public function validateSave() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji1');
		$this->form->id_uzyt = getFromSession('IDuzytkownik',true,'Błędne wywołanie aplikacji2');
		$this->form->ocena = getFromRequest('ocena',true,'Błędne wywołanie aplikacji3');
		$this->form->komentarz = getFromRequest('komentarz',true,'Błędne wywołanie aplikacji4');
		if ( getMessages()->isError() ) return false;

		return ! getMessages()->isError();
	}

	public function action_addComment(){
		if ( $this->validateEdit() ){	
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
					[ "ogloszenia.IDogloszenie" => $this->form->id ]
				);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
	}
	$this->generateView();
	}

	public function action_addSave(){
		if ($this->validateSave()) {
			$this->form->id_uzyt=$_SESSION['IDuzytkownik'];
			$suma=0;
			try {
				getDB()->insert("komentarze", [
					"IDuzytkownik" => $this->form->id_uzyt,
					"IDogloszenie" => $this->form->id,
					"ocena" => $this->form->ocena,
					"komentarz" => $this->form->komentarz,
					]);	

					$suma = getDB()->sum("komentarze", [
						"ocena",
					],
					[
						"IDogloszenie" => $this->form->id, 
					]);

					$count = getDB()->count("komentarze", [
						"ocena",
					],
					[
						"IDogloszenie" => $this->form->id,
					]);
					$srednia = round($suma/$count, 1);

					getDB()->update("ogloszenia", [
						"srednia_ocen" => $srednia,
					],
					[
						"IDogloszenie" => $this->form->id,
					]);
				getMessages()->addInfo('Pomyślnie zapisano opinię');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu oceny');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			forwardTo('adView');
		} else {
			$this->generateView();
		}	
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->display('AddComment.tpl');
	}
}