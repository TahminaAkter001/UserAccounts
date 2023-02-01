<?php
    include("connection.php");
    $msg ="";
    

        if(isset($_POST['submit'])){
         $p_name        = $_POST['pName'];
         $p_price       = $_POST['pPrice'];
         
         $image_name  = $_FILES['image']['name']; 
         $temp_file   = $_FILES['image']['temp_file'];
         $up_loc      = 'img/'.$image_name; 


        $sql = "INSERT INTO product(product_name,product_price,product_image)VALUES('$p_name','$p_price','$image_name')";

        if(mysqli_query($con,$sql) == TRUE){
            move_uploaded_file($temp_file,$up_loc);
            $msg="Products added to database successfully!😃";
        }
        else{
            $msg = "Failed to add the product!☹️";
        }
    }

        
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product Information</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>



    <body class="bg-info">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 bg-light mt-5 rounded">
                    <h2 class="text-center p-2">Add Product Information</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="p-2" enctypr="multipart/form-data">
                        <div class="form-group mb-2">
                            <input type="text" name="pName" class="form-control" placeholder="Product Name" required>
                        </div>
                        <div class="form-group mb-2">
                        <input type="text" name="pPrice" class="form-control" placeholder="Product Price" required>
                        </div>
                        <div class="form-group mb-4">
                        <div class="custom-file">
                            <input type="file" name="image" accept=".jpg, .jpeg, .png" class="custom-file-input" id="customFile" required>
                        </div>
                        </div>
                        <div class="form-group mb-2">
                        <input type="submit" name="submit" class="form-control btn btn-danger btn-block" value="Add">
                        </div>
                        <div class="form-group mb-2">
                            <h4 class="text-center"><?= $msg; ?></h4>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 bg-light mt-3 p-4 rounded">
                    <a href="index.php" type="button" class="btn btn-warning btn-block form-control">Go To Product Page</a>
                </div>
            </div>
        </div>


    </body>


    </html>