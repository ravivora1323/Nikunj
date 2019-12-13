<?php 

include '../config/db_config/connection.php';

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$updateFetchSql = "SELECT * FROM `policy` WHERE `id`='".$id."'";
	$runSql =  mysqli_query($connection,$updateFetchSql);
	$data = mysqli_fetch_assoc($runSql);
}
 ?>

 <?php include './header.php'; ?>

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button> -->
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form action="./data/updatePolicy.php" method="post" accept-charset="utf-8">
        <div class="card-body">
        	<div class="col-md-12">
        		
        	<div class="row">
        		
        	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          	<div class="col-md-6">
          		<div class="form-group">
               	<label for="policyno">Policy No</label>
                <input type="text" name="policyno" class="form-control" id="policyno" placeholder="Enter Policy Number" required="required" value="<?php echo $data['policy_no']; ?>">
            </div>
            <div class="form-group">
               	<label for="startDate">Start Date</label>
                <!-- <input type="date" name="startdate" class="form-control" id="startDate" placeholder="Enter Start Date" required="required"> -->
                <input type="text" name="startdate" class="form-control" placeholder="Enter Start Date" id="startDate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required" value="<?php echo $data['start_date']; ?>">
            </div>
            <div class="form-group">
               	<label for="endDate">End Date</label>
                <!-- <input type="date" name="enddate" class="form-control" id="endDate" placeholder="Enter End Date" required="required"> -->
                <input type="text" name="enddate" class="form-control" placeholder="Enter End Date" id="enddate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required" value="<?php echo $data['end_date']; ?>">
            </div>
            <div class="form-group">
               	<label for="nameofinsured">Name Of Insured</label>
                <input type="text" name="nameofinsured" class="form-control" id="nameofinsured" placeholder="Enter Name Of Insured" required="required" value="<?php echo $data['name_of_insured']; ?>">
            </div>
          	</div>
            <div class="col-md-6">
            	<div class="form-group">
               	<label for="mobile">Mobile No.</label>
                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No." required="required" value="<?php echo $data['mobile_no']; ?>">
            </div>
            <div class="form-group">
               	<label for="premium">Premium</label>
                <input type="number" name="premium" class="form-control" id="premium" placeholder="Enter Premium" required="required" value="<?php echo $data['premium']; ?>">
            </div>
            <div class="form-group">
               	<label for="OICL_department">OICL Department</label>
                <input type="number" name="OICL_department" class="form-control" id="OICL_department" placeholder="Enter OICL department" value="<?php echo $data['OICL_department']; ?>">
            </div>
            <div class="form-group">
               	<label for="OICL_office">OICL Office</label>
                <input type="number" name="OICL_office" class="form-control" id="OICL_office" placeholder="Enter OICL office" required="required" value="<?php echo $data['OICL_office']; ?>">
            </div>
            </div>
            </div>
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