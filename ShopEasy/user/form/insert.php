<?php

    if(isset($_POST['register_btn'])){
        
        $uName = $_POST['uName'];
        $uPhone = $_POST['uPhone'];
        $uEmail = $_POST['uEmail'];
        $uPass = $_POST['uPass'];
    
        
    include 'config.php';

    $dup_username = mysqli_query($con, "Select * from user where userName='$uName'");
    $dup_email = mysqli_query($con, "Select * from user where userEmail='$uEmail'");

    if(mysqli_num_rows($dup_username)){
        echo "
            <script>
                alert('Username already taken, choose another ones');
                window.location.href = 'register.php';
            </script>
        ";
    }else if(mysqli_num_rows($dup_email)){
        echo "
            <script>
                alert('Email already taken, choose another ones');
                window.location.href = 'register.php';
            </script>
        ";
    }else{
        $sql = "INSERT INTO `user`(`userName`, `userPhone`, `userEmail`, `userPass`) VALUES ('$uName','$uPhone','$uEmail','$uPass')";

        if($con->query($sql)){
            echo "
            <script>
                alert('Registration Successful');
                window.location.href = 'login.php';
            </script>
            ";
        }else{
            echo $con->error;
        }
    }

    

    
}

?>