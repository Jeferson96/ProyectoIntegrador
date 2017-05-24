<?php

include '../RegistroDAO/LoginDAO.php';

$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];

$boton = $_POST['login'];

$LoginDAO = new LoginDAO();

switch ($boton) {
    case 1:
        $respuesta = $LoginDAO->consultarLogin($userName, $userPassword);
        $registros = mysqli_num_rows($respuesta);
        if ($registros == 1) {
            $traeDatos = TRUE;
        } else {
            $traeDatos = FALSE;
        }

        /**
         * Si la consulta trae algun registro iniciara sesion en la aplicacion
         */
        if ($traeDatos == TRUE) {
            header('Location: http://localhost:800/ProyectoIntegrador/Formularios/IntroJuego.php');
        } else {
            /* Si no es por que el usuario no existe o la clave es incorrecta */
            echo '<script type="text/javascript">function redireccionar(){window.location = "http://localhost:800/ProyectoIntegrador/Formularios/ErrorLogin.php";}setTimeout ("redireccionar()", 100);</script>';
        }
        break;
    default:
        break;
}
?>