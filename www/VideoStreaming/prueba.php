<?php
    require_once("../../seguridad/videoStreaming/videosBD.class.php");
    class Cartelera{
        function getDatos($codPeli){
            $canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
            if ($canal->connect_errno){
                die("Error de conexión con la base de datos");
            }
            $canal->set_charset("utf8");
            $consulta=$canal->prepare("select codigo,titulo,cartel,descargable,codigo_perfil,sinopsis from videos where codigo=?");
            $consulta->bind_param("s",$ccodPeli);
            $ccodPeli = $codPeli;
            $consulta->execute();
            $consulta->bind_result($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis);
            $consulta->store_result();
            echo $titulo;
            $videos=array();
            array_push($videos,new Videos($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis));
            $canal->close();
            unset($consulta);
            return $videos;

        }
        
    }
    
?>