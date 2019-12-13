<?php 
include '../../config/db_config/connection.php';


if(isset($_POST['submit'])):
	$family_name = $_POST['family_name'];
	$birth_place = $_POST['birth_place'];
	$occupation = $_POST['occupation'];
	$approx_income = $_POST['approx_income'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$corres_addr = $_POST['corres_addr'];
	$qualification = $_POST['qualification'];
	$posted_as = $_POST['posted_as'];
	if(isset($_POST['yod'])){
	    $yod = $_POST['yod'];
	}
	$perminate_addr = $_POST['perminate_addr'];

	$policyInsertSql = "INSERT INTO `celebrate`(`family_name`, `birth_place`, `occupation`, `Approx_income`, `dob`, `qualification`, `posted_as`, `corres_addr`, `perminate_addr`, `age`, `yod`) VALUES ('".$family_name."','".$birth_place."','".$occupation."','".$approx_income."','".$dob."','".$qualification."','".$posted_as."','".$corres_addr."','".$perminate_addr."','".$age."','".$yod."')";

	$runPolicy = mysqli_query($connection,$policyInsertSql);

	if($runPolicy == true):
		header('location:../addCelebrate.php');
	endif;

else:
	echo "something wrong!";
	exit();
endif;

 ?>