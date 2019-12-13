<?php 


include '../../config/db_config/connection.php';

$entryDate = date('d-M-y');

if (isset($_POST['submit'])) {
	$cust_mobile = $_POST['cust_mobile'];
	$cust_name = $_POST['cust_name'];
	$appointment = $_POST['appointment'];
	$app_fixed_date = $_POST['app_fixed_date'];
	$app_last_date = $_POST['app_last_date'];








$appointmentSql = "INSERT INTO `appointment`(`cust_mobile`,`name`, `appointment`, `app_fixed_date`, `app_reg_date`, `app_last_date`, `pending`) VALUES ('".$cust_mobile."','".$cust_name."','".$appointment."','".$app_fixed_date."','".$entryDate."','".$app_last_date."','yes')";

$run = mysqli_query($connection,$appointmentSql);

header('location:../appointment.php');
}





 ?>