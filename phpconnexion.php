<?php
    session_destroy();
    //connexion
    include("database.php");

    $mail = $_POST["email"];
    $pass = $_POST["password"];

    session_start();
    //Recuperer le id
    $a = mysqli_query($conn, "SELECT * FROM utilisateur where email='$mail' and mdp='$pass'");
    $b = mysqli_fetch_row($a);
    $_SESSION['id'] = $b[0];
    $_SESSION['nom'] = $b[2];
    $_SESSION['mdp'] = $b[3];
    //Fin de recuperation

    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    
    if(mysqli_num_rows($result)> 0){
        // $result = mysqli_query($conn, "SELECT id FROM utilisateur");
        // $ligne = mysqli_fetch_row($result);
        // $id = $ligne[0];
        header("Location: pgaccueil.html");
        // echo $_SESSION['id'];
    }
    else{
        echo"Vous n'existez pas dans la base de donnee, ou votre mot de passe est incorrect";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>