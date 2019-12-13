<?php 
include '../../config/db_config/connection.php';


if(isset($_POST['submit'])):
	$id = $_POST['id'];
	$policyNo = $_POST['policyno'];
	$startDate = $_POST['startdate'];
	$endDate = $_POST['enddate'];
	$nameOfInsured = $_POST['nameofinsured'];
	$mobile = $_POST['mobile'];
	$premium = $_POST['premium'];
	$oiclDepartment = $_POST['OICL_department'];
	$oiclOffice = $_POST['OICL_office'];

	$policyInsertSql = "UPDATE `policy` SET `policy_no`='".$policyNo."',`start_date`='".$startDate."',`end_date`='".$endDate."',`name_of_insured`='".$nameOfInsured."',`mobile_no`='".$mobile."',`premium`='".$premium."',`OICL_department`='".$oiclDepartment."',`OICL_office`='".$oiclOffice."' WHERE `id`='".$id."'";

	$runPolicy = mysqli_query($connection,$policyInsertSql);

	if($runPolicy == true):
		header('location:../policy.php');
	endif;

else:
	echo "something wrong!";
	exit();
endif;

 ?>