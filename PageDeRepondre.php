<?php 
    $idq = $_POST["id"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="Projet.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="Repondre.php">
            <br>
            <b><p>Repondre a la question:</p></b>
            <input type="hidden" name="id" value="<?php echo $idq; ?>">
            <b><textarea name="Reponse" rows="10" cols="50"></textarea><br></b><br>
            <b><a href="acceuil.html"></a><input type="submit" value="Poser"><br></b></a>
        </form></b>
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
      </div>
</body>
</html>