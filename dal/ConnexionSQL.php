<?php

class ConnexionSQL
{
    public function getConnexion(): PDO {
//        $dsn = "mysql:host=localhost;dbname=phpeni";
        $dsn = "sqlite:./db.sqlite";
//        return new PDO($dsn, 'root', 'password');
        return new PDO($dsn);
    }

}