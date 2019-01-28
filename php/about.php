<?php
    // about.php - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY
    
     // création d'un nouvel objet
    $myObj = new stdClass();

     // simulation d'une requête SQL
    $myObj->titre = "A propos de WeLearn...";
    $myObj->image = "../img/about.png";
    $myObj->texte1 = "WeLearn a &eacute;t&eacute; cr&eacute;&eacute; par Rouquaya MOUSS et Thi&eacute;ry SAMPY.";
    $myObj->texte2 = "WeLearn est un projet r&eacute;alis&eacute; dans le cadre de la formation DevLog suivie à l'IFA de Metz.
                      <br>L'objectif est de r&eacute;aliser un mini website, tenant sur une seule page,
                      utilisant javascript et JQuery, et traitant les informations reçues grâce à un fichier de type JSON.";
    
     // encodage de l'objet au format JSON
    $myJSON = json_encode($myObj);
    
     // renvoie de l'objet JSON
    echo $myJSON;
?>