<?php
    require_once("Pantalla2.class.php");
    $pantalla=new Pantalla("../../pantallas/videoStreaming");

    $ruta=$_POST['cod'];

    $parametros=array("ruta"=>$ruta);

    $pantalla->mostrar("visualizar.tpl",$parametros);

?>