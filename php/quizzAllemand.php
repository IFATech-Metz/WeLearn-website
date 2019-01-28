<?php
    // quizzAllemand.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY
    
     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "Trouve le bon machin en allemand";
    $myObj->image = "../img/flagDE.png";
    $myObj->texte1 = "";
    $myObj->texte2 = "";
    $myObj->item1 = "../img/avion.jpg";
    $myObj->item2 = "../img/boussole.jpg";
    $myObj->item3 = "../img/bibliotheque.jpg";
    $myObj->item4 = "../img/fenetre.jpg";
    $myObj->answer1 = "Luftfahrzeug";
    $myObj->answer2 = "Kompass";
    $myObj->answer3 = "Bibliothek";
    $myObj->answer4 = "Fenster ";
    
     // encodage de l'objet au format JSON
    $myJSON = json_encode($myObj);
    
     // renvoie de l'objet JSON
    echo $myJSON;
?>