<?php
    // home.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY

     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "WeLearn, apprenez les langues en vous amusant...";
    $myObj->image = "../img/home.png";
    $myObj->texte1 = "WeLearn est un site qui vous permet d'apprendre une nouvelle langue, de façon ludique.";
    $myObj->texte2 = "Choisissez une langue, et essayez de replacer chaque mot sur l'image correspondante.
                      <br>Pour cela, un simple drag & drop suffira : choisissez un mot, cliquez dessus,
                      et deplacez-le sans relâcher le bouton de la souris jusqu'à la bonne image...";
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