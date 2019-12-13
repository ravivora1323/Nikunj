<?php include './header.php'; ?>

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Upload XSLX File</h3>
          <?php 
            	// session_start(); 
            	if(isset($_SESSION['exel_error'])):

            	?>

            	<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Something Wrong.</h5>
                  <?php echo $_SESSION['exel_error']; ?>
                </div>

            <?php endif; ?>
          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button> -->
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form action="./data/xlsxLicPolicy.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="card-body">
        	<div class="col-md-12">
        		
        	<div class="row">
        		
        	
          	<!-- <div class="col-md-6">
          		<div class="form-group">
               	<label for="xslx">XLSX File</label>
                <input type="file" name="xslx" class="custom-file-input" id="xslx" placeholder="Select your exel file" required="required">
            </div> -->
            <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="excel" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div> -->
                    </div>
            
            </div>
            </div>
            </div>
        
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="import" class="btn btn-outline-success">Add Policy</button>
        </div>
        </form>

        <!-- /.card-footer-->
      </div>
      </div>
      <!-- /.card -->

    </section>




<?php include 'footer.php'; ?>