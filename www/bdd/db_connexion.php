<?php
    //connexion à la base de données
    $host = "localhost";
    $user = "root";
    $password = "root";
    $nom_db = "db_hc_1902blog";

    $connexion_a_la_bdd = mysqli_connect($host, $user, $password, $nom_db)or die("Error " . mysqli_error($connexion_a_la_bdd));
?>
