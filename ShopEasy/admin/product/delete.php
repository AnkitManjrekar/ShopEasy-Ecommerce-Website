<?php

    include 'config.php';

    $id = $_GET['ID'];

    mysqli_query($con, "DELETE FROM `product_details` WHERE id = $id");
    header('location:index.php');
?>