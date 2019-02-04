<?php
    include "../../seguridad/tema04-s/funciones.php";
    inicioSesion();
    session_destroy();
    unset($_SESSION);
    header("Location: login.php");
    exit;
?>