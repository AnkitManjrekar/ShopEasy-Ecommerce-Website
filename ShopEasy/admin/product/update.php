

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
    if(isset($_POST['update_product'])){
        $update_id = $_POST['update_id'];
        $update_name = $_POST['update_name'];
        $update_pPrice = $_POST['update_pPrice'];
        $update_pImage = $_POST['update_pImage'];
        $update_pCategory = $_POST['update_pCategory'];
    }
?>


<div class="container mb-5">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <p class="text-center fs-3 fw-bold text-danger">Update Product</p>
                    <div class="mb-3">
                        <label for="pName" class="form-label">Product Name :</label>
                        <input type="text" value=" <?php echo $update_name ?>" class="form-control" id="pName" name="pName"
                            placeholder="Enter Product Name" maxlength="15">
                    </div>
                    <div class="mb-3">
                        <label for="pPrice" class="form-label">Product Price :</label>
                        <input type="text" value="<?php echo $update_pPrice ?>" name="pPrice" class="form-control" id="pPrice"
                            placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label for="pImage" class="form-label">Product Image :</label>
                        <input type="file" value='<?php echo $update_pImage ?>' class="form-control" id="pImage" name="pImage">
                        <img class='text-center m-auto' src="<?php echo $update_pImage ?>" alt="" width='200px' >
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
                    <input type="hidden" name='product_id' value='<?php echo $update_id ?>'>
                    <button name="update_btn" class="btn btn-primary text-center fw-bold form-control my-4">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- UPDATE -->
    <?php
        if(isset($_POST['update_btn'])){
            $pName = $_POST['pName'];
            $pPrice = $_POST['pPrice'];
            $pImage = $_FILES['pImage'];
                $image_loc = $_FILES['pImage']['tmp_name'];
                $image_name = $_FILES['pImage']['name'];
                $image_destination = "upload_image/" . $image_name;
            move_uploaded_file($image_loc, $image_destination);
            $pCategory = $_POST['pCategory'];
            $product_id = $_POST['product_id'];

            include 'config.php';
            mysqli_query($con, "UPDATE `product_details` SET `pName`='$pName',`pPrice`='$pPrice',`pImage`='$image_destination',`pCategory`='$pCategory' WHERE id = $product_id");

            header("location:index.php");
        }

    ?>

<footer class='fixed-bottom bg-success text-center text-light'><h3>Copyright &copy; 2024, Ankit Manjrekar</h3></footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>