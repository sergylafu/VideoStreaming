<?php
    require_once("../../seguridad/videoStreaming/videosBD.class.php");
    class Cartelera{

        function verPeliculas(){
            $canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
            if ($canal->connect_errno){
                die("Error de conexión con la base de datos ");
            }
            $canal->set_charset("utf8");
            session_name("SESION");
            session_cache_limiter('private,nocache');
            session_start();
            $codigo=$_SESSION['codigo'];
            echo $codigo;
            $consulta=$canal->prepare("select codigo,titulo,cartel,descargable,codigo_perfil,sinopsis,video from videos where codigo_perfil=?");
            $consulta->bind_param("s",$ccodigo);
            $ccodigo=$codigo;
            $consulta->execute();
            $consulta->bind_result($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis,$video);
            $consulta->store_result();
            $videos=array();
            while($consulta->fetch()){
                array_push($videos,new Videos($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis,$video));
                /*echo $codigo;
                echo $titulo;
                echo "<img src='carteles/$cartel' height='200' weight='100'>";
                echo $descargable;
                echo $codigo_perfil;
                echo $sinopsis;
                echo "<br />";*/
            }
            $consulta->free_result();
            unset($consulta);
            
            /*function comparar($a,$b){
                return strcmp($a->titulo, $b->titulo);
            }
            usort($videos,"comparar");*/
            return $videos;
            
        }
        function getDatos($codPeli){
            $canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
            if ($canal->connect_errno){
                die("Error de conexión con la base de datos");
            }
            $canal->set_charset("utf8");
            $consulta=$canal->prepare("select codigo,titulo,cartel,descargable,codigo_perfil,sinopsis,video from videos where codigo=?");
            $consulta->bind_param("s",$ccodPeli);
            $ccodPeli = $codPeli;
            $consulta->execute();
            $consulta->bind_result($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis,$video);
            $consulta->fetch();
            //echo $titulo;
            $videos=array();
            array_push($videos,new Videos($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis,$video));
            //$canal->close();
            unset($consulta);
            return $videos;
            
        }

        
    }
    
?>