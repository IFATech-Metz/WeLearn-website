<?php
    // about.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY
    
     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "A propos de WeLearn...";
    $myObj->image = "../img/about.png";
    $myObj->texte1 = "WeLearn est un super projet de la mort qui tue...";
    $myObj->texte2 = "Trop de la balle !";
    $myObj->item1 = "";
    $myObj->item2 = "";
    $myObj->item3 = "";
    $myObj->item4 = "";
    $myObj->answer1 = "";
    $myObj->answer2 = "";
    $myObj->answer3 = "";
    $myObj->answer4 = "";
    
     // encodage de l'objet au format JSON
    $myJSON = json_encode($myObj);
    
     // renvoie de l'objet JSON
    echo $myJSON;
?>