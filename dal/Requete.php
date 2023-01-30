<?php

require_once 'ConnexionSQL.php';
require_once 'bo/Restaurant.php';

class Requete
{
    private PDO $pdo;
    private const SELECT_RESTAURANTS = "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description FROM Restaurants;";
    private const SELECT_RESTAURANT_BY_ID =
        "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description 
            FROM Restaurants 
            INNER JOIN avis a on restaurants.idRestaurant = a.idRestaurant
            WHERE idRestaurant=?;";

    public function __construct()
    {
        $cnx = new ConnexionSQL();
        $this->pdo = $cnx->getConnexion();
    }

    /**
     * @return Restaurant[]
     */
    public function getRestaurants(): array
    {
        $query = self::SELECT_RESTAURANTS;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->execute();
        $restaurantsSQL = $pstmt->fetchAll();
        $restaurants = array();
        foreach ($restaurantsSQL as $restaurant) {
            $restaurant = new Restaurant(
                $restaurant['idRestaurant'],
                $restaurant['nom'],
                $restaurant['adresse'],
                $restaurant['cp'],
                $restaurant['ville'],
                $restaurant['telephone'],
                $restaurant['description'],
            );
            $restaurants[] = $restaurant;
        }
        return $restaurants;
    }

    public function getRestaurant(int $id): array
    {
        $query = self::SELECT_RESTAURANT_BY_ID;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->bindValue(1, $id);
        $pstmt->execute();
        return $pstmt->fetch();
    }


}