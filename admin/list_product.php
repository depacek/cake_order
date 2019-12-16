<?php require_once "header.php";
$data = $product -> lists();
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alom Khan</span>
               
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
      
                <div class="card-body">
                <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Product <a href="create_product.php" class="btn btn-primary"><i class="fas fa-plus"></i> Create Product</a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="product_table" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Descripton</th>
                      <th>Rank</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot class='thead-dark'>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Rank</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if(count($data) > 0){?>
                      <<?php $i = 1; ?>
                      <?php foreach ($data as $d) {?>
                    
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $d->name; ?></td>
                      <td><?php echo $d->price; ?></td>
                      <td><?php echo $d->description; ?></td>
                      <td><?php echo $d->rank; ?></td>
                      <td><?php echo $d->image; ?></td>
                      <td>
                        <?php if($d-> status == 1){?>
                          <label class="text-success">Active</label>
                        <?php } else { ?>
                          <label class="text-danger">De-active</label>
                        <?php } ?>
                       </td>
                      <td>
                        <a href="product_view.php?id=<?php echo $d->id ?>"  class="btn btn-info" title="View details"><i class="fas fa-eye"></i></a>

                         <a href="product_edit.php?id=<?php echo $d->id?>"  class="btn btn-warning" title="Edit"><i class="fas fa-edit"></i></a>

                          <a href="product_delete.php?id=<?php echo $d->id?>"  class="btn btn-danger" title="Delete" onclick="return confirm('are you sure to delete?')"><i class="fas fa-trash"></i></a>
                     </td>
                    </tr>
                  <?php }?>

                  <?php } else {?>

                    <tr>
                      <td><div class="alert alert-danger">Product not found</div></td>
                    </tr>
                  <?php }?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php require_once "footer.php"; ?>
    <script type="text/javascript">
      $(document).ready( function () {
    $('#product_table').DataTable();
} );

    </script>