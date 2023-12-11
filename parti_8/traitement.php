<?php
// if (isset($_POST["username"]) && !empty($_POST["username"]) 
// && isset($_POST["ip-id"]) && !empty($_POST["ip-id"]) 
// && isset($_POST["serveur"]) && !empty($_POST["serveur"])) {

//     session_start();

//     $_SERVER["PHP_SELF"] ;
//     $_SERVER["SERVER_ADDR"];
//     $_SERVER["SERVER_NAME"];

//     var_dump($_SERVER["SERVER_ADDR"]);
//     die();

// } else {

// }

if (
    isset($_POST["firstname"]) && !empty($_POST["firstname"])
    && isset($_POST["lastname"]) && !empty($_POST["lastname"])
    && isset($_POST["age"]) && !empty($_POST["age"])
) {

    session_start();

    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["age"] = $_POST["age"];
}


header('Location: ../index.php');
