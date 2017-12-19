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
	
	$_SESSION["token"] = $_POST['kushkiToken'];
	if( isset($_POST["kushkiDeferred"]) ){
		$meses = $_POST["kushkiDeferred"];
	} else {
		$meses = 0;
	}
	$subTotalIVA=58739;
	$iva = 11161;
	$subtotalIVA0=0;
	$ice = 0;
	$monto = new kushki\lib\Amount($subTotalIVA, $iva, $subtotalIVA0, $ice);
	
	$metadata = array(
		"nombre" => $_SESSION["nombre"],
		"tipodoc" => $_SESSION["tipoDocumento"],
		"documento" => $_SESSION["documento"],
		"ciudad" => $_SESSION["ciudad"],
		"direccion_envio" => $_SESSION["direccion"],
		"email" => $_SESSION["email"],
		"celular" => $_SESSION["celular"],
		"talla_pijama_1" => $_SESSION["pijama1"],
		"talla_pijama_2" => $_SESSION["pijama2"]
		);

	if( $meses > 0 ) {
    	$transaccion = $kushki->deferredCharge($_SESSION["token"], $monto, $meses, $metadata);
	} else{
    	$transaccion = $kushki->charge($_SESSION["token"], $monto, $metadata);
    }

    if( $transaccion->isSuccessful() ){
    	$_SESSION["ticket"] = $transaccion->getTicketNumber();
    	header('Location: result.php');
     	exit();
    } else{
    	echo "<h2>Error al procesar la transacción: ".$transaccion->getTicketNumber()."</h2>";
    	echo "<h2>Detalle: " .$transaccion->getResponseText()."</h2>";
    }
