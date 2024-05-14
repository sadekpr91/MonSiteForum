<?php
    include("database.php");
    session_start();
    $result = mysqli_query($conn, "SELECT nom, question, id_quest, Reponse FROM question, utilisateur where question.id=utilisateur.id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    form button.submit, button{
      background: lightskyblue;
      color: black;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      width: 100%;
    }
    button.reply{
      background: orange;
    }
    </style>
</head>
<body>
<nav>
            <ul>
                <li>
                    <a href="pgaccueil.php">Page d accueil</a>
                </li>
                <li>
                    <a href="PageDesQuestions.php">Voir les questions posées</a>
                </li>
                <li>
                    <a href="Forum/Forum.php">Forum</a>
                </li>
                <li>
                    <a href="index.html">Déconnecter</a>
                </li>
            </ul>
        </nav>
        <div class="container">
        <div class="content">
            <h1>Questions Poser</h1>
            <h2> L'entre-aide afin de s'améliorer.</h2>
            <div class="table-container">
                <table border="1">
                    <tr>
                        <td>Demandeur</td>
                        <td>Question</td>
                        <td>Reponse</td>
                    </tr>
                    <?php
                        while ($ligne = mysqli_fetch_row($result)) {
                            if (empty($ligne[3])) {
                                echo (
                                    "
                                    <tr>
                                        <td>$ligne[0]</td>
                                        <td>$ligne[1]</td>
                                        <td>
                                        <form method='POST' action='PageDeRepondre.php'>
                                            <input type='hidden' name='id' value='$ligne[2]'>
                                            <input type='submit' value='Repondre'>
                                        </form>
                                        </td>
                                    </tr>
                                    ");
                            } else {
                                echo (
                                    "
                                    <tr>
                                        <td>$ligne[0]</td>
                                        <td>$ligne[1]</td>
                                        <td>$ligne[3]</td>
                                    </tr>
                                    "
                                );
                            }
                        }
                    ?>
                </table>
                <a href="PoserQ.html"><button>Poser une question</button></a>
                
            </div>
        </div>

    </div>
</body>
</html>