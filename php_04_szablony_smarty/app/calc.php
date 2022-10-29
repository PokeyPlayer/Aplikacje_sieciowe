<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

function validate(&$form,&$infos,&$messages,&$hide_intro){

	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['oprocentowanie']) ))	return false;	

	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	if ( $form['kwota'] == "") $messages [] = 'Nie podano kwoty kredytu.';
	if ( $form['lata'] == "") $messages [] = 'Nie podano okresu spłaty kredytu.';
	if ( $form['oprocentowanie'] == "") $messages [] = 'Nie podano oprocentowania kredytu.';
	
	if ( count($messages)==0 ) {
		if (! is_numeric( $form['kwota'] )) $messages [] = 'Kwota kredytu musi być liczbą całkowitą.';
		if (! is_numeric( $form['lata'] )) $messages [] = 'Okres spłaty kredytu musi być liczbą całkowitą.';
		if (! is_numeric( $form['oprocentowanie'] )) $messages [] = 'Oprocentowanie kredytu musi być liczbą całkowitą.';
	}
	
	if ( count($messages)==0 ) {
		if ( $form['kwota'] < 0) $messages [] = 'Kwota kredytu nie może być ujemna.';
		if ( $form['lata'] < 0) $messages [] = 'Okres spłaty kredytu nie może być ujemny.';
		if ( $form['oprocentowanie'] < 0) $messages [] = 'Oprocentowanie kredytu nie może być ujemne.';
	}

	if (count($messages)>0) return false;
	else return true;
}

function process(&$form,&$infos,&$messages,&$wynik){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	$form['kwota'] = floatval($form['kwota']);
	$form['lata'] = floatval($form['lata']);
	$form['oprocentowanie'] = floatval($form['oprocentowanie']);
	
	$wynik = (($form['kwota']*$form['oprocentowanie']*0.01)+$form['kwota'])/($form['lata']*12);
	$wynik = round($wynik, 2);
		
}

$form = null;
$infos = array();
$messages = array();
$wynik = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$wynik);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('wynik',$wynik);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.html');