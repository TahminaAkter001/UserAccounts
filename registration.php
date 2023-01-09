

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
<?php
if(isset($_POST['create'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
}

?>
</div>

    <div>
        <form action="registration.php" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3">
                <h1>Registration</h1>
                <p>Fill up the form with valid information.</p>
                <hr class="mb-3">

                <label for="firstname"><b>First Name</b></label>
                <input class="form-control" type="text" name="firstname" require>

                <label for="lastname"><b>Last Name</b></label>
                <input class="form-control" type="text" name="lastname" require>

                <label for="email"><b>Email Address</b></label>
                <input class="form-control" type="email" name="email" require>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input class="form-control" type="text" name="phonenumber" require>

                <label for="password"><b>Password</b></label>
                <input class="form-control" type="password" name="password" require>
                <hr class="mb-3">

                <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>