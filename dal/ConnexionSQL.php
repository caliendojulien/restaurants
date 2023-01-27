<?php

namespace dal;

use PDO;

class ConnexionSQL
{
    public function getConnexion(): PDO {
        $dsn = "mysql:host=localhost;dbname=phpeni";
        $pdo = new PDO($dsn, 'root', 'password');
        return $pdo;
    }
}