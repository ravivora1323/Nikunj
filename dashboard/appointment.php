<?php include './header.php' ?>
<?php include './data/apointmentData.php'; ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Policy
            </h1>
          </div>
          <div class="col-sm-6">
          	<div class="float-sm-right">
          		<button class="btn btn-success" id="new_appointment" data-toggle="modal" data-target="#modal-xl">NEW APPOINTMENT</button>
          	</div>
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Make Appointment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="data/addAppointment.php" method="post">
              	<div class="row">
              		<div class="col-lg-12">
              			<!-- <div class="col-lg-6"> -->
              				<div class="form-group">
              					<label for="cust_mobile">Customer Name</label>
              					<input type="text" name="cust_name" id="cust_name" required="required" placeholder="Enter Customer Name" class="form-control">
              				</div>
              			<!-- </div> -->
              		</div>
              		<div class="col-lg-12">
              			<!-- <div class="col-lg-6"> -->
              				<div class="form-group">
              					<label for="cust_mobile">Customer Mobile</label>
              					<input type="number" name="cust_mobile" id="cust_mobile" required="required" placeholder="Enter Customer Mobile" class="form-control">
              				</div>
              			<!-- </div> -->
              		</div>
              		<div class="col-lg-12">
              			<!-- <div class="col-lg-6"> -->
              				<div class="form-group">
              					<label for="appointment">Appointment</label>
              					<select name="appointment" class="form-control" required="required" id="appointment">
              						<option value="Mediclaim">Mediclaim</option>
              						<option value="Lic Premium">Lic Premium</option>
              					</select>
              				</div>
              			<!-- </div> -->
              		</div>
              		<div class="col-lg-12">
              			<!-- <div class="col-lg-6"> -->
              				<div class="form-group">
              					<label for="app_fixed_date">Appointment Date</label>
              					<input type="text" name="app_fixed_date" class="form-control" placeholder="Enter Appointment Date" id="app_fixed_date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required">
              				</div>
              			<!-- </div> -->
              		</div>
              		<div class="col-lg-12">
              			<!-- <div class="col-lg-6"> -->
              				<div class="form-group">
              					<label for="app_last_date">Appointment Last Date</label>
              					<input type="text" name="app_last_date" class="form-control" placeholder="Enter Appointment Last Date" id="app_last_date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask required="required">
              				</div>
              			<!-- </div> -->
              		</div>
              	</div>

              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">ADD</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">POLICY DATA</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="policy" class="table table-bordered table-hover">
                <thead>
                <tr>
          			<th>ID</th>
          			<th>Customer Name</th>
          			<th>Customer Mobile</th>
          			<th>Appointment</th>
          			<th>Entry Date</th>
          			<th>Fixed Date</th>
          			<th>Last Date</th>
          			<th>Status</th>
          			<th>Action</th>
          		</tr>
                </thead>
                <tbody>
                	<?php if(mysqli_num_rows($aapointmentData) > 0): ?>
	              		<?php while($data = mysqli_fetch_assoc($aapointmentData)): ?>
		              		<tr>
		              			<td><?php echo $data['id']; ?></td>
		              			<td><?php echo $data['name']; ?></td>
		              			<td><?php echo $data['cust_mobile']; ?></td>
		              			<td><?php echo $data['appointment']; ?></td>
		              			<td><?php echo $data['app_reg_date']; ?></td>
		              			<td><?php echo $data['app_fixed_date']; ?></td>
		              			<td><?php echo $data['app_last_date']; ?></td>
		              			<td><input type="checkbox" name="my-checkbox" class="<?php echo $data['id']; ?>" id="pending" <?php if($data['pending'] == 'yes'){
		              				echo "checked";
		              			} ?> data-bootstrap-switch></td>
		              			<td><button type="button" class="btn btn-danger" onclick="deleteAppointment(<?php echo $data['id'] ?>);">DELETE</button></td>
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




<?php include './footer.php' ?>
