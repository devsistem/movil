<?php
namespace App\Lib;

use PDO;

class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=mobileDB;charset=utf8', 'root', 'sistemas1.2');
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        
        return $pdo;
    }
}