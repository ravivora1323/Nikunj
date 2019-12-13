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
        <form action="./data/addCelebrate.php" method="post" accept-charset="utf-8">
        <div class="card-body">
        	<div class="col-md-12">
        		
        	<div class="row">
        		
        	
          	<div class="col-md-6">
          		<div class="form-group">
               	<label for="family_name">Family Name</label>
                <input type="text" name="family_name" class="form-control" id="family_name" placeholder="Enter Family Name" required="required">
            </div>
            <div class="form-group">
               	<label for="birth_place">Birth Place</label>
                <!-- <input type="date" name="startdate" class="form-control" id="startDate" placeholder="Enter Start Date" required="required"> -->
                <input type="text" name="birth_place" class="form-control" placeholder="Enter Birth Place" id="birth_place" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required">
            </div>
            <div class="form-group">
               	<label for="Occupation">Occupation</label>
                <!-- <input type="date" name="enddate" class="form-control" id="endDate" placeholder="Enter End Date" required="required"> -->
                <input type="text" name="occupation" class="form-control" placeholder="Enter Occupation" id="Occupation" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required">
            </div>
            <div class="form-group">
               	<label for="approx_income">Approx Income</label>
                <input type="number" name="approx_income" class="form-control" id="approx_income" placeholder="Enter Approx Income" required="required">
            </div>
            	<div class="form-group">
               	<label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" id="dob" placeholder="Enter Date of Birth." required="required">
            </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="number" name="age" class="form-control" id="Age" placeholder="Enter Age." required="required">
            </div>
            <div class="form-group">
                <label for="yod">Your Of Death, (IF).</label>
                <input type="number" name="yod" class="form-control" id="yod" placeholder="Enter your of Death.">
            </div>

          	</div>
            <div class="col-md-6">
            <!-- <div class="form-group">
                  <label>Mode</label>
                  <select class="form-control select2" style="width: 100%;" required="required" name="mode">
                    <option selected="selected">Select</option>
                    <option value="Yearly">Yearly</option>
                    <option value="Halfly">Halfly</option>
                    <option value="Quartly">Quartly</option>
                    <option value="Monthly">Monthly</option>
                    
                  </select>
                </div> -->
                <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" name="qualification" class="form-control" id="qualification" placeholder="Enter Qualification." required="required">
            </div>
            <div class="form-group">
               	<label for="posted_as">Posted As</label>
                <input type="text" name="posted_as" class="form-control" id="posted_as" placeholder="Enter Posted">
            </div>
            <!--<div class="form-group">-->
            <!--   	<label for="OICL_department">OICL Department</label>-->
            <!--    <input type="number" name="OICL_department" class="form-control" id="OICL_department" placeholder="Enter OICL department">-->
            <!--</div>-->
            
            <!-- <div class="form-group">
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
                </div> -->
            <!-- <div class="form-group" id="condition">
                
            </div>
            <div class="form-group" id="vihical_no">
                
            </div> -->
              <div class="form-group">
                <label for="corres_addr">Correspondence Address</label>
                <textarea class="form-control" name="corres_addr" id="corres_addr" rows="4" placeholder="Enter Correspondence Address.."></textarea>
              </div>
              <div class="form-group">
                <label for="perminate_addr">Perminate Address</label>
                <textarea class="form-control" name="perminate_addr" id="perminate_addr" rows="4" placeholder="Enter Correspondence Address.."></textarea>
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