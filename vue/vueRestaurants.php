<?php

require_once 'dal/Requete.php';

$requete = new Requete();
foreach ($requete->getRestaurants() as $restaurant) {
    echo "<div class='card'>";
    echo "<div class='text1'><a href='index.php?id=". $restaurant['idRestaurant'] . "'>" . $restaurant['nom'] . "</a></div>";
    echo "<hr />";
    echo "<div class='text2'>";
    echo "<div class='text-content'>";
    echo "<div class='body-text'>". $restaurant['adresse'] . " " . $restaurant['cp'] . " " . $restaurant['ville'] ."</div>";
    echo "<hr />";
    echo "<div class='body-text'>". $restaurant['description'] ."</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
