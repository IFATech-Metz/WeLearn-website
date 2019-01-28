<?php
    // home.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY

     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "WeLearn, apprenez les langues en vous amusant...";
    $myObj->image = "../img/home.png";
    $myObj->texte1 = "WeLearn est un super site qui vous permet d'apprendre une nouvelle langue.";
    $myObj->texte2 = "Tout en vous amusant !";
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