<?php 

include '../config/db_config/connection.php';

$currentDate = date('d-m-y');
$nextMonth = date('d-m-y',strtotime('first day of +1 month'));

$policySql = "SELECT * FROM `policy` WHERE `end_date` >= '".$currentDate."' AND `end_date` <= '".$nextMonth."'";
$allPolicySql = "SELECT * FROM `policy`";
$totalPolicy = mysqli_query($connection,$allPolicySql);
$currentMonthEndDate = mysqli_query($connection,$policySql);

$licPolicySql = "SELECT * FROM `lic_policy` WHERE `next_prem` >= '".$currentDate."' AND `next_prem` <= '".$nextMonth."'";
$allLicPolicy = "SELECT * FROM `lic_policy`";
$totalLic = mysqli_query($connection,$allLicPolicy);
$currentMonthPremium = mysqli_query($connection,$licPolicySql);

$appointmentSql = "SELECT * FROM `appointment`";
$pendingLicAppointment = "SELECT * FROM `appointment` WHERE `pending`='yes' AND `appointment`='Lic Premium'";
$pendingPolicyAppointment = "SELECT * FROM `appointment` WHERE `pending`='yes' AND `appointment`='Mediclaim'";
$pendingApp = mysqli_query($connection,$pendingLicAppointment);
$allAppointment = mysqli_query($connection,$appointmentSql);
$policyPending = mysqli_query($connection,$pendingPolicyAppointment);




$Miscellaneous = "SELECT * FROM `policy` WHERE `OICL_department`='48'";
$exceMiscellaneous = mysqli_query($connection,$Miscellaneous);
$allMiscellaneous = mysqli_num_rows($exceMiscellaneous);

$Motor = "SELECT * FROM `policy` WHERE `OICL_department`='31'";
$exceMotor = mysqli_query($connection,$Motor);
$allMotor = mysqli_num_rows($exceMotor);

$Fire = "SELECT * FROM `policy` WHERE `OICL_department`='11'";
$exceFire = mysqli_query($connection,$Fire);
$allFire = mysqli_num_rows($exceFire);

$Janta = "SELECT * FROM `policy` WHERE `OICL_department`='47'";
$exceJanta = mysqli_query($connection,$Janta);
$allJanta = mysqli_num_rows($exceJanta);

$Marine = "SELECT * FROM `policy` WHERE `OICL_department`='44'";
$exceMarine = mysqli_query($connection,$Marine);
$allMarine = mysqli_num_rows($exceMarine);

$Other = "SELECT * FROM `policy` WHERE `OICL_department`='01'";
$exceOther = mysqli_query($connection,$Other);
$allOther = mysqli_num_rows($exceOther);








 ?>