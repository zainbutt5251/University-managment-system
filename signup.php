<?php

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $mobile_no = $_POST["mobile_no"];
    $adress = $_POST["adress"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
      
      
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `mobile_no`, `adress`, `password`) VALUES ('$firstname', '$lastname', '$email', '$mobile_no', '$adress', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            header("location: index.php");
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
   
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
    <h1 class="text-center"><img src="User/img/logo.png" alt="" height="90PX"> User Registration</h1>
     <hr>
     <div class="card shadow p-3">
     <form action="signup.php" method="post">
        <div class="form-group">
            <label for="username">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder=" Enter First name" required>
            
        </div>
         <div class="form-group">
            <label for="username">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname"  placeholder=" Enter Last name" required>
            
        </div>
        <div class="form-group">
            <label for="username">email</label>
            <input type="text" class="form-control" id="email" name="email"  placeholder=" Enter Email" required>
            
        </div>
        <div class="form-group">
            <label for="username">Mobile No</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no"  placeholder=" Enter Mobile_no" required>
            
        </div>
          <div class="form-group">
            <label for="username">Adress</label>
            <input type="text" class="form-control" id="adress" name="adress"  placeholder=" Enter Address " required>
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  placeholder=" Enter password " required>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder=" Enter confirm password " required>
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
     <div class="row">
         <div class="col-md-12 text-right">
             <a href="login.php">Already Register ?</a>
         </div>
     </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
