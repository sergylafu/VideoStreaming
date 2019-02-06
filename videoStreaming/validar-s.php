<?php
$dni="";
 
if (!isset($_POST['dni'])){
	header("Location: login.php");
	exit;
}
$dni=strip_tags(trim($_POST['dni']));
$clave="";
if (!isset($_POST['clave'])){
	header("Location: login.php");
	exit;
}
$clave=strip_tags(trim($_POST['clave']));
if (empty($dni) || strlen($dni)>9 || empty($clave) || strlen($clave)>20){
	header("Location: login.php?mensaje=".urlencode("Usuario inexistente o clave no reconocida"));
	exit;
}
$canal=@mysqli_connect(IP,USUARIO,CLAVE,BD);
if (!$canal){
	echo "Ha ocurrido el error: ".mysqli_connect_errno()." ".mysqli_connect_error()."<br />";
    exit;
}
mysqli_set_charset($canal,"utf8");
$sql="select clave,nombre from usuarios where dni=?";
    $consulta=mysqli_prepare($canal,$sql);
    if (!$consulta){
        echo "Ha ocurrido el error: ".mysqli_errno($canal)." ".mysqli_error($canal)."<br />";
        exit;	
    }
    mysqli_stmt_bind_param($consulta,"s",$ddni);
    $ddni=$dni;
    mysqli_stmt_execute($consulta);
    mysqli_stmt_bind_result($consulta,$claveBD,$nnombre);
    mysqli_stmt_fetch($consulta);
    
    if (password_verify($clave, $claveBD)) {
        echo '¡La contraseña es válida!';
    } else {
        echo $claveBD;
        echo "<script type='text/javascript'> alert('Datos incorrectos.'); window.location.href='login.php'; </script>";
        exit;
    }
mysqli_stmt_close($consulta);
unset($consulta);

//Consulta para saber el perfil del usuario
$canal=@mysqli_connect(IP,USUARIO,CLAVE,BD);
if (!$canal){
	echo "Ha ocurrido el error: ".mysqli_connect_errno()." ".mysqli_connect_error()."<br />";
    exit;
}
mysqli_set_charset($canal,"utf8");
$sql="select codigo_perfil from perfil_usuario where dni=?";
    $consulta=mysqli_prepare($canal,$sql);
    if (!$consulta){
        echo "Ha ocurrido el error: ".mysqli_errno($canal)." ".mysqli_error($canal)."<br />";
        exit;	
    }
    mysqli_stmt_bind_param($consulta,"s",$ddni);
    $ddni=$dni;
    mysqli_stmt_execute($consulta);
    $codigoPerfil=array();
    mysqli_stmt_bind_result($consulta,$codigoPerfil);
    mysqli_stmt_fetch($consulta);
    
mysqli_stmt_close($consulta);
unset($consulta);



//Se inicia sesión
session_name("SESION");
session_cache_limiter('private,nocache');
session_start();

//Datos básicos del usuario (secretos)
$_SESSION['validado']=true;
$_SESSION['dni']=$dni;
$_SESSION['nombre']=$nnombre;
$_SESSION['codigo']=$codigoPerfil;
?>
