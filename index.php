<!DOCTYPE html>
<!--
Login
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Style/bootstrap/css/bootstrap.css">
        <title>Login</title>
        <script>
            function registro() {
                window.location = "Formularios/FormRegistro.php";
            }

            function ingresar() {
                window.location = "Formularios/IntroJuego.html";
            }
        </script>
        <style>
            body {
                background-color:#fff;
                -webkit-font-smoothing: antialiased;
                font: normal 14px Roboto,arial,sans-serif;
                background-size: cover;
                background-image: url(Imagenes/FondoLogin.png);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .logo{
                background-position: center center;
                background-repeat: no-repeat;
            }
            .imgLogo{
                height: 300px;
                margin-top: 25%;
            }
            .container {
                padding: 25px;
                position: fixed;
                height: 100%;
                width: 100%;
            }
            .form-login {
                background-color: #EDEDED;
                padding-top: 10px;
                padding-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 15px;
                border-color:#d2d2d2;
                border-width: 5px;
                box-shadow:0 1px 0 #cfcfcf;
            }
            h4 { 
                border:0 solid #fff; 
                border-bottom-width:1px;
                padding-bottom:10px;
                text-align: center;
            }
            .form-control {
                border-radius: 10px;
            }
            .botones {
                text-align: center;
            }
            .col-md-offset-5{
                margin-left: 38.666667%;
            }
            .divLogin{
                margin-top: 15%;
                margin-left: 35% ; 
                margin-right: 35% ;
            }
        </style>
    </head>
    <body>
        <form action="Formularios/Clases/Proceso/ProcesoLogin.php" method="post">
            <div class="container">
                <div class="divLogin">
                    <div class="justify-content-center" style="width: 100%;">
                        <div class="form-login">
                            <br>
                            <input type="text" name="userName" class="form-control input-sm chat-input" placeholder="Usuario" required/>
                            </br>
                            <input type="password" name="userPassword" class="form-control input-sm chat-input" placeholder="Clave" required/>
                            </br>
                            <div class="botones">
                                <button  name="login" value="1" class="btn btn-outline-success btn-md " >
                                    <strong>Ingresar</strong> 
                                </button>    
                                <button onclick="registro()" name="registrar" value="2" class="btn btn-outline-warning btn-md botonRegistrar">
                                    <strong>Registrarse</strong>
                                </button>    
                            </div>
                        </div>
                        <center>
                            <img src="Imagenes/FONDO.png" class="imgLogo" >                   
                        </center>
                    </div>
                </div>
            </div>  
        </form>
    </body>
</html>
