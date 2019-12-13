<?php 
include('../../connection.php');

// session_start();

unset($_SESSION['wrong']);
$checkPassSql = "SELECT * FROM `admin` WHERE `password`='".md5($_POST['oldpass'])."'";

$runCheck = mysqli_query($conn,$checkPassSql);

if(mysqli_num_rows($runCheck) > 0):
    $updatePassSql = "UPDATE `admin` SET `password`='".md5($_POST['newpass'])."' WHERE `id`='1'";
    $run = mysqli_query($conn,$updatePassSql);
    if($run == true):
        header('location:../dashboard.php');
    else:
        header('location:../changePass.php');
    endif;
else:
    $_SESSION['wrong']= "Old Password Wrong";
    header('location:../changePass.php');
endif;








?>