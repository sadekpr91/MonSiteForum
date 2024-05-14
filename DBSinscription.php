<?php
    include("database.php");

    //$stmt = mysqli_prepare($conn,"INSERT INTO utilisateur(email,nom,mdp) values(?,?,?)");
    //mysqli_stmt_bind_param($stmt,"sss", $email, $name, $password);
    //Inscription
    $email=$_POST["email"];
    $name=$_POST["name"];
    $password=$_POST["password"];

    // //mysqli_stmt_execute($stmt);

    // //Requete
    $inscrire = "INSERT INTO `utilisateur` (`email`, `nom`, `mdp`) values('$email','$name','$password')";
    mysqli_query($conn, $inscrire);

    header("Location: pgconnexion.html");
    //echo"<b><a class='container' href='pgconnexion.html'><input type='button' class value='Connexion'></a>";

    // mysqli_stmt_close($stmt);
    // mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Connaissance.INFO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="Projet.css">
</head>
<body>
    
    <div class="container">
        <form method="post" action="phpconnexion.php">
            <b><p>Connectez-vous:</p></b>
            <b><input type="email" name="email" placeholder="Email"><br></b>
            <b><input type="password" name="password" placeholder="Mot de passe"><br></b>
            <b><input type="submit" value="Connexion"><br></b>
            <b><a href="#">Mot de passe oublié</a><br></b>
        </form></b>
      
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
      </div>
</body>
</html> -->