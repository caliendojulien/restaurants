<?php

namespace controlleurs;

use dal\ConnexionSQL;
use PDO;

class Traitement
{
    private PDO $pdo;
    private const SELECT_RESTO = "SELECT 
        idRestaurant, nom, adresse, cp, ville, telephone, description 
        FROM restaurants;";

    public function __construct()
    {
        $cnx = new ConnexionSQL();
        $this->pdo = $cnx->getConnexion();
    }

    public function getRestaurants() : array {
        $query = self::SELECT_RESTO;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->execute();
        $restaurants = $pstmt->fetchAll();
        return $restaurants;
    }
}