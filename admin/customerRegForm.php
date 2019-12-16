<?php
require_once"object.php";

if(isset($_POST['btnReg']))
{
  print_r($_POST);
  $err = [];
    if(isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) != ''){
    $customer->set('name',$_POST['name']);
  }else{
    $err['name'] = "Ente name ";
  }
    if(isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username']) != ''){
    $customer->set('username',$_POST['username']);
  }else{
    $err['username'] = "Ente username";
  }
  if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) != ''){
    $customer->set('email',$_POST['email']);
  }else{
    $err['email'] = "Ente email";
  }
  if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password']) != ' '){
   $customer->set('password',$_POST['password']);
  }else{
    $err['password'] = "Enter password";
  }
  if(isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']) && trim($_POST['confirmPassword']) != ' '){
     $customer->set('confirmPassword',$_POST['confirmPassword']);
  }else{
    $err['confirmPassword'] = "Enter confirmPassword";
  }
   //error check
  if(count($err) == 0){
  $msg = $customer->register();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
      .error {
      color: #f56;
      font-size: 1rem;
      position: relative;
      line-height: 1;
      width: 100%;
  }
</style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              
              <form class="user" action="" method="post" id="RegForm" novalidate="">
                 <?php
                  if(isset($msg) && $msg == true){?>
                    <p class="alert alert-success"> Signup successful </p>
                  
                  <?php }?>
                   <?php
                  if(isset($msg) && $msg == false){?>
                    <p class="alert alert-danger">Signup failed</p>
                  <?php }?>
                <div class="form-group row">
                   <input type="text"  name="name" class="form-control form-control-user" id="name" placeholder="Name" required="">
                </div>
                  <div class="form-group row">
                    <input type="text" name="userName" class="form-control form-control-user" id="userName" placeholder=" UserName" required="">
                </div>

                <div class="form-group row">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required="">
                </div>


                <div class="form-group row">
                  <input type="text" name="address" class="form-control form-control-user" id="address" placeholder=" Address" required="">
                </div>                
                <div class="form-group row">
                  <input type="number" name="phoneNumber" class="form-control form-control-user" id="phoneNumber" placeholder="Phone Number" required="">
                </div>

                <div class="form-group row">
                  <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required="">
                </div>
               <div class="form-group row">
                    <input type="password" name="confirmPassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm Password" required="">
                </div>
                
                <button type="submit" name="btnReg" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script type="text/javascript" src="js/validation/dist/jquery.validate.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#RegForm').validate()
    })
  </script>

</body>

</html>
