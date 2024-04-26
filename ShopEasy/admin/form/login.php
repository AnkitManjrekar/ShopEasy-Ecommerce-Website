<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white" href="../../user/index.php">
                <h1>ShopEasy</h1>
            </a>
            <span>
                <a href="../../user/index.php" class="text-decoration-none text-light px-1"><i class="fas fa-home"></i> Home </a> |
                <?php
                    if(isset($_SESSION["username"])){
                        echo "
                            <a href='form/logout.php' class='text-decoration-none text-light px-1' ><i class='fas fa-sign-in-alt'></i> Logout </a> |
                        ";
                    }else{
                        echo "
                            <a href='../../user/form/login.php' class='text-decoration-none text-light px-1'><i class='fas fa-sign-in-alt'></i> Login </a> |
                        ";
                    }
                ?>
                
                <a href="login.php" class="text-decoration-none text-light px-1"><i class="fas fa-user-shield"></i> Admin</a>
            </span>
        </div>
    </nav>

<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="login1.php" method="post" >
                    <p class="text-center fs-3 fw-bold">Admin Details</p>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" class="form-control" id="username" name="username"
                            >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control" id="password"
                            >
                    </div>
                    
                    <button class="btn btn-primary text-center fw-bold form-control my-4">Login</button>
                </form>
            </div>
        </div>
    </div>


    <footer class='fixed-bottom bg-success text-center text-light'><h3>Copyright &copy; 2024, Ankit Manjrekar</h3></footer>

    <script src="https://kit.fontawesome.com/e7cca994b7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>