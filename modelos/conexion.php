<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);



abstract class Conexion{
    protected static $conexion = null;

    protected static function connectar() : PDO{
        try {
            
            self::$conexion = new PDO("informix:host=host.docker.internal; service=9088;database=tienda; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion exitosa";
        } catch (PDOException $e) {
            echo "No hay conexion a la BD";
            echo "<br>";
            echo $e->getMessage();
            self::$conexion = null;
            exit;
        }

        return self::$conexion;

    }

   
}