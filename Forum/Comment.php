<?php
    include("../database.php");
    session_start();

    $id = $_SESSION['id'];
    $com = $_POST["comment"];
    $currentDateTime = date("Y-m-d, H:i:s");

    $result = mysqli_query($conn, "INSERT INTO `commente` (`id`, `idc`, `comment`, `date`, `idr`) VALUES (NULL, '$id', '$com', '$currentDateTime', NULL)");

    header("Location: Forum.php");
?> 

