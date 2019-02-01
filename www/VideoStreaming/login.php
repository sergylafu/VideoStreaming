<?php
require_once("Pantalla.class.php");
/*session_cache_limiter('nocache, private');
session_start();
if (!isset($_SESSION['variable'])){
	$_SESSION['variable']=uniqid();
    
}
$mensaje="Pasa";*/
$pantalla=new Pantalla("../../pantallas/videoStreaming");
$pantalla->mostrar("login.tpl");

?>