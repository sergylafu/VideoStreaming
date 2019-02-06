<!DOCTYPE html>
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
            <source src="video.php?v={$ruta}" type="video/mp4" />
            Tu navegador no soporta vídeos.
        </video>
    </div>
    
</body>

</html>