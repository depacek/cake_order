 <?php require_once "header.php"; ?>
 <?php 
if(isset($_POST['btnSave']))
{
  // print_r($_POST);
  $err = [];
  if(isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) != ''){
    $product->set('name',$_POST['name']);
  }else{
    $err['name'] = "Enter name";
  }
  if(isset($_POST['price']) && !empty($_POST['price']) && ($_POST['price']<=0) && trim($_POST['price']) != ''){
    $err['price'] = "Enter positive price";
   
   }else{
   
     $product->set('price',$_POST['price']);
  }
   if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description']) != ''){
    $product->set('description',$_POST['description']);
  }else{
    $err['description'] = "Enter description";
  }
  if(isset($_POST['rank']) && !empty($_POST['rank']) && ($_POST['rank']<=0) && trim($_POST['rank']) != ' '){
      $err['rank'] = "Enter positive rank";
    
  }else{
       $product->set('rank',$_POST['rank']);
  }
  $product->set('status',$_POST['status']);
  $product->set('created_at',date('Y-m-d H:i:s'));
  $product->set('created_by',$_SESSION['admin_id']);
  $product->set('image',$_POST['image']);

  //error check
  if(count($err) == 0){
    $msg = $product->create();
  }
}

?>
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alom khan</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Product Management</h1>
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add product <a href="list_product.php" class="btn btn-primary"><i class="fas fa-list"></i> List product</a></h6>
                </div>
                <?php
                  if(isset($msg) && $msg == true){?>
                    <p class="alert alert-success">Product has been successfully added </p>
                  
                  <?php }?>
                   <?php
                  if(isset($msg) && $msg == false){?>
                    <p class="alert alert-danger">Product addition failed</p>
                  <?php }?>
                <div class="card-body">
                  <form action="" method="POST" id="createForm" novalidate="" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" required="">
                      <?php if(isset($err['name'])){?>
                        <span class="text-danger"><?php echo $err['name'];?></span>
                      <?php } ?>
                    </div>
                     <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" name="price" class="form-control" required="">
                      <?php if(isset($err['price'])){?>
                        <span class="text-danger"><?php echo $err['price'];?></span>
                      <?php } ?>
                    </div>
                       <div class="form-group">
                      <label for="description">Description</label>
                      <textarea  name="description" class="form-control" required=""></textarea> 
                      <?php if(isset($err['description'])){?>                            <span class="text-danger"><?php echo $err['description'];?></span>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label for="rank">Rank</label>
                      <input type="number" name="rank" class="form-control" required="">
                      <?php if(isset($err['rank'])){?>
                        <span class="text-danger"><?php echo $err['rank'];?></span>
                      <?php } ?>
                    </div>
                     <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" name="image">
                      
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <input type="radio" name="status" value="1">Active
                      <input type="radio" name="status" value="0" checked="">DeActive
                    </div>

                    <div class="form-group">
                      <button type="submit" name="btnSave" class="btn btn-success"><i class="fas fa-save"></i> Add Product</button>
                      <button type="reset" name="btnClear" class="btn btn-danger"><i class="fas fa-recycle"></i> Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php require_once "footer.php"; ?>