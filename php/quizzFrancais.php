
    <?php
    // quizzFrancais.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY

     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "Trouve le bon mot en francais";
    $myObj->image = "../img/flagFR.png";
    $myObj->item1 = "../img/boussole.jpg";
    $myObj->item2 = "../img/fenetre.jpg";
    $myObj->item3 = "../img/avion.jpg";
    $myObj->item4 = "../img/bibliotheque.jpg";
    $myObj->answer1 = "Boussole";
    $myObj->answer2 = "Fenetre";
    $myObj->answer3 = "Avion";
    $myObj->answer4 = "Bibliotheque";
    
     // encodage de l'objet au format JSON
    $myJSON = json_encode($myObj);
    
     // renvoie de l'objet JSON
    echo $myJSON;
?>
 







