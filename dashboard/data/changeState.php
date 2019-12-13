<?php 
include '../../config/db_config/connection.php';

$id = $_GET['id'];
$pending = $_GET['pending'];

$changeStatusSql = "UPDATE `appointment` SET `pending`='".$pending."' WHERE `id`='".$id."'";
$run = mysqli_query($connection,$changeStatusSql);

print_r(json_encode($run));




 ?>