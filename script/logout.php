<?php 

session_start();

if(isset($_SESSION['login'])):
	session_destroy();
endif;

header('location:../index.php');



 ?>