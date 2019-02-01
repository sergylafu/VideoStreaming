<?php
require_once("Pantalla.class.php");
/*session_cache_limiter('nocache, private');
session_start();
if (!isset($_SESSION['variable'])){
	$_SESSION['variable']=uniqid();
    
}

$mensaje="Pasa";*/
//$nombre=$_SESSION('nombre');
$smarty = new Smarty;
$pantalla=new Pantalla("../../pantallas/videoStreaming");
$smarty->assign(‘probando’,'4568');
$pantalla->mostrar("menu.tpl");

?>