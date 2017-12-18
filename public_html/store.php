<?php
	session_start();
	$_SESSION["nombre"] = $_POST['nombre'];
	$_SESSION["tipoDocumento"] = $_POST['tipoDocumento'];
	$_SESSION["documento"] = $_POST['documento'];
	$_SESSION["ciudad"] = $_POST['ciudad'];
	$_SESSION["direccion"] = $_POST['direccion'];
	$_SESSION["email"] = $_POST['email'];
	$_SESSION["celular"] = $_POST['celular'];
	$_SESSION["pijama1"] = $_POST['pijama1'];
	$_SESSION["pijama2"] = $_POST['pijama2'];
?>