<?php
    
    include("database.php");
    session_start();
    $id = $_SESSION['id'];

    // $result = mysqli_query($conn, "SELECT id FROM utilisateur where email='$email'");
    // $ligne = mysqli_fetch_row($result);

    // $result = mysqli_prepare($conn,"SELECT id from utilisateur where email=? and mdp=?");
    // mysqli_stmt_bind_param($stmt,"s", $id);
    

    //echo "$id a demander $quest";

    $quest = $_POST["Question"];
    
    $sql = mysqli_query($conn, "INSERT INTO `question` (`id_quest`, `question`, `id`) VALUES (NULL, '$quest', '$id')");

    if ($sql) {
        header("Location: PageDesQuestions.php");
    } else {
        echo("Echec de demande");
    }
    
?>