<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información</title>
</head>

<body>
    <header>Netflix<a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></header>
    
    <main>
        <article>
          <!--{foreach from=$videos item=video}-->
           <form action="video.php" method="post">
                <input type="hidden" value="{$video->video}" name="cod" id="cod">
                <img src="carteles/{$video->cartel}" alt="Cartel" height="200" width="150"><br />
                <h1>{$video->titulo}</h1>
                <p>{$video->sinopsis}</p>
                <input type="submit" value="Ver">
           </form>
        </article>
        <!--{/foreach}-->
    </main>
    <!--<p>{$video->sinopsis}</p><br />-->
    
</body>

</html>