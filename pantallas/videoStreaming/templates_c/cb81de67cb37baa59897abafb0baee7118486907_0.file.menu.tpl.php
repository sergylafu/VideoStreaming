<?php
/* Smarty version 3.1.33, created on 2019-02-04 19:19:02
  from 'C:\UwAmp\pantallas\videoStreaming\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c588216698ce1_47053754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb81de67cb37baa59897abafb0baee7118486907' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\videoStreaming\\templates\\menu.tpl',
      1 => 1549304339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c588216698ce1_47053754 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menú</title>
    <style>
        header{
            width: 100%;
            background-color: red;
            color: white;
        }
        a{
            text-decoration:none;
            color: white;
            border: 1px solid white;
            padding:3px;
            float: right;
            background-color: black;
        }
        article{
            width: 20%;
            display: inline-block;
            position: relative;
        }
        main{
            width: 100%;
            display: inline-block;
            position: relative;
        }
    </style>
</head>

<body>
    <header>Netflix<a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></header>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
    <main>
        <article>
            <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="Cartel" height="200" width="150"><br />
            <h1><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h1>
        </article>
    </main>



    <!--<p><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p><br />-->

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>

</html>
<?php }
}
