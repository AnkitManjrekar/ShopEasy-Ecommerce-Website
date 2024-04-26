<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <p class="text-center fs-3 fw-bold">Product Details</p>
                    <div class="mb-3">
                        <label for="pName" class="form-label">Product Name :</label>
                        <input type="text" class="form-control" id="pName" name="pName"
                            placeholder="Enter Product Name" maxlength="15">
                    </div>
                    <div class="mb-3">
                        <label for="pPrice" class="form-label">Product Price :</label>
                        <input type="text" name="pPrice" class="form-control" id="pPrice"
                            placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label for="pImage" class="form-label">Product Image :</label>
                        <input type="file" class="form-control" id="pImage" name="pImage">
                    </div>
                    <div class="mb-3">
                        <label for="pCategory" class="form-label">Product Category :</label>
                        <select class="form-select" id="pCategory" name="pCategory">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <button name="submit" class="btn btn-primary text-center fw-bold form-control my-4">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 m-auto">
                    <table class="table border">
                        <thead >
                            <tr class="text-center">
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include 'config.php';
                                $sql = "SELECT * FROM `product_details`";
                                $data = $con->query($sql);

                                while($row = mysqli_fetch_array($data)){
                                    
                                    echo "

                                    <tr class='align-items-center text-center'>
                                    <form action='update.php' method='POST'>
                                        <th scope='row' ><input type='hidden' name='update_id' value='$row[id]'> $row[id]" .  '.' . "</th>
                                        <td><input type='hidden' name='update_name' value='$row[pName]'> $row[pName]</td>
                                        <td><input type='hidden' name='update_pPrice' value='$row[pPrice]'>" .  'Rs. ' . "$row[pPrice]</td>
                                        <td><input type='hidden' name='update_pImage' value='$row[pImage]'><img src='$row[pImage]' style='height: 100px; width: 150px;'></td>
                                        <td><input type='hidden' name='update_pCategory' value='$row[pCategory]'>$row[pCategory]</td>
                                        <td><button class='btn btn-success' name='update_product'>Update</button></td>
                                        
                                    </form>
                                        <td><a href='delete.php?ID=$row[id]' class='btn btn-danger'>Delete</a></td>
                                    </tr>

                                    
                                    ";
                                }
// <td><a href='update.php?ID=$row[id]' class='btn btn-success'>Update</a></td>
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>


    <footer class='fixed-bottom bg-success text-center text-light'><h3>Copyright &copy; 2024, Ankit Manjrekar</h3></footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>