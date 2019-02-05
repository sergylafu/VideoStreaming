<?php
    require_once("Pantalla2.class.php");
    require_once("Video.class.php");
    //require_once("menu.php");
    require_once ("../../seguridad/videoStreaming/mostrarCartelera.php");
    $codPeli = $_POST['codPeli'];
    $bd=new Cartelera();
    $videos = $bd->getDatos($codPeli);
    $pantalla = new Pantalla("../../pantallas/videoStreaming");
    $parametros = array('videos' => $videos);
    $pantalla->mostrar("info.tpl",$parametros);
    


?>