<?php include './header.php'; ?>
<?php include './data/celebrateData.php'; ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Celebated
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
          		<a href="./addCelebrate.php" title="ADD Celebrate Data" class="btn btn-success">ADD DATA</a>
          	</div>
          </div>
        </div>
      </div>
    </section>





<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="row p-2">
              </div>
                
                
            </div>
              <!--<h3 class="card-title">POLICY DATA</h3>-->
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="lic_policy" class="table table-bordered table-hover">
                <thead>
                <tr>
          			<!-- <th><small>ID</small></th> -->
          			<th><small>Family Name</small></th>
          			<th><small>Birth Place</small></th>
          			<th><small>Occupation</small></th>
          			<th><small>Approx Income</small></th>
          			<th><small>Date Of Birth</small></th>
          			<th><small>Qualification</small></th>
          			<!-- <th>Premium</th> -->
          			<th><small>Posted As</small></th>
          			<th><small>Correspondence Address</small></th>
                <th><small>Perminate Address</small></th>
                <th><small>Age</small></th>
                <th><small>Year Of Death</small></th>
                <th><small>Action</small></th>
          		</tr>
                </thead>
                <tbody>
                	<?php if(mysqli_num_rows($celebrateData) > 0): ?>
	              		<?php while($data = mysqli_fetch_assoc($celebrateData)): ?>
		              		<tr>
		              			<!-- <td><?php echo $data['id']; ?></td> -->
		              			<td><?php echo $data['family_name']; ?></td>
		              			<td><?php echo $data['birth_place']; ?></td>
		              			<td><?php echo $data['occupation']; ?></td>
		              			<td><?php echo $data['Approx_income']; ?></td>
		              			<td><?php echo $data['dob']; ?></td>
		              			<td><?php echo $data['qualification']; ?></td>
		              			<td><?php echo $data['posted_as']; ?></td>
		              			<td><?php echo $data['corres_addr']; ?></td>
                        <td><?php echo $data['perminate_addr']; ?></td>
                        <td><?php echo $data['age']; ?></td>
                        <td><?php echo $data['yod']; ?></td>
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