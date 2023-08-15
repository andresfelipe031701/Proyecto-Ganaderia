<?php
class Conexion
{
    public static function conectar()
    {
        $nombreservidor = "localhost";
        $usuario = "root";
        $baseDatos = "ganaderia";
        $password = "";


        try {
            $objConexion = new PDO('mysql:host=' . $nombreservidor . ';dbname=' . $baseDatos . ';chartset=utf8mb4', $usuario, $password);
            $objConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            $objConexion = $e;
        }

        return $objConexion;

    }

}
?>