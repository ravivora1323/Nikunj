<?php 

require_once '../../vendor/autoload.php';
if (isset($_GET['id'])) {
	include '../../config/db_config/connection.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM `policy` WHERE `id`='".$id."'";
	$exce = mysqli_query($connection,$sql);
}
$userData = mysqli_fetch_assoc($exce);
$mpdf = new \Mpdf\Mpdf();

$OICL_department = "";

if($userData['OICL_department'] == '48'){
    $OICL_department = "Miscellaneous";
}else if($userData['OICL_department'] == '31'){
    $OICL_department = "Motor";
}else if($userData['OICL_department'] == '11'){
    $OICL_department = "Fire";
}else if($userData['OICL_department'] == '47'){
    $OICL_department = "Janta";
}else if($userData['OICL_department'] == '44'){
    $OICL_department = "Marine";
}else if($userData['OICL_department'] == '01'){
    $OICL_department = "Other";
}

$data = '';

$data .= "<h1 align='center'>".$userData['name_of_insured']."</h1>";
$data .= "<h3>Policy No. : ".$userData['policy_no']."</h3>";
$data .= "<h3>Start Date : ".$userData['start_date']."</h3>";
$data .= "<h3>End Date : ".$userData['end_date']."</h3>";
$data .= "<h3>Mobile No. : ".$userData['mobile_no']."</h3>";
$data .= "<h3>Premium : ".$userData['premium']."</h3>";
$data .= "<h3>OICL Department : ".$OICL_department."</h3>";
$data .= "<h3>OICL Office : ".$userData['OICL_office']."</h3>";

$mpdf->WriteHTML($data);

$mpdf->Output('myfile.pdf','D');





 ?>