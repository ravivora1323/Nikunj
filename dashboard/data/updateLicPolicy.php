<?php 
include '../../config/db_config/connection.php';


if(isset($_POST['submit'])):
	$id = $_POST['id'];
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

	$policyUpdateSql = "UPDATE `lic_policy` SET `sr_no`='".$sr_no."',`mobile`='".$mobile."',`policy_no`='".$policyNo."',`doc`='".$doc."',`mode`='".$mode."',`plan_no`='".$plan_no."',`premium`='".$premium."',`sum_assured`='".$sum_assured."',`term`='".$term."',`ppt`='".$ppt."',`next_prem`='".$next_prem."',`ag_code`='".$ag_code."' WHERE `id`='".$id."'";

	$runPolicy = mysqli_query($connection,$policyUpdateSql);

	if($runPolicy == true):
		header('location:../lic_policy.php');
	endif;

else:
	echo "something wrong!";
	exit();
endif;

 ?>