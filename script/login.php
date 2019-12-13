<?php 



include '../config/db_config/connection.php';

session_start();

if(!isset($_SESSION['login'])):
	header('../index.php');
endif;


if(isset($_POST['submit'])):
	if($_POST['username'] != '' && $_POST['password'] != ''):
		$username = $_POST['username'];
		$password = $_POST['password'];
		$loginSql = "SELECT * FROM `admin` WHERE `username`='".$username."' AND `password`='".md5($password)."'";
		$loginCheck = mysqli_query($connection,$loginSql);
		if(mysqli_num_rows($loginCheck)):
			$_SESSION['login'] = mysqli_fetch_assoc($loginCheck);
			header('location:../dashboard/dashboard.php');
		else:
			$_SESSION['loginError'] = "Wrong Information";
			header('location:../index.php');
		endif;
	else:
		$info = "Empty Field is not valid !";
		header('location:../index.php');
	endif;
endif;











 ?>