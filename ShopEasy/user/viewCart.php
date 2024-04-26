

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Cart Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .show_it{
            display: none;
        }

        @media print{
            .hide_it{
                display: none;
            }

            *{
                margin: 0;
                padding: 0;
            }

            .table_div{
                width : 80vw;
                margin: auto;
                margin-top: 20px;
                /* background-color: aqua; */
            }

            .show_it{
                display: block;
            }
        }

        
    </style>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <?php
    // session_start();
    // session_start();

    if(!isset($_SESSION["username"])){
        header("location:form/login.php");
    }

?>


    <div class="container">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h1 class="hide_it">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid hide_it">
        <div class="row justify-content-center ">
            <div class="col-sm-12 col-md-6 col-lg-9 ">
                <table class="table  text-center">
                    <thead class="bg-warning fs-5">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th class="hide_it">Update</th>
                            <th class="hide_it">Delete</th>
                        </tr>
                        
                    </thead>
                    <tbody>

                        <?php
                            $total = 0;
                            if(isset($_SESSION['cart'])){
                                $product_total = 0;
                                
                                foreach($_SESSION['cart'] as $index => $x){
                                    $product_total = $x['pPrice']*$x['pQuantity'];
                                    $total += $product_total;
                                    echo "
                                    <form action='add_to_cart.php' method='POST'>
                                        <tr>
                                            <td>" . $index+1 . "</td>
                                            <td><input type='hidden' name='updated_name' value='$x[pName]'>$x[pName]</td>
                                            <td><input type='hidden' name='updated_price' value='$x[pPrice]'>$x[pPrice]</td>
                                            <td><input type='number' name='updated_quantity' value='$x[pQuantity]'></td>
                                            <td>$product_total</td>
                                            <td class='hide_it'><button name='update_btn' class='btn btn-primary'>Update</button></td>
                                            <td class='hide_it'><button name='delete_btn' class='btn btn-danger'>Delete</button></td>
                                            <td><input type='hidden' name='item' value='$x[pName]'></td>
                                        </tr>
                                    </form>
                                    ";
                                }
                                
                            }
                        ?>

                    </tbody>
                </table>
            </div>

            <div class="col-lg-3 text-center" >
                    <h3>TOTAL</h3>
                    <h1 class="align-middle bg-danger text-light"><?php echo "Rs. " . number_format($total)  ?></h1>
                
            </div>
        </div>
    </div>
    <div class="table_div show_it">
        <table class="table  text-center  edit_table">
            <thead class="bg-warning fs-5">
                <tr>
                    <th>Sr. No.</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th class="hide_it">Update</th>
                    <th class="hide_it">Delete</th>
                </tr>
                
            </thead>
            <tbody>
    
                <?php
                    $total = 0;
                    if(isset($_SESSION['cart'])){
                        $product_total = 0;
                        
                        foreach($_SESSION['cart'] as $index => $x){
                            $product_total = $x['pPrice']*$x['pQuantity'];
                            $total += $product_total;
                            echo "
                            <form action='add_to_cart.php' method='POST'>
                                <tr>
                                    <td>" . $index+1 . "</td>
                                    <td><input type='hidden' name='updated_name' value='$x[pName]'>$x[pName]</td>
                                    <td><input type='hidden' name='updated_price' value='$x[pPrice]'>$x[pPrice]</td>
                                    <td><input type='number' name='updated_quantity' value='$x[pQuantity]'></td>
                                    <td>$product_total</td>
                                    <td class='hide_it'><button name='update_btn' class='btn btn-primary'>Update</button></td>
                                    <td class='hide_it'><button name='delete_btn' class='btn btn-danger'>Delete</button></td>
                                    <td><input type='hidden' name='item' value='$x[pName]'></td>
                                </tr>
                            </form>
                            ";
                        }
                        
                    }
                ?>
    
            </tbody>
        </table>

        <div class="col-lg-3 text-center" >
            <h3>TOTAL</h3>
            <h1 class="align-middle bg-danger text-light"><?php echo "Rs. " . number_format($total)  ?></h1>
        </div>
    </div>
    
    </div>
    
    <div class='text-center mt-5 hide_it'>
        <button class='btn btn-primary fs-5 fw-bold m-auto' onclick="printBt()"><h3>Buy Now</h3></button>
    </div>
    

    <footer class='fixed-bottom bg-success text-center text-light '><h3>Copyright &copy; 2024, Ankit Manjrekar</h3></footer>


    <script>
        function printBt(){
            
            window.print()
            
        }
        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>