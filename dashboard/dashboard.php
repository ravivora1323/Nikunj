<?php include './data/dashboard_info.php'; ?>
<?php include 'header.php'; ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($currentMonthEndDate) . " / ". mysqli_num_rows($totalPolicy); ?></h3>

                <p>Mediclaim</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p class="small-box-footer" style="cursor: pointer;"><?php echo "Today" . " - " . date('M',strtotime('first day of +1 month')) . " "; ?><i class="fas fa-arrow-circle-right"></i></p>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>

          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($currentMonthPremium) . " / ". mysqli_num_rows($totalLic); ?><!-- <sup style="font-size: 20px">%</sup> --></h3>

                <p>Lic Premium</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              <p class="small-box-footer" style="cursor: pointer;"><?php echo "Today" . " - " . date('M',strtotime('first day of +1 month')) . " "; ?><i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($policyPending) . " / ". mysqli_num_rows($allAppointment); ?></h3>

                <p>Mediclaim Appoinment</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              <p class="small-box-footer" style="cursor: pointer;"><?php echo "Today" . " - " . date('M',strtotime('first day of +1 month')) . " "; ?><i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($pendingApp) . " / ". mysqli_num_rows($allAppointment); ?></h3>

                <p>LIC Appointment</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              <p class="small-box-footer" style="cursor: pointer;"><?php echo "Today" . " - " . date('M',strtotime('first day of +1 month')) . " "; ?><i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Miscellaneous</span>
                <span class="info-box-number"><?php echo $allMiscellaneous; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Motor</span>
                <span class="info-box-number"><?php echo $allMotor; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Fire</span>
                <span class="info-box-number"><?php echo $allFire; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Janta</span>
                <span class="info-box-number"><?php echo $allJanta; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Marine</span>
                <span class="info-box-number"><?php echo $allMarine; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Other</span>
                <span class="info-box-number"><?php echo $allOther; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          </div>
        </div>
    </div>
</section>
  <section class="content">
    <div class="container-fluid">
    <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Reminder</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0" id="reminder">
                    <thead>
                    <tr>
                      <th>Mobile</th>
                      <th>Last Date</th>
                      <th>Type</th>
                      <th>Last Premium</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(mysqli_num_rows($currentMonthEndDate) > 0): ?>
                    <?php while($data = mysqli_fetch_assoc($currentMonthEndDate)): ?>  
                    <tr>
                      <td><a href="tel:<?php echo $data['mobile']; ?>"><?php echo $data['mobile']; ?></a></td>
                      <td><?php echo $data['end_date']; ?></td>
                      <td><span class="badge badge-success">Mediclaim</span></td>
                      <td><?php echo $data['premium']; ?></td>
                    </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>


                    <?php if(mysqli_num_rows($currentMonthPremium) > 0): ?>
                    <?php while($data = mysqli_fetch_assoc($currentMonthPremium)): ?>  
                    <tr>
                      <td><a href="tel:<?php echo $data['mobile']; ?>"><?php echo $data['mobile']; ?></a></td>
                      <td><?php echo $data['next_prem']; ?></td>
                      <td><span class="badge badge-success">LIC</span></td>
                      <td><?php echo $data['premium']; ?></td>
                    </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.footer -->
            </div>
          </div>
        </div>
      </div>
  </section>




<?php include 'footer.php'; ?>