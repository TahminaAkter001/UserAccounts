<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    //something posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)){
    $query = "select * from user where email = '$email' limit 1";

    $result = mysqli_query($con,$query);

    if($result){

        $user_data = mysqli_fetch_assoc($result);

        if($user_data['password'] == $password){
            header("Location:index.php");
            die;
        }else
        echo"Email or password is incorrect!";
        
    }

}

}
?>

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
        <form action="login.php" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3">
                <h1>Login</h1>
                <p>Enter valid information to login.</p>
                <hr class="mb-3">

                <label for="email"><b>Email Address</b></label>
                <input class="form-control" type="email" name="email" require>

                <label for="password"><b>Password</b></label>
                <input class="form-control" type="password" name="password" require>
                <hr class="mb-3">

                <input class="btn btn-success" type="submit" name="create" value="Login">
                </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>