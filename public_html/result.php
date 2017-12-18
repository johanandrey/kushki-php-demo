<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	session_start();
	require_once 'vendor/autoload.php';
	
	$merchantId = '10000002817379000700151319726277';
	$idioma = kushki\lib\KushkiLanguage::ES;
	$moneda = kushki\lib\KushkiCurrency::COP;
	$entorno = kushki\lib\KushkiEnvironment::TESTING;
	$kushki = new kushki\lib\Kushki($merchantId, $idioma, $moneda, $entorno);
	
	//$token = 'nOvYRl100000v10OT6016413QABgjVwM';
	//var_dump($kushki);
	$token = $_POST['kushkiToken'];
	//$meses = $_POST["kushkiDeferred"];
	$meses = 3;
	$subTotalIVA=58739;
	$iva = 11161;
	$subtotalIVA0=0;
	$ice = 0;
	$monto = new kushki\lib\Amount($subTotalIVA, $iva, $subtotalIVA0, $ice);
	
	$metadata = array(
		"nombre" => $_SESSION["nombre"] ,
		"tipodoc" => $_SESSION["tipoDocumento"],
		"documento" => $_SESSION["documento"],
		"ciudad" => $_SESSION["ciudad"],
		"direccion_envio" => $_SESSION["direccion"],
		"email" => $_SESSION["email"],
		"celular" => $_SESSION["celular"],
		"talla_pijama_1" => $_SESSION["pijama1"],
		"talla_pijama_2" => $_SESSION["pijama2"]
		);
	$metadata = array("Key1"=>"value1", "Key2"=>"value2");
	//$trx = $kushki->charge($token, $monto, $metadata);
	$deferredChargeTransaction = $kushki->deferredCharge($token, $monto, $meses, $metadata);

	if($deferredChargeTransaction->isSuccessful()){
		//print_r($deferredChargeTransaction->getTicketNumber());	
		echo "<h1>sucessfull</h1>";
		var_dump($deferredChargeTransaction);
	} else {
		echo "<h1>bad</h1>";
		//print_r($deferredChargeTransaction->getResponseText());	
		var_dump($deferredChargeTransaction);
	}
	echo "<br /> metadata<br />";
	var_dump($metadata);