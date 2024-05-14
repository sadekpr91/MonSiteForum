<?php
    //session_start();
    include("database.php");

    $rep = $_POST["Reponse"];
    $idq = $_POST["id"];

    $sql = mysqli_query($conn, "UPDATE `question` SET `Reponse` = '$rep' WHERE `question`.`id_quest` = '$idq'");

    if ($sql) {
        header("Location: PageDesQuestions.php");
    } else {
        echo("Echec de demande");
    }
    
?>