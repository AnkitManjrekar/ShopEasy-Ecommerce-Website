

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php
        $server = "localhost:3309";
        $username = "root";
        $password = "";
        $db_name = "shopeasy";
    
        $con = mysqli_connect($server, $username, $password, $db_name);
    
        if(!$con){
            die(mysqli_connect_error());
        }

        $result = mysqli_query($con, "SELECT * FROM `user`");
        $row_count = mysqli_num_rows($result);

        include 'myStore.php';
    ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 m-auto ">
                <table class='table table-bordered'>
                    <thead class='text-center'>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class='text-center'>
                        
                        <?php
                            $i = 1;
                            while($row = mysqli_fetch_array($result)){
                                echo "
                                <tr>
                                    <td>$i</td>
                                    <td>$row[userName]</td>
                                    <td>$row[userPhone]</td>
                                    <td>$row[userEmail]</td>
                                    <td><a href='delete_user.php?ID=$row[id]' class='btn btn-outline-danger'>Delete</a></td>

                                </tr>
                                ";
                                $i++;
                            }

                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    

    <div class="text-center col-md-2 m-auto">
        <h3 class="text-danger">Total</h3>
        <h1 class="bg-danger text-light"><?php echo $row_count ?> </h1>
    </div>
    <script src="https://kit.fontawesome.com/e7cca994b7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>