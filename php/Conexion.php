<?php
/* class CConexion {
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
} */

$conexion=pg_connect("host=localhost dbname=geoportal user=postgres password=admin");
if($conexion){
     //echo 'Conexión exitosa a la base de datos de PostgreSQL.';
 }else{
     echo 'Lo sentimos. No fue posible realizar la conexion.';
 }

?>