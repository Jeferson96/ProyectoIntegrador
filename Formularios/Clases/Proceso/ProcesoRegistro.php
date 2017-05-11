<?php

include '../RegistroDAO/RegistroDAO.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$boton = $_POST['registro_Ok'];

$RegistroDAO = new RegistroDAO();

switch ($boton) {
    case 1:
        $resultado = $RegistroDAO->insertar($nombres, $apellidos, $edad, $genero, $correo, $usuario, $clave);
        if ($resultado == 'OK') {
            header('Location: http://localhost:800/ProyectoIntegrador/index.php');
        }
        break;
    default:
        break;
}
?>