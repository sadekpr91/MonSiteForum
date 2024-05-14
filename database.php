<?php
    //Connexion
    $serveur="localhost";
    $utilisatuer= "root";
    $motDePasse= "";
    $base = "Connaissance";

    $conn = mysqli_connect($serveur,$utilisatuer,$motDePasse,$base);

    $email=$_POST["email"];
    $password=$_POST["password"];

    $stmt = mysqli_prepare($conn,"SELECT id, email, mdp from utilisateur where email=? and mdp=?");
    mysqli_stmt_bind_param($stmt,"ss", $email, $password);

    // $result = mysqli_query($conn, "SELECT id FROM utilisateur");
    // $ligne = mysqli_fetch_row($result);
    // $id = $ligne[0];

?>