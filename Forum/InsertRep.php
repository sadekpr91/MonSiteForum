<?php
    include("../database.php");
    session_start();

    $id = $_SESSION['id'];
    $com = $_POST["comment"];
    $currentDateTime = date("Y-m-d, H:i:s");
    $rep= $_POST['rep'];

    //$insert = mysqli_query($conn, "INSERT INTO `commente` (`id`, `idc`, `comment`, `date`, `idr`) VALUES (NULL, '$id', '$com', '$currentDateTime', NULL); ")

    $result = mysqli_query($conn, "INSERT INTO `commente` (`id`, `idc`, `comment`, `date`, `idr`) VALUES (NULL, '$id', '$com', '$currentDateTime', '$rep')");

    header("Location: Forum.php");

?>