<?php 

include '../../config/db_config/connection.php';


if(isset($_GET['id']))
{
	$deleteSql = "DELETE FROM `appointment` WHERE `id`='".$_GET['id']."'";
	$run = mysqli_query($connection,$deleteSql);
	// header('location:../policy.php');
	echo "Data has been Deleted !";
}









 ?>