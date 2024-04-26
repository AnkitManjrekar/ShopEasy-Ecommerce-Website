<?php
$server = "localhost:3309";
$username = "root";
$password = "";
$db_name = "shopeasy";

$con = mysqli_connect($server, $username, $password, $db_name);

if(!$con){
    die(mysqli_connect_error());
}

$admin_username = $_POST['username'];
$admin_password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM `admin` where username='$admin_username' and password='$admin_password'");


// mysqli_num_rows() used to check if any record present
if(mysqli_num_rows($result)){

    session_start();
    $_SESSION["admin_username"] = $admin_username;
    $_SESSION["admin_password"] = $admin_password;

    echo "
    <script>
        alert('Login Successful');
        window.location.href='../mystore.php'
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
?>