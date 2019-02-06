<?php
/* Smarty version 3.1.33, created on 2019-02-06 18:30:00
  from 'C:\UwAmp\pantallas\videoStreaming\templates\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b1998115e20_66153073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be2d3de4ed09876ec08581189a1c2ddf665091e' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\videoStreaming\\templates\\info.tpl',
      1 => 1549474183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b1998115e20_66153073 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información</title>
    <style>
        html{
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
        a{
            text-decoration:none;
            color: black;
            border: 1px solid white;
            padding:3px;
            float: right;
            background-color: #00a0d6;
        }
        #izquierda{
            display: inline-block;
            width: 30%;
            float: left;
            margin-left: 50px;
            margin-top: 10px;
        }
        #derecha{
            width: 60%;
            float: right;
            margin-top: 150px;
            margin-right: 40px;
        }
        img{
            width: 80%;
            /*height=200; 
            width=150;*/
        }
        p{
            text-align: justify;
        }
        body{
            background-color: #0f171e;
            color: white;
        }
        h1{
            color: #00a0d6;
        }
        
    </style>
</head>

<body background="#">
    <header>Netflix<a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></header>
    
    <main>
        <article>
          <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>-->
                   </article>
        <div id="izquierda">
            <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="Cartel">
        </div>
        <div id="derecha">
           <form action="visualizar.php" method="post">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
" name="cod" id="cod">
                <h1><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p>
                <input type="submit" value="Ver">
                    <input type="submit" value="Descargar">
   
           </form>
 
        </div>
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
