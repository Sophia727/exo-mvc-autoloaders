<?php

namespace Sophia\lib;

use PDO;
use PDOException;
class DBConnect
{
    public function getConnection(){
        try {
            echo "connected";
            return new PDO("mysql: host=localhost; dbname=Users_DB", 'root', "");
            
        } catch (PDOException $e) {
        
            echo "erreur de connexion".$e->getMessage();
        }
    }
}
