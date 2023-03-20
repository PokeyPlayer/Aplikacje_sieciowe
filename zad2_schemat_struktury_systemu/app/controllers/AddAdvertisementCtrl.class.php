<?php

namespace app\controllers;

use app\forms\AddAdvertisementForm;
use DateTime;
use PDOException;

class AddAdvertisementCtrl {

	private $form;

	public function __construct(){
		$this->form = new AddAdvertisementForm();
	}

	public function validate() {
		$this->form->id_uzyt = getFromRequest('id_uzyt',true,'Błędne wywołanie aplikacji1');
		$this->form->tytul = getFromRequest('tytul',true,'Błędne wywołanie aplikacji2');
		$this->form->kategoria = getFromRequest('kategoria',true,'Błędne wywołanie aplikacji3');
		$this->form->opis = getFromRequest('opis',true,'Błędne wywołanie aplikacji4');
		$this->form->cena = getFromRequest('cena',true,'Błędne wywołanie aplikacji5');

		if (empty($this->form->tytul)) {
			getMessages()->addError('Wpisz tytuł ogłoszenia');
		}
		if (empty($this->form->kategoria)) {
			getMessages()->addError('Wybierz kategorię ogłoszenia');
		}
		if (empty($this->form->opis)) {
			getMessages()->addError('Wpisz opis ogłoszenia');
		}
		if (empty($this->form->cena)) {
			getMessages()->addError('Wpisz cenę');
		}
		if ($_FILES["zdjecie"]["size"] == 0) {
			getMessages()->addError('Wgraj zdjęcie ogłoszenia');
		}
		if (getMessages()->isError()) return false;


		if (file_exists("img/" . basename($_FILES["zdjecie"]["name"]))) {
			getMessages()->addError('Przepraszamy, taki plik już istnieje');
		}
		if ($_FILES["zdjecie"]["size"] > 5000000) {
			getMessages()->addError('Zdjęcie jest zbyt duże');
		}
		if($_FILES["zdjecie"]["type"] != "image/jpg" && $_FILES["zdjecie"]["type"] != "image/png" && $_FILES["zdjecie"]["type"] != "image/jpeg") {
			getMessages()->addError('Dozwolone są tylko pliki JPG, JPEG i PNG');
		}
		if (getMessages()->isError()) return false;

		return ! getMessages()->isError();
	}

	public function action_addAdvertisementShow(){
		$this->generateView();
	}

	public function action_addAdvertisement(){
		if ($this->validate()) {
			$nazwa_pliku = $_FILES["zdjecie"]["name"];
   			$nazwa_tymczasowa = $_FILES["zdjecie"]["tmp_name"];
    		$folder = "img/" . $nazwa_pliku;

			$this->form->id_uzyt=$_SESSION['IDuzytkownik'];
			try {
				getDB()->insert("ogloszenia", [
					"IDuzytkownik" => $this->form->id_uzyt,
					"IDkategoria" => $this->form->kategoria,
					"tytul" => $this->form->tytul,
					"opis" => $this->form->opis,
					"cena" => $this->form->cena,
					"srednia_ocen" => 0,
					]);	
					$IDogloszenie = getDB()->id();
					
					getDB()->insert("zdjecia", [
						"IDogloszenie" => $IDogloszenie,
						"zdjecie" => $nazwa_pliku,
						]);

					if (move_uploaded_file($nazwa_tymczasowa, $folder)) {
						getMessages()->addInfo ('Pomyślnie dodano zdjęcie');
					} else {
						getMessages()->addError ('Nie dodano zdjecia');
					}
				getMessages()->addInfo('Pomyślnie dodano ogłoszenie');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas dodawania ogłoszenia');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			forwardTo('adList');
		} else {
			$this->generateView();
		}	
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('AddAdvertisement.tpl');
	}
}