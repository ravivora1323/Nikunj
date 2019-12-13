<?php 

include '../config/db_config/connection.php';


$policySql = "SELECT * FROM `lic_policy`";

$policyData = mysqli_query($connection,$policySql);

 ?>