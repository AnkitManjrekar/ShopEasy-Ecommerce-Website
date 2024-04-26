<?php

    if(isset($_POST['login_btn'])){

        $uName = $_POST['uName'];
        $uPass = $_POST['uPass'];

        include 'config.php';

        $result = mysqli_query($con, "SELECT * FROM `user` where (userName='$uName' OR userEmail='$uName') AND userPass='$uPass' ");
        // $row = mysqli_num_rows($result);

        if(mysqli_num_rows($result)){
            
            $row = mysqli_fetch_array($result);


            session_start();
            $_SESSION["username"] = $row['userName'];
            $_SESSION["password"] = $uPass;
        
            echo "

            <script>
                alert('Login Successful');
                window.location.href='../index.php'
            </script>
            ";
        }else{
            echo "
        
                <script>
                    alert('Login Invalid!');
                    window.location.href='login.php'
                </script>
            ";
        }
        
        $con->close();


    }

?>