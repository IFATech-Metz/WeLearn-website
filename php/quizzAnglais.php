<?php
    // quizzAnglais.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY
    
     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "Trouve le bon machin en anglais";
    $myObj->image = "../img/flagUK.png";
    $myObj->texte1 = "";
    $myObj->texte2 = "";
    $myObj->item1 = "../img/bibliotheque.jpg";
    $myObj->item2 = "../img/avion.jpg";
    $myObj->item3 = "../img/boussole.jpg";
    $myObj->item4 = "../img/fenetre.jpg";
    $myObj->answer1 = "Library";
    $myObj->answer2 = "Plane";
    $myObj->answer3 = "Compass";
    $myObj->answer4 = "Window";
    
     // encodage de l'objet au format JSON
    $myJSON = json_encode($myObj);
    
     // renvoie de l'objet JSON
    echo $myJSON;
?>