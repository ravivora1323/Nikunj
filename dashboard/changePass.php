<?php include('header.php'); ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Old Password</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($_SESSION['wrong'])): ?><p class="alert alert-danger"> <?php echo $_SESSION['wrong']; ?></p> <?php endif; ?>
              <form role="form" action="data/changePass.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Old Password</label>
                    <input type="password" name="oldpass" class="form-control" id="exampleInputEmail1" placeholder="Enter OLD Password..." required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                    <input type="password" name="newpass" class="form-control" id="exampleInputEmail1" placeholder="Enter NEW Password..." required="required">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success">Change</button>
                </div>
              </form>
            </div>
            <!-- /.card -->





 		</div>
 	</div>
 </section>


<?php include('footer.php'); ?>