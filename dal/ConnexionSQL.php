<?php

class ConnexionSQL
{
    public function getConnexion(): PDO {
        $dsn = "mysql:host=localhost;dbname=avis_resto";
//        $dsn = "sqlite:./db.sqlite";
        return new PDO($dsn, 'root', 'password');
//        return new PDO($dsn);
    }

}