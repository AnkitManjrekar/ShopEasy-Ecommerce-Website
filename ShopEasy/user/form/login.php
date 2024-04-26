<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white" href="../index.php">
                <h1 class=''>ShopEasy</h1>
            </a>
            <span>
                <a href="../index.php" class="text-decoration-none text-light px-1"><i class="fas fa-home"></i> Home </a> |
                <?php
                    if(isset($_SESSION["username"])){
                        echo "
                            <a href='logout.php' class='text-decoration-none text-light px-1' ><i class='fas fa-sign-in-alt'></i> Logout </a> |
                        ";
                    }else{
                        echo "
                            <a href='login.php' class='text-decoration-none text-light px-1'><i class='fas fa-sign-in-alt'></i> Login </a> |
                        ";
                    }
                ?>
                
                <a href="../../admin/form/login.php" class="text-decoration-none text-light px-1"><i class="fas fa-user-shield"></i> Admin</a>
            </span>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto mt-5 border border-primary border-2 rounded p-4">
                <h1 class="text-center text-danger fw-bold">User Login</h1>
                <form action="login1.php" method='POST' >
                    <div class="my-3 fs-5">
                        <label for="uName">Enter Username :</label>
                        <input type="text" name="uName" id="uName" class="form-control" required>
                    </div>
                    <div class="my-3 fs-5">
                        <label for="uPass">Enter Password :</label>
                        <input type="password" name="uPass" id="uPass" class="form-control" required>
                    </div>
                    <div class=" ">
                        <button name='login_btn' class="fs-4 fw-bold text-light my-3 w-100 btn btn-primary ">Login</button>
                    </div>
                </form>
                <div>
                    <a href="register.php"><button class="fs-4 fw-bold text-light my-3 w-100 btn btn-danger">Create New Account</button></a>
                </div>
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