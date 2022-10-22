<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$lata = $_REQUEST ['lata'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu.';
}
if ( $lata == "") {
	$messages [] = 'Nie podano okresu spłaty kredytu.';
}
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania kredytu.';
}

if (empty( $messages )) {
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota kredytu musi być liczbą całkowitą.';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Okres spłaty kredytu musi być liczbą całkowitą.';
	}	

	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Oprocentowanie kredytu musi być liczbą całkowitą.';
	}	

}

if (empty( $messages )) {
	if ( $kwota < 0) {
		$messages [] = 'Kwota kredytu nie może być ujemna.';
	}
	if ( $lata < 0) {
		$messages [] = 'Okres spłaty kredytu nie może być ujemny.';
	}
	if ( $oprocentowanie < 0) {
		$messages [] = 'Oprocentowanie kredytu nie może być ujemne.';
	}
}

if (empty ( $messages )) { 	
	$kwota = intval($kwota);
	$lata = intval($lata);
	$oprocentowanie = intval($oprocentowanie);
	
	$wynik = (($kwota*$oprocentowanie*0.01)+$kwota)/($lata*12);
	$wynik = round($wynik, 2);
}

include 'calc_view.php';