<!DOCTYPE html>
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
          <!--{foreach from=$videos item=video}-->
                   </article>
        <div id="izquierda">
            <img src="carteles/{$video->cartel}" alt="Cartel">
        </div>
        <div id="derecha">
           <form action="visualizar.php" method="post">
                <input type="hidden" value="{$video->video}" name="cod" id="cod">
                <h1>{$video->titulo}</h1>
                <p>{$video->sinopsis}</p>
                <input type="submit" value="Ver">
                    <input type="submit" value="Descargar">
   
           </form>
 
        </div>
        <!--{/foreach}-->
    </main>
    <!--<p>{$video->sinopsis}</p><br />-->
    
</body>

</html>