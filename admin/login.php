<?php 
if(isset($_POST['btnlogin']))
{
  $err = [];
  if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) != ''){
    $email = $_POST['email'];
  }else{
    $err['email'] = "Ente email";
  }
  if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password']) != ' '){
    $password = $_POST['password'];
  }else{
    $err['password'] = "Enter password";
  }

  //error count
  if(count($err) == 0) {
      //require user class
    require_once "class/admin.class.php";
    // create user object
    $admin = new Admin();
    //set user's email
    $admin->set('email',$email);
    //set user's password
    $admin->set('password',md5($password));

    // call login function
    $data=$admin->login();
    if($data){
      //start session
    session_start();
      
       //data store into session
      $_SESSION['email'] = $email;
      $_SESSION['admin_name']= $data->name;
      $_SESSION['admin_image']= $data->image;
      $_SESSION['admin_id']= $data->id;

      //redirect to next page
     header('location:dashboard.php');
    }else{
      $err['email'] = "Invalid Email or password";
      
  }
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

  <title>Login</title>

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
      width: 12.5rem;
  }
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                  </div>
                  <form class="user" action="" method="post" novalidate="" id="loginForm">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required="">
                      <?php
                      if(isset($err['email'])){
                        echo $err['email'];
                      }
                      ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required="">
                        <?php
                      if(isset($err['password'])){
                        echo $err['password'];
                      }
                      ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox"  name="remember" class="custom-control-input" id="customCheck" value="Remember">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="btnlogin" class="btn btn-primary btn-user btn-block">
                      Login
                    </button><br>
                    <?php
                    //chech error using query string message $_GET
                    if (isset($_GET['msg']) && $_GET['msg'] == 1) { ?>
                      <p class="alert alert-danger">Please login to continue, session has expired</p>
                    <?php }?>
                  </form>
                 
                </div>
              </div>
            </div>
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
      $('#loginForm').validate()
    })
  </script>

</body>

</html>
