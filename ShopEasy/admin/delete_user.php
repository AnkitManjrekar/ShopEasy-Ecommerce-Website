<?php

    $id = $_GET['ID'];

    $server = "localhost:3309";
    $username = "root";
    $password = "";
    $db_name = "shopeasy";

    $con = mysqli_connect($server, $username, $password, $db_name);

    if(!$con){
        die(mysqli_connect_error());
    }

    mysqli_query($con, "DELETE FROM `user` WHERE id=$id");
    header('location:user.php');

?>