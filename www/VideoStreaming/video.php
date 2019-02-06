<?php
    require_once ("../../seguridad/videoStreaming/VideoStream.class.php");
    $v=$_GET["v"];
    $video=new VideoStream("../../recursos/videos/$v");
    $video->start();
    //echo $ruta;
?>