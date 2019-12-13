<?php 

require_once '../../vendor/autoload.php';
if (isset($_GET['id'])) {
	include '../../config/db_config/connection.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM `lic_policy` WHERE `id`='".$id."'";
	$exce = mysqli_query($connection,$sql);
}
$userData = mysqli_fetch_assoc($exce);
$mpdf = new \Mpdf\Mpdf();



$data = '';

$data .= "<h1 align='center'>SR NO.".$userData['sr_no']."</h1>";
$data .= "<h3>Mobile. : ".$userData['mobile']."</h3>";
$data .= "<h3>Policy No. : ".$userData['policy_no']."</h3>";
$data .= "<h3>Doc : ".$userData['doc']."</h3>";
$data .= "<h3>Mode. : ".$userData['mode']."</h3>";
$data .= "<h3>Plan No, : ".$userData['plan_no']."</h3>";
$data .= "<h3>Premium : ".$userData['premium']."</h3>";
$data .= "<h3>Sum Assured : ".$userData['sum_assured']."</h3>";
$data .= "<h3>Term : ".$userData['term']."</h3>";
$data .= "<h3>PPT : ".$userData['ppt']."</h3>";
$data .= "<h3>PPT : ".$userData['next_prem']."</h3>";
$data .= "<h3>AG Code : ".$userData['ag_code']."</h3>";

$mpdf->WriteHTML($data);

$mpdf->Output('myfile.pdf','D');





 ?>