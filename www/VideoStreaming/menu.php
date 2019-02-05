<?php
require_once("Pantalla2.class.php");
require_once("Video.class.php");
require_once("../../seguridad/videoStreaming/mostrarCartelera.php");
$bd=new Cartelera();
$videos = $bd->verPeliculas();

$pantalla=new Pantalla("../../pantallas/videoStreaming");
$parametros=array('videos' => $videos);
$pantalla->mostrar("menu.tpl",$parametros);
?>