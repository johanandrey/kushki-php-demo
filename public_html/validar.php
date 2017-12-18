<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

//$merchantId = '10000001641344874123111220';
$merchantId = '10000001641080185390111217';
$idioma = kushki\lib\KushkiLanguage::ES;
$moneda = kushki\lib\KushkiCurrency::USD;
$entorno = kushki\lib\KushkiEnvironment::TESTING;

$kushki = new kushki\lib\Kushki($merchantId, $idioma, $moneda, $entorno);

//$token = 'nOvYRl100000v10OT6016413QABgjVwM';
$token = '7zX0bR100000sFDeyE016410oWqgsFRO';
$subTotalIVA=49.99;
$iva = 0;
$subtotalIVA0=0;
$ice = 0;
$monto = new kushki\lib\Amount($subTotalIVA, $iva, $subtotalIVA0, $ice);
//$trx =  $kushki->charge($token, $monto);

$metadataarray = array(
	'nombre' => '',
	'tipodoc' => '',
	'documento' => '',
	'ciudad' => '',
	'direccion_envio' => '',
	'email' => '',
	'celular' => '',
	'talla_pijama_1' => '',
	'talla_pijama_2' => '',
	);

$metadata = json_encode($metadataarray);
$trx = $kushki->charge($token, $monto, $metadata);

if($trx->isSuccessful()){
	print_r($trx->getTicketNumber());	
} else {
	print_r($trx->getResponseText());	
}


