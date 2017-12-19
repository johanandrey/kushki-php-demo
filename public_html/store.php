<?php
	session_start();
	$_SESSION["nombre"] = htmlentities($_POST['nombre'], ENT_QUOTES, "UTF-8");
	$_SESSION["tipoDocumento"] = htmlentities($_POST['tipoDocumento'], ENT_QUOTES, "UTF-8");
	$_SESSION["documento"] = htmlentities($_POST['documento'], ENT_QUOTES, "UTF-8");
	$_SESSION["ciudad"] = htmlentities($_POST['ciudad'], ENT_QUOTES, "UTF-8");
	$_SESSION["direccion"] = htmlentities($_POST['direccion'], ENT_QUOTES, "UTF-8");
	$_SESSION["email"] = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
	$_SESSION["celular"] = htmlentities($_POST['celular'], ENT_QUOTES, "UTF-8");
	$_SESSION["pijama1"] = htmlentities($_POST['pijama1'], ENT_QUOTES, "UTF-8");
	$_SESSION["pijama2"] = htmlentities($_POST['pijama2'], ENT_QUOTES, "UTF-8");
	//echo htmlentities($_POST['text1'], ENT_QUOTES, "UTF-8");
?>