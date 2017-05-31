<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../Jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../Style/bootstrap/css/bootstrap.css">
        <title>Intro</title>
        <script>
            function CerrarModal() {
                $('#myModal').hide();
            }
        </script>
        <style>
            body {
                background-color:#fff;
                -webkit-font-smoothing: antialiased;
                background-image: url(../Imagenes/fondoVideo.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            #myModal{
                position: fixed;
                height:100vh;
                width:100vw;
                z-index: 1;
                top:0;
                left: 0;
                background-color: rgba(0, 0, 0, 0.5);
            }
            #contenidomodal{
                position: relative;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #999;
                border: 1px solid rgba(0,0,0,.2);
                border-radius: 10px;
                outline: 0;
                box-shadow: 0 3px 9px rgba(0,0,0,.5);
                width: 95%;
                height: 95%;
                margin: auto;
                margin-top: 1%;
            }

            #cabecera{
                height: 35px;
                background-color: black;
                color: white;
                font-size: 18px;
                text-align: center;
                font-family: Helvetica;
                font-weight: bold;
                padding: 5px;
                border-bottom: 1px solid #e5e5e5;
            }

            .cntCabecera{
                height: 40px;
                display:inline-block;
                vertical-align: top;
                padding-top: 3px;
            }

            .btnCerrar{
                width: 40px;
                display:inline-block;
                vertical-align: top;
                float:right;
                cursor:pointer;
            }


            body            {              
                margin: 0;
            }
            .video-container{
                top: 0%;
                left: 0%;
                height: 889px;
                width: 100%;
                overflow: hidden;
            }
            video.fillWidth {
                width: 100%;
            }

            #id_menu{

                margin-top: 5%;
            }

        </style>
        <script>

            function redireccionar(valor) {
                if (valor == "puntos") {
                    window.location = "../Formularios/FormPuntos.php";
                }
            }
        </script>
    </head>
    <body> 
        <!--Inicio del modal-->
        <div id="myModal"  >
            <div id="contenidomodal">
                <div id="cabecera">
                    <div class="cntCabecera"></div>
                    <div class="btnCerrar" onclick="CerrarModal()">
                        <span>×</span>    
                    </div>
                </div>
                <div id="cuerpo">
                    <div class="video-container">
                        <video autoplay loop class="fillWidth visible-lg">
                            <source src="../Video/IntroVideoJuego.mp4" type="video/mp4; "/>        
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin del Modal-->
    <center>
        <div id="id_menu">
            <button class="btn btn-outline-primary">
                <strong> Inicio</strong>
            </button>
            <button class="btn btn-outline-primary" onclick="redireccionar('puntos')">
                <strong>Puntos</strong> 
            </button>
            <button class="btn btn-outline-primary">
                <strong>Partidas Guardadas</strong>
            </button>
            <button class="btn btn-outline-primary">
                <strong>Opciones</strong>
            </button>
            <button class="btn btn-outline-primary">
                <strong>Extras</strong>
            </button>
        </div>
    </center>
</body>

</html>
