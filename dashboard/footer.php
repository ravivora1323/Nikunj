<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Developed | By <a href="http://livetimesoft.in">LiveTimeSoft</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.0.0-rc.5 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- <script async src='https://www.google-analytics.com/analytics.js'></script> -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<script src="../plugins/select2/js/select2.full.min.js"></script>

<!-- JQVMap -->
<!-- <script src="../plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<!-- <script src="../plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/dropzone.min.js"></script>
<script src="../dist/js/dropzone-amd-module.min.js"></script>
<!-- <script src="../dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>


<!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script> -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  
    // $("#example1").DataTable();
    
     
    $(document).ready(function(){
       var policy =  $('#policy').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
       
        
       $('#todayData').on('click',function(){
          policy.columns( 3 ).search( this.value ).draw(); 
       });
       
       $('#monthlyData').on('click',function(){
          policy.columns( 3 ).search( this.value ).draw();
       });
       
       $('#yearlyData').on('click',function(){
          policy.columns( 3 ).search( this.value ).draw();
       });
       
       var lic_policy = $('#lic_policy').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
       
        $('#lictodayData').on('click',function(){
          lic_policy.columns( 10 ).search( this.value ).draw(); 
        });
           
        $('#licmonthlyData').on('click',function(){
         lic_policy.columns( 10 ).search( this.value ).draw();
        });
           
        $('#licyearlyData').on('click',function(){
         lic_policy.columns( 10 ).search( this.value ).draw();
        });
       
    });
    
    // $('.file-upload').file_upload();
    $('#reminder').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
    });

    
    


    $('.select2bs4').select2({
          theme: 'bootstrap4'
    });
    // $('#policyno').inputmask('######/##/####/##', { 'placeholder': '######/##/####/##' });
    $('#doc').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('#next_prem').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('#startDate').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('#enddate').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('#app_last_date').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('#app_fixed_date').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('.select2').select2();


    $('#oicl_select').on('change',function(){
        if(this.value == '48'){
            $('#condition').html('<label>OICL Category</label><select class="form-control select2" style="width: 100%;" required="required" name="OICL_Category"><option selected="selected">Select</option><option value="Floater">Floater</option><option value="Mediclaim">Mediclaim</option><option value="PA">PA</option><option value="Nagrik">Nagrik</option><option value="Shop">Shop</option><option value="Employee">Employee</option><option value="Other">Other</option></select>');
        }else if(this.value == '31'){
            $('#condition').html('<label>OICL Category</label><select class="form-control select2" style="width: 100%;" required="required" name="OICL_Category"><option selected="selected">Select</option><option value="TwoWheeler">TwoWheeler</option><option value="Fourwheeler">Fourwheeler</option><option value="gccv">gccv</option><option value="pccv">pccv</option><option value="mclass">mclass</option><option value="Other">Other</option></select>');
            // $('#condition').html('');
            $('#vihical_no').html('<label for="vihical">Vehicle No.</label><input type="text" name="vehical" class="form-control" id="vihical" placeholder="Enter Vehicle No." required="required">');
        }else{
            $('#condition').html('');
            $('#vihical_no').html('');
        }
       
    });
    Dropzone.autoDiscover = false;
    $("#id_dropzone").dropzone({
            maxFiles: 2000,
            url: "../images",
            success: function (file, response) {
                console.log(response);
            }
        });
  function downloadPdf(id) {
    location.href="./data/downloadPdf.php?id="+id+"";
  }
  function UpdatePolicy(id) {
      location.href="updatePolicy.php?id="+id+"";
  }
  function UpdateLicPolicy(id) {
    location.href="updateLicPolicy.php?id="+id+"";
  }
  function UploadLicDocument(id) {
    location.href="uploadLicDocument.php?id="+id+"";
  }
  function UploadDocument(id) {
      location.href="uploadDocument.php?id="+id+"";
  }
  function downloadLicPdf(id) {
    location.href="./data/downloadLicPdf.php?id="+id+"";
  }
  function downloadPolicy(){
    //   $.ajax({
    //       url:'./data/downloadPolicy.php',
    //       type:'get',
    //       success:function(response){
    //           alert(response);
    //       }
    //   });
    location.href="./data/downloadPolicy.php";
  }
  function deleteItem(id) {
        if (confirm("Are you sure?")) {
           $.ajax({
            url:"./data/deletePolicy.php?id="+id+"", //the page containing php script
            type: "get", //request type,
            success:function(result){

             location.reload();
           }
         }); 
        }
        return false;
    }
    function deleteAppointment(id) {
        if (confirm("Are you sure?")) {
           $.ajax({
            url:"./data/deleteAppointment.php?id="+id+"", //the page containing php script
            type: "get", //request type,
            success:function(result){

             location.reload();
           }
         }); 
        }
        return false;
    }
    function deleteLic(id) {
        if (confirm("Are you sure?")) {
           $.ajax({
            url:"./data/deleteLic.php?id="+id+"", //the page containing php script
            type: "get", //request type,
            success:function(result){

             location.reload();
           }
         }); 
        }
        return false;
    }
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
      // console.log(value);
    });

    $('#pending').on('switchChange.bootstrapSwitch', function (event, state) {
    // var x = $(this).data('on-text');
    // var y = $(this).data('off-text');
    var id = $(this).attr('class');
    if($("#pending").is(':checked')) {
      $.ajax({
        type:'GET',
        url:'./data/changeState.php?pending=yes&id='+id,
        success:function(response){
          console.log(response);
        }
      });
    } else {
      $.ajax({
        type:'GET',
        url:'./data/changeState.php?pending=no&id='+id,
        success:function(response){
          console.log(response);
        }
      });
    }
});

    // $('#doc').datepicker({
    //   formate:'DD/MM/YYYY'
    // });
</script>
</body>
</html>