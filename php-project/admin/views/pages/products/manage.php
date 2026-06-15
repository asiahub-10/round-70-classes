<?php
require_once 'models/user.class.php';

if(isset($_POST['delete_id'])){
  $id = $_POST['delete_id'];
  // echo $id;
  $res = User::delete($id);
  if($res === true){
    $msg = "User deleted successfully";
  }else{
    $msg = $res;
  }
}

$rows = User::readAll();
// echo '<pre>';
// print_r($rows);
// echo '</pre>';
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <?php if(isset($msg)): ?>
          <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <?php echo $msg ?? "" ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
          </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-header">
              <a href="create-product" class="btn btn-sm btn-dark">Create New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>QTY</th>
                      <th>Brand</th>
                      <th>Catrgory</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>