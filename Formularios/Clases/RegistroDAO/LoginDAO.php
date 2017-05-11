<?php

include '../Conexion/Conexion.php';

class LoginDAO {

    public $codigo = 0;
    public $usuario = "";
    public $clave = "";

    /**
     * Metodo el cual consulta el usuario para que pueda 
     * Ingresar a la aplicacion
     * @param type $usuario
     */
    public function consultarLogin($usuario, $clave) {
        $conexion = new Conexion();
        $link = $conexion->ConexionMySQL();

        if (!$link) {
            $error = 'Error al conectarce a la base de datos!';
            return $error;
        } else {
            $consultar = "SELECT usuario_jug, clave_jug FROM jugador WHERE usuario_jug = '$usuario' AND clave_jug = '$clave' ;";
            $resultado = mysqli_query($link, $consultar);
            mysqli_close($link);
            return $resultado;
        }
    }

}

?>