<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Partie 7</title>
</head>
<body>
  
  <?php

if (isset($_POST['submit_form'])) {

$lastName = $_POST['last-name'];
$firstName = $_POST['first-name'];
$civilite = $_POST['civilite'];
?> 

<p><?php  echo $civilite .' '. $lastName .' '. $firstName ; ?></p>


<?php 
} else{ 
  ?>
  <form action="" method="POST">

    <label for="civilite">Choisir une civilité</label>
    <select name="civilite" id="civilite">
    <option value="Monsieur">Monsieur</option>
    <option value="Madame">Madame</option>
    </select>

    <label for="last-name"></label>
    <input type="text" placeholder="Nom" name="last-name">

    <label for="first-name"></label>
    <input type="text" placeholder="Prenom" name="first-name">


    <button type="submit" name="submit-form">Envoyer</button>
  </form>

  <?php 
  }
  ?>
</body>
</html>