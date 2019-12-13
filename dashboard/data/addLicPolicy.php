<?php 
include '../../config/db_config/connection.php';


if(isset($_POST['submit'])):
	$sr_no = $_POST['sr_no'];
	$mobile = $_POST['mobile'];
	$policyNo = $_POST['policyno'];
	$doc = $_POST['doc'];
	$mode = $_POST['mode'];
	$plan_no = $_POST['plan_no'];
	$premium = $_POST['premium'];
	$sum_assured = $_POST['sum_assured'];
	$term = $_POST['term'];
	$ppt = $_POST['ppt'];
	$next_prem = $_POST['next_prem'];
	$ag_code = $_POST['ag_code'];

	$policyInsertSql = "INSERT INTO `lic_policy`(`sr_no`, `mobile`, `policy_no`, `doc`, `mode`, `plan_no`, `premium`, `sum_assured`, `term`, `ppt`, `next_prem`, `ag_code`) VALUES ('".$sr_no."','".$mobile."','".$policyNo."','".$doc."','".$mode."','".$plan_no."','".$premium."','".$sum_assured."','".$term."','".$ppt."','".$next_prem."','".$ag_code."')";

	$runPolicy = mysqli_query($connection,$policyInsertSql);

	if($runPolicy == true):
		header('location:../addLicPolicy.php');
	endif;

else:
	echo "something wrong!";
	exit();
endif;

 ?>