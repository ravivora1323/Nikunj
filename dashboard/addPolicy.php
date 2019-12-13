<?php include './header.php'; ?>

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Manually</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button> -->
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form action="./data/addPolicy.php" method="post" accept-charset="utf-8">
        <div class="card-body">
        	<div class="col-md-12">
        		
        	<div class="row">
        		
        	
          	<div class="col-md-6">
          		<div class="form-group">
               	<label for="policyno">Policy No</label>
                <input type="text" name="policyno" class="form-control" id="policyno" placeholder="Enter Policy Number" required="required">
            </div>
            <div class="form-group">
               	<label for="startDate">Start Date</label>
                <!-- <input type="date" name="startdate" class="form-control" id="startDate" placeholder="Enter Start Date" required="required"> -->
                <input type="text" name="startdate" class="form-control" placeholder="Enter Start Date" id="startDate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required">
            </div>
            <div class="form-group">
               	<label for="endDate">End Date</label>
                <!-- <input type="date" name="enddate" class="form-control" id="endDate" placeholder="Enter End Date" required="required"> -->
                <input type="text" name="enddate" class="form-control" placeholder="Enter End Date" id="enddate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required">
            </div>
            <div class="form-group">
               	<label for="nameofinsured">Name Of Insured</label>
                <input type="text" name="nameofinsured" class="form-control" id="nameofinsured" placeholder="Enter Name Of Insured" required="required">
            </div>
            	<div class="form-group">
               	<label for="mobile">Mobile No.</label>
                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No." required="required">
            </div>
          	</div>
            <div class="col-md-6">
            <div class="form-group">
                  <label>Mode</label>
                  <select class="form-control select2" style="width: 100%;" required="required" name="mode">
                    <option selected="selected">Select</option>
                    <option value="Yearly">Yearly</option>
                    <option value="Halfly">Halfly</option>
                    <option value="Quartly">Quartly</option>
                    <option value="Monthly">Monthly</option>
                    <!--<option value="31">Motor</option>-->
                    <!--<option value="48">Miscellaneous</option>-->
                  </select>
                </div>
            <div class="form-group">
               	<label for="premium">Premium</label>
                <input type="number" name="premium" class="form-control" id="premium" placeholder="Enter Premium" required="required">
            </div>
            <!--<div class="form-group">-->
            <!--   	<label for="OICL_department">OICL Department</label>-->
            <!--    <input type="number" name="OICL_department" class="form-control" id="OICL_department" placeholder="Enter OICL department">-->
            <!--</div>-->
            
            <div class="form-group">
                  <label>OICL Department</label>
                  <select class="form-control select2" style="width: 100%;" required="required" name="OICL_department" id="oicl_select">
                    <option selected="selected">Select</option>
                    <option value="01">Other</option>
                    <option value="44">Marine</option>
                    <option value="47">Janta</option>
                    <option value="11">Fire</option>
                    <option value="31">Motor</option>
                    <option value="48">Miscellaneous</option>
                  </select>
                </div>
            <div class="form-group" id="condition">
                
            </div>
            <div class="form-group" id="vihical_no">
                
            </div>
            <div class="form-group">
               	<label for="OICL_office">OICL Office</label>
                <input type="number" name="OICL_office" class="form-control" id="OICL_office" placeholder="Enter OICL office" required="required">
            </div>
            </div>
            </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-outline-success">Add Policy</button>
        </div>
        </form>

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>




<?php include 'footer.php'; ?>