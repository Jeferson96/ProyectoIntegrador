<?php

include '../Conexion/Conexion.php';

/**
 * Description of RegistroDAO
 *
 * @author Jeferson
 */
class RegistroDAO {

    public $nombres = "";
    public $apellidos = "";
    public $edad = 0;
    public $genero = "";
    public $correo = "";
    public $usuario = "";
    public $clave = "";

    public function insertar($nombres, $apellidos, $edad, $genero, $correo, $usuario, $clave) {
        $conexion = new Conexion();
        $link = $conexion->ConexionMySQL();
        if (!$link) {
            $error = 'Error al conectarce a la base de datos!';
            return $error;
        } else {
            $insertar = "INSERT INTO jugador (nombres_jug, apellidos_jug, edad_jug, genero_jug, correo_jug, usuario_jug, clave_jug) VALUES ('$nombres','$apellidos', '$edad', '$genero', '$correo', '$usuario', '$clave')";
            $resultado = mysqli_query($link, $insertar);
            mysqli_close($link);
            $ok = 'OK';
            return $ok;
        }
    }

}
