<?php

require_once 'ConnexionSQL.php';

class Requete
{
    private PDO $pdo;
    private const SELECT_RESTAURANTS = "SELECT nom, adresse FROM Restaurants;";
    private const SELECT_RESTAURANT_BY_ID = "SELECT marque, modele FROM modeles;";

    public function __construct()
    {
        $cnx = new ConnexionSQL();
        $this->pdo = $cnx->getConnexion();
    }

    public function getRestaurants() : array {
        $query = self::SELECT_RESTAURANTS;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->execute();
        return $pstmt->fetchAll();
    }


}