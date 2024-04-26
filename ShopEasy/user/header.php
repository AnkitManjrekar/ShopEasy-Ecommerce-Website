<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        session_start();
        $count = 0;
        if(isset($_SESSION["cart"])){
            $count = count($_SESSION["cart"]);
        }
    ?>

    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white" href="index.php">
                <h1>ShopEasy</h1>
            </a>
            <span class='hide_it'>
                <a href="index.php" class="text-decoration-none text-light px-1"><i class="fas fa-home"></i> Home </a> |
                <a href="viewCart.php" class="text-decoration-none text-light px-1"><i class="fas fa-shopping-cart"></i> Cart (<?php echo $count ?>) </a> |
                <?php
                    if(isset($_SESSION["username"])){
                        echo "
                        <span class='px-1'><i class='fas fa-user'></i> Hello, $_SESSION[username]</span> |
                        ";
                    }else{
                        echo "
                        <span class='px-1'><i class='fas fa-user'></i> Hello, </span> |
                        ";
                    }
                ?>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "
                            <a href='form/logout.php' class='text-decoration-none text-light px-1' ><i class='fas fa-sign-in-alt'></i> Logout </a> |
                        ";
                    }else{
                        echo "
                            <a href='form/login.php' class='text-decoration-none text-light px-1'><i class='fas fa-sign-in-alt'></i> Login </a> |
                        ";
                    }
                ?>
                
                <a href="../admin/myStore.php" class="text-decoration-none text-light px-1"><i class="fas fa-user-shield"></i> Admin</a>
            </span>
        </div>
    </nav>
    <div class="bg-danger mt-3 sticky-top p-0 hide_it">
        <ul class="list-unstyled text-center  fs-3 d-flex justify-content-center">
            <li><a class="text-decoration-none text-light px-4 fw-bold" href="laptop.php">LAPTOP</a></li>
            <li><a class="text-decoration-none text-light px-4 fw-bold" href="mobile.php">MOBILE</a></li>
            <li><a class="text-decoration-none text-light px-4 fw-bold" href="bag.php">BAG</a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7cca994b7.js" crossorigin="anonymous"></script>
</body>

</html>