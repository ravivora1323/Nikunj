<?php
session_start();
unset($_SESSION['exel_error']);
include '../../config/db_config/connection.php';
$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("../../Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  // $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    // $output .= "<tr>";
    $sr_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $mobile = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $policyNo = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $doc = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $mode = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $plan_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $premium = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $sum_assured = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $term = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $ppt = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $next_prem = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $ag_code = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(12, $row)->getValue());

    if ($sr_no == '') {
      $output = "ON LINE NO : ". $row ."| Sr No is Empty |";
      break;
    } else if ($mobile == '') {
      $output = "ON LINE NO : ". $row ."| Mobil No is Empty |";
      break;
    } else if ($policyNo == '') {
      $output = "ON LINE NO : ". $row ."| Policy No is Empty |";
      break;
    } else if ($doc == '') {
      $output = "ON LINE NO : ". $row ."| DOC is Empty |";
      break;
    } else if ($mode == '') {
      $output = "ON LINE NO : ". $row ."| Mode is Empty |";
      break;
    } else if ($plan_no == '') {
      $output = "ON LINE NO : ". $row ."| Plan No is Empty |";
      break;
    } else if ($premium == '') {
      $output = "ON LINE NO : ". $row ."| Premium is Empty |";
      break;
    } else if ($sum_assured == '') {
      $output = "ON LINE NO : ". $row ."| Sum Assured is Empty |";
      break;
    }else if ($term == '') {
      $output = "ON LINE NO : ". $row ."| Term is Empty |";
      break;
    }else if ($ppt == '') {
      $output = "ON LINE NO : ". $row ."| ppt is Empty |";
      break;
    }else if ($next_prem == '') {
      $output = "ON LINE NO : ". $row ."| Next Premium is Empty |";
      break;
    }else if ($ag_code == '') {
      $output = "ON LINE NO : ". $row ."| AG Code is Empty |";
      break;
    }

   }
  }
  if($output != ''){

    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {

    $sr_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $mobile = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $policyNo = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $doc = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $mode = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $plan_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $premium = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $sum_assured = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $term = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $ppt = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $next_prem = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $ag_code = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(12, $row)->getValue());



    if ($policy_no == '') {
      $output = "ON LINE NO : ". $row ."| Policy No is Empty |";
      break;
    }
    $query = "INSERT INTO `lic_policy`(`sr_no`, `mobile`, `policy_no`, `doc`, `mode`, `plan_no`, `premium`, `sum_assured`, `term`, `ppt`, `next_prem`, `ag_code`) VALUES ('".$sr_no."','".$mobile."','".$policyno."','".$doc."','".$mode."','".$plan_no."','".$premium."','".$sum_assured."','".$term."','".$ppt."','".$next_prem."','".$ag_code."')";
    $run = mysqli_query($connection, $query);
    // echo $row . $policy_no . $start_date . $end_date . $name_of_insured . $mobile_no . $premium . $OICL_department . $OICL_office . "<br>";
    if ($run == true) {
      header('location:../lic_policy.php');
    }else{
      header('location:../addLicData.php');
    }
   }
  }
} else{
  header('location:../lic_policy.php');
}
  // $output .= '</table>';

 }
 else
 {
  $_SESSION['exel_error'] = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>