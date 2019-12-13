<?php 

include '../config/db_config/connection.php';


$policySql = "SELECT * FROM `policy`";

if(isset($_GET['data']) && $_GET['data'] == 'today'){
    $todayDate = Date('d-m-Y');
    $todayDataSql = "SELECT * FROM WHERE `end_date`='".$todayDate."'";
    echo json_encode($todayDate);
}

$policyData = mysqli_query($connection,$policySql);

 ?>