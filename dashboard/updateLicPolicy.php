<?php 

include '../config/db_config/connection.php';

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$updateFetchSql = "SELECT * FROM `lic_policy` WHERE `id`='".$id."'";
	$runSql =  mysqli_query($connection,$updateFetchSql);
	$data = mysqli_fetch_assoc($runSql);
}
 ?>

 <?php include './header.php'; ?>

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">UPDATE</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button> -->
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form action="./data/updateLicPolicy.php" method="post" accept-charset="utf-8">
        <div class="card-body">
        	<div class="col-md-12">
        		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        	<div class="row">
        		
        	
          	<div class="col-md-6">
              <div class="form-group">
                <label for="sr_no">Sr No.</label>
                <input type="number" name="sr_no" class="form-control" id="sr_no" placeholder="Enter Sr No." required="required" value="<?php echo $data['id']; ?>">
              </div>
          		<div class="form-group">
                 	<label for="mobile">Mobile</label>
                  <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No." required="required" value="<?php echo $data['mobile']; ?>">
              </div>
              <div class="form-group">
                  <label for="policy_no">Policy No.</label>
                  <input type="number" name="policyno" class="form-control" id="policy_no" placeholder="Enter Policy No." required="required" value="<?php echo $data['policy_no']; ?>">
              </div>

              <div class="form-group">
                  <label for="doc">DOC</label>
                  <!-- <input type="text" name="doc" class="form-control" id="doc" placeholder="Enter DOC" required="required" > -->
                  <input type="text" name="doc" class="form-control" placeholder="Enter Doc" id="doc" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required" value="<?php echo $data['doc']; ?>">
              </div>
              <div class="form-group">
                  <label for="mode">Mode</label>
                  <input type="text" name="mode" class="form-control" id="mode" placeholder="Enter Mode" required="required" value="<?php echo $data['mode']; ?>">
              </div>
              <div class="form-group">
                <label for="plan_no">Plan No.</label>
                <input type="number" name="plan_no" class="form-control" id="plan_no" placeholder="Enter Plan No." required="required" value="<?php echo $data['plan_no']; ?>">
              </div>
          	</div>







            <div class="col-md-6">

            	
              <div class="form-group">
                <label for="premium">premium.</label>
                <input type="number" name="premium" class="form-control" id="premium" placeholder="Enter premium." required="required" value="<?php echo $data['premium']; ?>">
              </div>
              <div class="form-group">
                <label for="sum_assured">Sum Assured</label>
                <input type="number" name="sum_assured" class="form-control" id="sum_assured" placeholder="Enter Sum Assured." required="required" value="<?php echo $data['sum_assured']; ?>">
              </div>
              <div class="form-group">
                <label for="term">Term</label>
                <input type="number" name="term" class="form-control" id="term" placeholder="Enter Term." required="required" value="<?php echo $data['term']; ?>">
              </div>
              <div class="form-group">
                <label for="ppt">ppt</label>
                <input type="number" name="ppt" class="form-control" id="ppt" placeholder="Enter ppt." required="required" value="<?php echo $data['ppt']; ?>">
              </div>
              <div class="form-group">
                <label for="next_prem">Next Premium</label>
                <!-- <input type="date" name="next_prem" class="form-control" id="next_prem" placeholder="Enter Next Premium." required="required"> -->
                <input type="text" name="next_prem" class="form-control" placeholder="Enter Premium" id="next_prem" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required" value="<?php echo $data['next_prem']; ?>">
              </div>
              <div class="form-group">
                <label for="ag_code">AG Code</label>
                <input type="number" name="ag_code" class="form-control" id="ag_code" placeholder="Enter AG Code." required="required" value="<?php echo $data['ag_code']; ?>">
              </div>
            </div>
            </div>
            <!-- <div class="row"> -->
              
            <!-- </div> -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-outline-success">Update Policy</button>
        </div>
        </form>

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>




<?php include 'footer.php'; ?>