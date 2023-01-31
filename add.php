<?php
    //$user_data = check_login($con);
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
                    <form action="" method="post" class="p-2" enctypr="multipart/form-data">
                        <div class="form-group mb-2">
                            <input type="text" name="pImage" class="form-control" placeholder="Product Name" required>
                        </div>
                        <div class="form-group mb-2">
                        <input type="text" name="pPrice" class="form-control" placeholder="Product Name" required>
                        </div>
                        <div class="form-group mb-4">
                        <div class="custom-file">
                            <input type="file" name="pImage" class="custom-file-input form-control" id="customFile" required>
                        </div>
                        </div>
                        <div class="form-group mb-2">
                        <input type="submit" name="pPrice" class="form-control btn btn-danger btn-block" value="Add">
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