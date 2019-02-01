<!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <title>Tienda ON-Line</title>
    <style>
            html {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                line-height:1.5;
                font-size:1em;
            }
        .modal {
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: hidden; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 0px;
        }

	/* Modal Content/Box */
	.modal-content {
		background-color: black;
        color: white;
		margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
		border: 2px solid red;
		width: 20%; /* Could be more or less, depending on screen size */
        border-radius: 15px 15px 15px 15px;
        -moz-border-radius: 15px 15px 15px 15px;
        -webkit-border-radius: 15px 15px 15px 15px;
        
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
	}
	.container {
		/*padding: 10%;*/
        padding-left: 19%;
        padding-bottom: 20%;
        padding-top: 20%;
        
	}
        input{
            border-radius: 15px 15px 15px 15px;
            -moz-border-radius: 15px 15px 15px 15px;
            -webkit-border-radius: 15px 15px 15px 15px;
            border: 2px solid red;
            background-color: #5F5F5F;
            box-sizing: border-box;
            padding: 15px;
            margin-top: 10px;
            margin-bottom: 10px;
            color: white;
        }
        .myButton {
            background-color:#fa0000;
            -moz-border-radius:15px 15px 15px 15px;
            -webkit-border-radius:15px 15px 15px 15px;
            border-radius:15px 15px 15px 15px;
            border:2px solid #566963;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:17px;
            /*padding:16px 31px;*/
            text-decoration:none;
            text-shadow:0px 1px 0px #2b665e;
            box-sizing: border-box;
            padding: 15px;
            width: 79%;
            margin-top: 10px;
        }
        .myButton:hover {
            background-color:#c21b1b;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
        ::placeholder {
            color:#9B9191;
        }
    </style>
</head>

<body background="fondoLogin.jpg">
    
    <!-- Login-->
    <div id="id01" class="modal">
        <form action="validar.php" method="post" class="modal-content">
            <div class="container">
                <input type='text' name='dni' size='20' maxlength='9' placeholder='DNI' required /><br />     
                <input type='password' name='clave' size='20' maxlength='20' placeholder='Contraseña' /><br />
                <button type="submit" class="myButton">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
