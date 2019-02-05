<?php
    require_once ("../../seguridad/videoStreaming/VideoStream.class.php");
    $ruta=$_POST["cod"];
    $video=new VideoStream("../../recursos/videos/$ruta");
    $video->start();
    //echo $ruta;
?>