/* language.js - Copyright (c) 2019 Rouquaya MOUSS, Thiery SAMPY */


// définition des constantes
const urlPHP = '../php/';

const urlAbout = urlPHP + 'about.php';
const urlHome = urlPHP + 'home.php';

const urlAllemand = urlPHP + 'quizzAllemand.php';
const urlAnglais = urlPHP + 'quizzAnglais.php';
const urlFrancais = urlPHP + 'quizzFrancais.php';

var contenu = null;

function about() {
    setItemsVisible(false);
    setDebugVisible(false);
    setContenuVisible(true);
    // chargement du fichier JSON en provenance de urlAbout dans une balise tmp invisible
    $('#tmp').load(urlAbout, function(response, status, xhr) {
        if (status != "error") {
            // mémorisation du JSON dans la variable contenu
            contenu = JSON.parse($('#tmp').html());
            $('#contenu').html(contenu.titre + '<br/>' +
                contenu.texte1 + '<br/>' +
                contenu.texte2 + '<br/>' +
                '<p><img src="' + contenu.image + '" alt="" /></p>');
        } else {
            $('#debug').html('Une erreur est survenue : <b>' + xhr.status + '</b> ' + xhr.statusText);
        }
    });
}

function home() {
    setItemsVisible(false);
    setDebugVisible(false);
    setContenuVisible(true);
    // chargement du fichier JSON en provenance de urlHome dans une balise tmp invisible
    $('#tmp').load(urlHome, function(response, status, xhr) {
        if (status != "error") {
            // mémorisation du JSON dans la variable contenu
            contenu = JSON.parse($('#tmp').html());
            $('#contenu').html(contenu.titre + '<br/>' +
                contenu.texte1 + '<br/>' +
                contenu.texte2 + '<br/>' +
                '<p><img src="' + contenu.image + '" alt="" /></p>');
        } else {
            $('#debug').html('Une erreur est survenue : <b>' + xhr.status + '</b> ' + xhr.statusText);
        }
    });
}

// affichage ou non du contenu en fonction du pamarètre visible
function setContenuVisible(visible) {
    (visible ? $('#contenu').show() : $('#contenu').hide());
}

// affichage ou non des items en fonction du pamarètre visible
function setItemsVisible(visible) {
    if (visible) {
        $('#answer1, #answer2, #answer3, #answer4').show();
        $('#drop1, #drop2, #drop3, #drop4').show();
        $('#recommencer').show();
    } else {
        $('#answer1, #answer2, #answer3, #answer4').hide();
        $('#drop1, #drop2, #drop3, #drop4').hide();
        $('#recommencer').hide();
    }
}

// définition des données du quizz : les questions (answer) et les zones de jeu (drop)
function setItemsAndAnswers(donnees) {
    $('#answer1').html(donnees.answer1);
    $('#answer2').html(donnees.answer2);
    $('#answer3').html(donnees.answer3);
    $('#answer4').html(donnees.answer4);
    $('#drop1').html('<img src="' + donnees.item1 + '" width="150" height="150" />');
    $('#drop2').html('<img src="' + donnees.item2 + '" width="150" height="150" />');
    $('#drop3').html('<img src="' + donnees.item3 + '" width="150" height="150" />');
    $('#drop4').html('<img src="' + donnees.item4 + '" width="150" height="150" />');
}

// création du quizz en fonction de la langue choisie par url (currentURL)
function setQuizz(currentURL) {
    $('#tmp').load(currentURL, function(response, status, xhr) {
        if (status != "error") {
            // mémorisation du JSON dans la variable contenu
            contenu = JSON.parse($('#tmp').html());
            setItemsAndAnswers(contenu);
            setItemsVisible(true);
            setContenuVisible(false);
        } else {
            $('#debug').html('Une erreur est survenue : <b>' + xhr.status + '</b> ' + xhr.statusText);
        }
    });
}

function quizzAnglais() {
    setDebugVisible(false);
    setQuizz(urlAnglais);
    restartQuizz();
}

function quizzAllemand() {
    setDebugVisible(false);
    setQuizz(urlAllemand);
    restartQuizz();
}

function quizzFrancais() {
    setDebugVisible(false);
    setQuizz(urlFrancais);
    restartQuizz();
}

// redémarrage du quizz
function restartQuizz() {
    // les réponses deviennent draggables
    $("#answer1, #answer2, #answer3, #answer4").draggable('enable');
    // les zones de drop redeviennent vierges
    $("#drop1, #drop2, #drop3, #drop4").removeClass("ui-state-highlight");
    // replacement des réponses possibles à leurs emplacement de départ
    $("#answer1, #answer2, #answer3, #answer4").css({ "left": "0px", "top": "0px" });
    // initialisation des objets drag & drop
    initDragAndDrop();
}

function initDragAndDrop() {
    // création des balises drag
    $("#answer1, #answer2, #answer3, #answer4").draggable();
    // création des balises drop
    $("#drop1, #drop2, #drop3, #drop4").droppable({
        // gestion des evènements drop
        drop: function(event, ui) {
            // la balise est modifiée
            $(this)
                .addClass("ui-state-highlight")
                .find("p")
                .html("Exact");

            // l'objet dragé est positionné
            var moveLeft = $(this).offset().left - ui.draggable.offset().left + ($(this).width() - ui.draggable.width()) / 2;
            var moveTop = $(this).offset().top + $(this).height() - ui.draggable.offset().top;

            ui.draggable.animate({
                left: "+=" + moveLeft,
                top: "+=" + moveTop
            });

            ui.draggable.css({
                //opacity: 0,
                cursor: 'default'
            }).draggable('disable');
        }
    });
    $("#drop1").droppable({
        accept: "#answer1"
    });
    $("#drop2").droppable({
        accept: "#answer2"
    });
    $("#drop3").droppable({
        accept: "#answer3"
    });
    $("#drop4").droppable({
        accept: "#answer4"
    });
}

// initialisation de la page WeLearn
function initWeLearn() {
    $('#tmp').hide();
    initDragAndDrop();
    home();
}

// fonction de debuggage - à supprimer en version finale
function debug() {
    restartQuizz();
    setDebugVisible(true);
    setContenuVisible(false);
    setItemsVisible(false);
    if (contenu != null) {
        $('#debug').html('Titre : ' + contenu.titre + '<br/>' +
            'image : ' + contenu.image + '<br/>' +
            'texte1 : ' + contenu.texte1 + '<br/>' +
            'texte2 : ' + contenu.texte2 + '<br/>' +
            'item1 : ' + contenu.item1 + '<br/>' +
            'item2 : ' + contenu.item2 + '<br/>' +
            'item3 : ' + contenu.item3 + '<br/>' +
            'item4 : ' + contenu.item4 + '<br/>' +
            'answer1 : ' + contenu.answer1 + '<br/>' +
            'answer2 : ' + contenu.answer2 + '<br/>' +
            'answer3 : ' + contenu.answer3 + '<br/>' +
            'answer4 : ' + contenu.answer4 + '<br/>');
    } else {
        $('#debug').html('Aucune donn&eacute;e n\'a encore &eacute;t&eacute; saisie');
    }
}

// fonction de debuggage - à supprimer en version finale
function setDebugVisible(visible) {
    (visible ? $('#debug').show() : $('#debug').hide());
}