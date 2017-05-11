<?php

/**
 * Description of Conexion
 *
 * @author Jeferson
 */
class Conexion {

    public function ConexionMySQL() {
        $mySQL = new mysqli('127.0.0.1', 'root', 'Password0206*', 'goldblood');

        if (!$mySQL) {
            echo 'Error al intentar conectarce a la base de datos...';
        }
        return $mySQL;
    }

}
