<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Home Page</title>
    <?php include 'header.php' ?>
</head>
<body>

<div class="container-fluid">
  <div class="col-md-12"> 
  <div class="row">
    <h1 class="text-center text-primary">HOME</h1>
    
      <?php 
        include 'config.php';
        $record = mysqli_query($con, "SELECT * FROM `product_details`");
        while($row = mysqli_fetch_array($record)){
            echo "
            <div class='col-md-6 col-lg-4 m-auto'> 
              <div class='card p-3 text-center border rounded border-2 border-danger m-auto mb-4 ' style='width: 23rem;'>
                  <img src='../admin/product/$row[pImage]' class='m-auto card-img-top border rounded border-1 border-muted' alt='...' style='height: 210px; width: 250px; ' >
                  <div class='card-body'>
                    <form action='add_to_cart.php' method='post'>
                      <h5 class='card-title fw-bold fs-4 text-danger'>$row[pName]</h5>
                      <p class='card-text fw-bold fs-5'>Rs. $row[pPrice]</p>
                      <input type='hidden' name='pName' value='$row[pName]' >
                      <input type='hidden' name='pPrice' value='$row[pPrice]' >
                      <input type='number' name='pQuantity' min='1' max='30' placeholder='Quantity' style='width: 100%;' class='px-2 py-1'>
                      <input type='submit' name='addCart' value='Add To Cart' class='btn btn-danger w-100 mt-3'>
                    </form>
                  </div>
              </div>
            </div>
            ";
        }

      ?>

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