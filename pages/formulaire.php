<!doctype html>
<html lang="fr">
<meta charset="utf-8">
<link rel="stylesheet" href="../styles\styles.css">
<script type = "text/javascript"src="styles/animate.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Site du prof : https://sineur.github.io/  -->
<head>
        <title>GUIDE VALORANT</title>
        <link rel="icon" type="img" href="/pictures/logo_v.png">
        <!-- Pour afficher un logo à côté du title de la page -->
</head>
<body>
<p> Afin d'en apprendre plus sur le publique visé </p>


<form action="formulaire.php" method="POST"> <!-- Début du formulaire -->
<!-- Liste déroulante -->
<select name="titre">
<option>Mme</option><option selected>M.</option>
</select>

<br> 
<br> 

<!-- Zones de texte -->
<label for="nom"> Nom : </label><input type="text" name="nom" id="nom" placeholder="Entrez votre nom" /><br/><br/>
<label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" /><br/><br/>
<!-- Bouton radio -->
<label for="sexe">Sexe : </label>
<input type="radio" name="sexe" id="sexe" value="H" checked /> Masculin
<input type="radio" name="sexe" value="F" /> Féminin
<br/><br/>
<!-- Slider -->
<label for="note">Note : 1 </label>
<input type="range" name="note" id="note" min="1" max="10" step="1" value="5" /> 10
<br/><br/>
<label for="comments">Commentaire : </label><input type="text" name="comments" id="comments" placeholder="Entrez votre commentaire" /><br/><br/>
<!-- Bouton -->
<input type="submit" name="btOK" value="TERMINER">
</form> <!-- Fin du formulaire -->

<?php

// Si la personne rempli le formulaire, et qu'elle met une note supérieur stricte à 7, j'affiche un message
// Je regarde si la personne a mis un commentaire, si c'est le cas j'affiche également un message 
if($_POST) {
        if($_POST['nom']!='') {
        echo "<br/><br/>Bonjour " . $_POST['titre'] . " " . $_POST['nom'] . "!<br/>";

        if($_POST['note'] > 7) {
        echo "Je suis honnoré de recevoir cette note";
        }
        if($_POST['comments']!='')
        {
                echo "Merci pour votre commentaire";
        }
}
}


?>

<div class = "footer">
        <p id ="right">
        maximedou.pro@gmail.com
        </p>
        <p id = "gauche">
                COPYRIGHT © 2022-2023 
        </p>
        <p id = "center">
                Site made with ❤️
        </p>
</div>
