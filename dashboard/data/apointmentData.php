<?php 

include '../config/db_config/connection.php';


$appointmentSql = "SELECT * FROM `appointment`";

$aapointmentData = mysqli_query($connection,$appointmentSql);

 ?>