<?php include './header.php'; ?>
<?php include './data/policy.php'; ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Policy 
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


            </h1>
          </div>
          <div class="col-sm-6">
          	<div class="float-sm-right">
          		<a href="./addData.php" title="ADD XLSX FILE" class="btn btn-success">ADD DATA</a>
          		<button class="btn btn-warning" onclick="downloadPolicy();">Get Data</button>
              <!-- <button class="btn btn-danger" onclick="downloadPdf()">download pdf</button> -->
          	</div>
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">POLICY DATA</h3> -->

              <div class="row p-2">
                <div class="col-lg-12">
                  <div class="col-md-4">
                    <button type="button" id="todayData" class="btn btn-success" value="<?php echo Date('d-m-Y'); ?>">Today</button>
                    <button type="button" id="monthlyData" class="btn btn-primary" value="<?php echo Date('m-Y'); ?>">This Month</button>
                    <button type="button" id="yearlyData" class="btn btn-danger" value="<?php echo Date('Y'); ?>">This Year</button>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="policy" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <!--<th><div class="icheck-primary d-inline">-->
                    <!--    <input type="checkbox" name="sms[]" id="checkboxPrimary2" value="<?php echo $data['mobile']; ?>">-->
                    <!--    <label for="checkboxPrimary2">-->
                    <!--    </label>-->
                    <!--</div></th>-->
          			<th>ID</th>
          			<th>Policy No.</th>
          			<th>Start Data</th>
          			<th>End Date</th>
          			<th>Name Of Insured</th>
          			<th>Mobile No.</th>
          			<th>Premium</th>
          			<th>OICL Department</th>
          			<th>OICL Office</th>
          			<th>Action</th>
          		</tr>
                </thead>
                <tbody>
                	<?php if(mysqli_num_rows($policyData) > 0): ?>
	              		<?php while($data = mysqli_fetch_assoc($policyData)): ?>
		              		<tr>
		              		    <!--<td>-->
		              		    <!--    <div class="icheck-primary d-inline">-->
                      <!--                  <input type="checkbox" name="sms[]" id="checkboxPrimary2" value="<?php  ?>">-->
                      <!--                  <label for="checkboxPrimary2">-->
                      <!--              </label>-->
                      <!--              </div>-->
		              		    <!--</td>-->
		              			<td><?php echo $data['id']; ?></td>
		              			<td><?php echo $data['policy_no']; ?></td>
		              			<td><?php echo $data['start_date']; ?></td>
		              			<td><?php echo $data['end_date']; ?></td>
		              			<td><?php echo $data['name_of_insured']; ?></td>
		              			<td><?php echo $data['mobile_no']; ?></td>
		              			<td><?php echo $data['premium']; ?></td>
		              			<td><?php 
		              			if($data['OICL_department'] == '48'){
		              			    echo "Miscellaneous";
		              			}else if($data['OICL_department'] == '31'){
		              			    echo "Motor";
		              			}else if($data['OICL_department'] == '11'){
		              			    echo "Fire";
		              			}else if($data['OICL_department'] == '47'){
		              			    echo "Janta";
		              			}else if($data['OICL_department'] == '44'){
		              			    echo "Marine";
		              			}else if($data['OICL_department'] == '01'){
		              			    echo "Other";
		              			}
		              			if(isset($data['OICL_Category'])){
		              			    echo "<br>" . $data['OICL_Category'];
		              			}
		              			
		              			?></td>
		              			<td><?php echo $data['OICL_office']; ?></td>
		              			<!--<td colspan="3">-->
		              			<!--    <a href="uploadDocument.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">UPLOAD</a>-->
		              			<!--    <a href="updatePolicy.php?id=<?php echo $data['id'];?>" class="btn btn-success">UPDATE</a>-->
		              			<!--    <button type="button" class="btn btn-danger" onclick="deleteItem(<?php echo $data['id'] ?>); ">DELETE</button>-->
                                    
                   <!--                 </td>-->
                                    <td colspan="3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Action</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                              <span class="sr-only">Toggle Dropdown</span>
                                              <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="#" onclick="UploadDocument(<?php echo $data['id']; ?>)">UPLOAD</a>
                                                <a class="dropdown-item" href="#" onclick="UpdatePolicy(<?php echo $data['id']; ?>)">UPDATE</a>
                                                <!--<button type="button" class="dropdown-item" onclick="deleteItem(<?php echo $data['id'] ?>); "></button>-->
                                                <!--<a class="dropdown-item" href="#">Something else here</a>-->
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" onclick="deleteItem(<?php echo $data['id'] ?>);">DELETE</a>
                                                <a class="dropdown-item" href="#" onclick="downloadPdf(<?php echo $data['id'] ?>);">Get PDF</a>
                                              </div>
                                            </button>
                                          </div>
                                    </td>
		              		</tr>
	              		<?php endwhile; ?>
              		<?php endif; ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    




<?php include 'footer.php'; ?>