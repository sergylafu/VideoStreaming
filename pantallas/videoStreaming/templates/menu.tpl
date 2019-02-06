<!DOCTYPE html>
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
    {foreach from=$videos item=video}
    <main>
        <article>
           <form action="info.php" method="post">
                <!--<img src="carteles/{$video->cartel}" alt="Cartel" height="200" width="150"><br />-->
                <input type="hidden" value="{$video->codigo}" name="codPeli" id="codPeli">
                <input type="image" src="carteles/{$video->cartel}" height="200" width="150">
                <h1>{$video->titulo}</h1>
                
           </form>
        </article>
    </main>
    <!--<p>{$video->sinopsis}</p><br />-->
    {/foreach}
</body>

</html>
