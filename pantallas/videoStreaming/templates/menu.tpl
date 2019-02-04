<!DOCTYPE html>
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
    {foreach from=$videos item=video}
    <main>
        <article>
            <img src="carteles/{$video->cartel}" alt="Cartel" height="200" width="150"><br />
            <h1>{$video->titulo}</h1>
        </article>
    </main>



    <!--<p>{$video->sinopsis}</p><br />-->

    {/foreach}
</body>

</html>
