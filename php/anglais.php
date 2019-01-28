<?php
     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->item1 = "../img/cat.jpg";
    $myObj->item2 = "../img/dog.jpg";
    $myObj->item3 = "../img/rabbit.jpg";
    $myObj->item4 = "../img/goat.jpg";
    $myObj->answer1 = "cat";
    $myObj->answer2 = "dog";
    $myObj->answer3 = "rabbit";
    $myObj->answer4 = "goat";
    
     // encodage de l'objet au format JSON
    $myJSON = json_encode($myObj);
    
     // renvoie de l'objet JSON
    echo $myJSON;
?>