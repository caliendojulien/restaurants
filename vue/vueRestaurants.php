<?php

require_once 'dal/Requete.php';

$requete = new Requete();
foreach ($requete->getRestaurants() as $restaurant) {
    var_dump($restaurant);
}
