<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8</title>
</head>

<body>

    <!-- <div>
        <form action="./traitement.php" method="post">
            <label for="name">Prenom : </label>
            <input type="text" name="username" placeholder=" votre prenom ...">
            <label for="id" placeholder="id"> adresse ip : </label>
            <input type="text" name="ip-id">
            <label for="serveur"> le nom du serveur est : </label>
            <input type="text" name="serveur">
            <button type="submit">envoyer</button>
        </form>
    </div> -->
    <!-- --------------------------------exo2---------------------------- -->
    <?php
    session_start();
    // session_unset();
    if (
        isset($_SESSION["firstname"]) && !empty($_SESSION["firstname"])
        && isset($_SESSION["lastname"]) && !empty($_SESSION["lastname"])
        && isset($_SESSION["age"]) && !empty($_SESSION["age"])
    ){ var_dump($_SESSION);
    ?>
        <p><?php echo $_SESSION["firstname"] ?></p>
        <p><?php echo $_SESSION["lastname"] ?></p>
        <p><?php echo $_SESSION["age"] ?></p>
    <?php 
    } else {
    ?>
        <form action="./traitement.php" method="post">

            <label for="firstname"> Prénom : </label>
            <input type="text" name="firstname">

            <label for="lastname">Nom : </label>
            <input type="text" name="lastname">

            <label for="age"> Age : </label>
            <input type="text" name="age">

            <button type="submit">envoyer</button>          
        </form>
    <?php
     }
    ?>
</body>

</html>