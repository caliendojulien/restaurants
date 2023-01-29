<?php

require_once 'ConnexionSQL.php';

class Requete
{
    private PDO $pdo;
    private const SELECT_RESTAURANTS = "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description FROM Restaurants;";
    private const SELECT_RESTAURANT_BY_ID = "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description FROM Restaurants WHERE idRestaurant=?;";

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

    public function getRestaurant(int $id) : array {
        $query = self::SELECT_RESTAURANT_BY_ID;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->bindValue(1, $id);
        $pstmt->execute();
        return $pstmt->fetch();
    }


}