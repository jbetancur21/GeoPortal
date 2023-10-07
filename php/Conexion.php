<?php
class CConexion {
    public static function ConexionBD(){
        $host ="localhost";
        $dbname = "geoportal";
        $username = "postgres";
        $pasword = "admin";
        try {
            $conn = new PDO("pgsql:host=$host; dbname=$dbname", $username, $pasword);
            //echo "Se conectó correctamente a la Base de Datos";
        }
        catch( PDOException $exp){
            echo ("No se pudo conectar a la base de datos, $exp");
        }
        return $conn;
    }
}
?>