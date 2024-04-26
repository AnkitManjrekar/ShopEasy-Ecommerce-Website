<?php
    if(isset($_POST['submit'])){

        include 'config.php';

        $pName = $_POST['pName'];
        $pPrice = $_POST['pPrice'];
        $pImage = $_FILES['pImage'];
            $image_loc = $_FILES['pImage']['tmp_name'];
            $image_name = $_FILES['pImage']['name'];
        // print_r($pImage);
        $image_destination = "upload_image/" . $image_name;
        move_uploaded_file($image_loc, $image_destination);
        $pCategory = $_POST['pCategory'];
        
        $sql = "INSERT INTO `product_details`(`pName`, `pPrice`, `pImage`, `pCategory`) 
        VALUES ('$pName','$pPrice','$image_destination','$pCategory')";

        if($con->query($sql)===true){
            header("Location: index.php");
            exit();
        }else{
            echo "Error : " . $con -> error;
        }

        $con -> close();
    }


?>

