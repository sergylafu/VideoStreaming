<?php
/* Smarty version 3.1.33, created on 2019-02-05 22:20:28
  from 'C:\UwAmp\pantallas\videoStreaming\templates\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59fe1cdcf663_09600139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be2d3de4ed09876ec08581189a1c2ddf665091e' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\videoStreaming\\templates\\info.tpl',
      1 => 1549401571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c59fe1cdcf663_09600139 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información</title>
</head>

<body>
    <header>Netflix<a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></header>
    
    <main>
        <article>
          <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>-->
           <form action="video.php" method="post">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
" name="cod" id="cod">
                <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="Cartel" height="200" width="150"><br />
                <h1><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p>
                <input type="submit" value="Ver">
           </form>
        </article>
        <!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
    </main>
    <!--<p><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p><br />-->
    
</body>

</html><?php }
}
