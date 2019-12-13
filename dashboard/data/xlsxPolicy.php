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
    $policy_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $start_date = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $end_date = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $name_of_insured = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $mobile_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $premium = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $OICL_department = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $OICL_office = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(7, $row)->getValue());

    if ($policy_no == '') {
      $output = "ON LINE NO : ". $row ."| Policy No is Empty |";
      break;
    } else if ($start_date == '') {
      $output = "ON LINE NO : ". $row ."| Start Date is Empty |";
      break;
    } else if ($end_date == '') {
      $output = "ON LINE NO : ". $row ."| End Date is Empty |";
      break;
    } else if ($name_of_insured == '') {
      $output = "ON LINE NO : ". $row ."| Name Of Insured is Empty |";
      break;
    } else if ($mobile_no == '') {
      $output = "ON LINE NO : ". $row ."| Mobile_no is Empty |";
      break;
    } else if ($premium == '') {
      $output = "ON LINE NO : ". $row ."| Premium is Empty |";
      break;
    } else if ($OICL_department == '') {
      $output = "ON LINE NO : ". $row ."| OICL Department is Empty |";
      break;
    } else if ($OICL_office == '') {
      $output = "ON LINE NO : ". $row ."| OICL Office is Empty |";
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

    $policy_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $start_date = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $end_date = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $name_of_insured = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $mobile_no = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $premium = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $OICL_department = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $OICL_office = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    
    if ($policy_no == '') {
      $output = "ON LINE NO : ". $row ."| Policy No is Empty |";
      break;
    }
    $query = "INSERT INTO policy(policy_no, start_date,end_date,name_of_insured,mobile_no,premium,OICL_department,OICL_office) VALUES ('".$policy_no."', '".$start_date."','".$end_date."','".$name_of_insured."','".$mobile_no."','".$premium."','".$OICL_department."','".$OICL_office."')";
    $run = mysqli_query($connection, $query);
    // echo $row . $policy_no . $start_date . $end_date . $name_of_insured . $mobile_no . $premium . $OICL_department . $OICL_office . "<br>";
    if ($run == true) {
      header('location:../policy.php');
    }else{
      header('location:../addData.php');
    }
   }
  }
} else{
  header('location:../policy.php');
}
  // $output .= '</table>';

 }
 else
 {
  $_SESSION['exel_error'] = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>