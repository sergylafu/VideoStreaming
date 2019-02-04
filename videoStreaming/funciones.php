<?php
function inicioSesion(){
	session_name("SESION");
	session_cache_limiter('private,nocache');
	session_start();
}

function validado(&$dni,&$nombre,&$codigo){
	$validado=false;
	if (isset($_SESSION['validado']) && $_SESSION['validado']){
		$validado=true;
		$dni=$_SESSION['dni'];
		$nombre=$_SESSION['nombre'];
		$codigo=$_SESSION['codigo'];
	}
	return $validado;
}

?>