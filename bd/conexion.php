<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'usuarios_db');
        define('usuario', 'root');
        define('password', '');
        define('port', 3308);	
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::MYSQL_ATTR_DIRECT_QUERY => false,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        );			
        try{
            $conexion = new PDO("mysql:host=".servidor.";port=".port.";dbname=".nombre_bd,usuario,password,$opciones);
            return $conexion;			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}