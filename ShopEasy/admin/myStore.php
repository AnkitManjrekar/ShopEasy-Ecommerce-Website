<?php
    session_start();
    if(!$_SESSION["admin_username"]){
        header("location:form/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white">
                <h1>ShopEasy</h1>
            </a>
            <span>
                <i class="fas fa-user-lock"></i>
                Hello, <?php echo $_SESSION["admin_username"] ?> |
                <a href="form/logout.php" class="text-decoration-none text-light"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </span>
        </div>
    </nav>

    <div>
        <h2 class="text-center m-4">Dashboard</h2>
    </div>
    <div class="text-center">
        <a href="product/index.php" class="text-decoration-none text-light bg-info px-5 py-2 fs-3 m-2 rounded">Add Posts</a>
        <a href="user.php" class="text-decoration-none text-light bg-info px-5 py-2 fs-3 m-2 rounded">Users</a>
    </div>


    <footer class='fixed-bottom bg-success text-center text-light'><h3>Copyright &copy; 2024, Ankit Manjrekar</h3></footer>


    <script src="https://kit.fontawesome.com/e7cca994b7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>