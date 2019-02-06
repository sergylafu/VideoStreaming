<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:08:55
  from 'C:\UwAmp\pantallas\videoStreaming\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b4ce793ba12_17859842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb81de67cb37baa59897abafb0baee7118486907' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\videoStreaming\\templates\\menu.tpl',
      1 => 1549487333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b4ce793ba12_17859842 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menú</title>
    <style>
        html{
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
        header{
            width: 100%;
            background-color: red;
            color: white;
        }
        a{
            text-decoration:none;
            color: black;
            border: 1px solid white;
            padding:3px;
            float: right;
            background-color: #00a0d6;
        }
        article{
            width: 200;
            /*width: 20%;*/
            height: 325;
            display: inline-block;
            position: relative;
            border: 2px solid #00a0d6;
            /*left: 500px;*/
            margin: 10px;
            
        }
        input[type="image"]{
            height: 200;
            width: 150;
            margin-left: 25px;
            margin-top: 25px;
        }
        body{
            background-color: #0f171e;
            color: white;
        }
        main{
            display: inline-block;
            width: 100%;
            position: relative;
        }
        h1{
            text-align: center;
            margin-bottom: 25px;
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
           <form action="info.php" method="post">
                <!--<img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="Cartel" height="200" width="150"><br />-->
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->codigo;?>
" name="codPeli" id="codPeli">
                <input type="image" src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" height="200" width="150">
                <h1><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h1>
                
           </form>
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
