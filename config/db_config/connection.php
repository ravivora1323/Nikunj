<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$databse = 'ravi_bharat';

$connection = mysqli_connect($hostname,$username,$password,$databse);

if($connection != true):
	print_r(array('2013'=>'Database connection lose !'));
	exit();
endif;



 ?>