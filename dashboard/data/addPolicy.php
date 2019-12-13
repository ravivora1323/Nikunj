<?php 
include '../../config/db_config/connection.php';


if(isset($_POST['submit'])):
	$policyNo = $_POST['policyno'];
	$startDate = $_POST['startdate'];
	$endDate = $_POST['enddate'];
	$mode = $_POST['mode'];
	$nameOfInsured = $_POST['nameofinsured'];
	$mobile = $_POST['mobile'];
	$vehicle_no = $_POST['vehical'];
	$premium = $_POST['premium'];
	$oiclDepartment = $_POST['OICL_department'];
	if(isset($_POST['OICL_Category'])){
	    $oiclCategory = $_POST['OICL_Category'];
	}
	$oiclOffice = $_POST['OICL_office'];

	$policyInsertSql = "INSERT INTO `policy`(`policy_no`, `start_date`, `end_date`, `name_of_insured`, `mobile_no`, `premium`,`premium_range`, `OICL_department`,`OICL_Category`,`vehicle_no`, `OICL_office`) VALUES ('".$policyNo."','".$startDate."','".$endDate."','".$nameOfInsured."','".$mobile."','".$premium."','".$mode."','".$oiclDepartment."','".$oiclCategory."','".$vehicle_no."','".$oiclOffice."')";

	$runPolicy = mysqli_query($connection,$policyInsertSql);

	if($runPolicy == true):
		header('location:../addPolicy.php');
	endif;

else:
	echo "something wrong!";
	exit();
endif;

 ?>