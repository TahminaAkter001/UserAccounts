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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">  
</head>
<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/logo.png" class="brand_logo" alt="login">
                    </div>
                </div>

                <div>
        <form action="login.php" method="post">
            <div class="container">

                <div class="row">
                    <div >
               

                <label for="email"><b>Email Address</b></label>
                <input class="form-control" type="email" name="email" require>

                <label for="password"><b>Password</b></label>
                <input class="form-control" type="password" name="password" require>
                <hr class="mb-3">

                <input class="btn btn-success login_btn " type="submit" name="create" value="Login">
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="">Forget your password?</a>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </form>
    </div>

            </div>
        </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    
</body>
</html>