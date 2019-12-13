<?php 

include '../config/db_config/connection.php';


$celebrateSql = "SELECT * FROM `celebrate`";

$celebrateData = mysqli_query($connection,$celebrateSql);

 ?>