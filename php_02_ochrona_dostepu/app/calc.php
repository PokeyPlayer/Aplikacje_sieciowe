<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota,&$lata,&$oprocentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

function validate(&$kwota,&$lata,&$oprocentowanie,&$messages){
	if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
			return false;
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

	if (count ( $messages ) != 0) return false;

	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota kredytu musi być liczbą całkowitą.';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Okres spłaty kredytu musi być liczbą całkowitą.';
	}	

	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Oprocentowanie kredytu musi być liczbą całkowitą.';
	}	

	if (count ( $messages ) != 0) return false;

	if ( $kwota < 0) {
		$messages [] = 'Kwota kredytu nie może być ujemna.';
	}
	if ( $lata < 0) {
		$messages [] = 'Okres spłaty kredytu nie może być ujemny.';
	}
	if ( $oprocentowanie < 0) {
		$messages [] = 'Oprocentowanie kredytu nie może być ujemne.';
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$oprocentowanie,&$messages,&$wynik){
	global $rola;

	$kwota = intval($kwota);
	$lata = intval($lata);
	$oprocentowanie = intval($oprocentowanie);

	if ($kwota<=1000000){
		$wynik = (($kwota*$oprocentowanie*0.01)+$kwota)/($lata*12);
		$wynik = round($wynik, 2);
	}else{
		if ($rola == 'admin'){
			$wynik = (($kwota*$oprocentowanie*0.01)+$kwota)/($lata*12);
			$wynik = round($wynik, 2);
		}else{
			$messages [] = 'Tylko administrator może wyliczać kredyt powyżej miliona złotych!';
		}
	}
}

$kwota = null;
$lata = null;
$oprocentowanie = null;
$wynik = null;
$messages = array();

getParams($kwota,$lata,$oprocentowanie);
if (validate($kwota,$lata,$oprocentowanie,$messages) ) {
	process($kwota,$lata,$oprocentowanie,$messages,$wynik);
}

include 'calc_view.php';