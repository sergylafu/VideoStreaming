<?php
/* Smarty version 3.1.33, created on 2019-02-06 18:27:07
  from 'C:\UwAmp\pantallas\videoStreaming\templates\visualizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b18eb768749_25902658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e484cdd550457a591f0b38efcd869e1caff379' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\videoStreaming\\templates\\visualizar.tpl',
      1 => 1549419366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b18eb768749_25902658 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información</title>
</head>

<body>
    <header>
        <form action="info.php">
            <button>Volver</button>
        </form>
    </header>
    <div>
       Titulo
        <video id="video" width="1280" height="720" controls="controls" preload="none" controlsList="nodownload">
            <source src="video.php?v=<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" type="video/mp4" />
            Tu navegador no soporta vídeos.
        </video>
    </div>
    
</body>

</html><?php }
}
