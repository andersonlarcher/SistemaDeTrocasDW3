<?php

class Conexao {
    private static $db;
    
    public static function conecta(){
        if(self::$db == null){
            $url = "mysql:host=localhost;dbname=sistema_dw3";
            self::$db = new PDO($url, "root", '', array(PDO::ATTR_PERSISTENT=>true,
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }
}
