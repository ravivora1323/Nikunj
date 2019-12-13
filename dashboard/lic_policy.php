<?php include './header.php'; ?>
<?php include './data/lic_policy.php'; ?>

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
          		<a href="./addLicData.php" title="ADD XLSX FILE" class="btn btn-success">ADD DATA</a>
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
                <div class="row p-2">
                <div class="col-lg-12">
                  <div class="col-md-4">
                    <button type="button" id="lictodayData" class="btn btn-success" value="<?php echo Date('d-m-Y'); ?>">Today</button>
                    <button type="button" id="licmonthlyData" class="btn btn-primary" value="<?php echo Date('m-Y'); ?>">This Month</button>
                    <button type="button" id="licyearlyData" class="btn btn-danger" value="<?php echo Date('Y'); ?>">This Year</button>
                  </div>
                </div>
                
              </div>
            </div>
              <!--<h3 class="card-title">POLICY DATA</h3>-->
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="lic_policy" class="table table-bordered table-hover">
                <thead>
                <tr>
          			<th><small>Sr No.</small></th>
          			<th><small>Mobile</small></th>
          			<th><small>Policy No.</small></th>
          			<th><small>DOC</small></th>
          			<th><small>Mode</small></th>
          			<th><small>Plan No.</small></th>
          			<th><small>Premium</small></th>
          			<!-- <th>Premium</th> -->
          			<th><small>Sum Assured</small></th>
          			<th><small>Term</small></th>
                <th><small>ppt</small></th>
                <th><small>Next Premium</small></th>
                <th><small>AG Code</small></th>
                <th><small>Action</small></th>
          		</tr>
                </thead>
                <tbody>
                	<?php if(mysqli_num_rows($policyData) > 0): ?>
	              		<?php while($data = mysqli_fetch_assoc($policyData)): ?>
		              		<tr>
		              			<td><?php echo $data['id']; ?></td>
		              			<td><?php echo $data['mobile']; ?></td>
		              			<td><?php echo $data['policy_no']; ?></td>
		              			<td><?php echo $data['doc']; ?></td>
		              			<td><?php echo $data['mode']; ?></td>
		              			<td><?php echo $data['plan_no']; ?></td>
		              			<td><?php echo $data['premium']; ?></td>
		              			<td><?php echo $data['sum_assured']; ?></td>
		              			<td><?php echo $data['term']; ?></td>
                        <td><?php echo $data['ppt']; ?></td>
                        <td><?php echo $data['next_prem']; ?></td>
                        <td><?php echo $data['ag_code']; ?></td>
		              			<!-- <td><button type="button" class="btn btn-danger" onclick="deleteLic(<?php echo $data['id'] ?>);">DELETE</button><a href="updateLicPolicy.php?id=<?php echo $data['id']; ?>" class="btn btn-success">UPDATE</a></td> -->



                        <td colspan="3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Action</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                              <span class="sr-only">Toggle Dropdown</span>
                                              <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="#" onclick="UploadLicDocument(<?php echo $data['id']; ?>)">UPLOAD</a>
                                                <a class="dropdown-item" href="#" onclick="UpdateLicPolicy(<?php echo $data['id']; ?>)">UPDATE</a>
                                                <!--<button type="button" class="dropdown-item" onclick="deleteItem(<?php echo $data['id'] ?>); "></button>-->
                                                <!--<a class="dropdown-item" href="#">Something else here</a>-->
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" onclick="deleteLic(<?php echo $data['id'] ?>);">DELETE</a>
                                                <a class="dropdown-item" href="#" onclick="downloadLicPdf(<?php echo $data['id'] ?>);">Get PDF</a>
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