<?php

require_once 'dal/Requete.php';

if (isset($_GET['id'])) {
    $requete = new Requete();
    $restaurant = $requete->getRestaurant($_GET['id']);
    echo "<div class='card'>";
    echo "<div class='text1'>" . $restaurant['nom'] . "</div>";
    echo "</div>";
}
