<?php
include '../../config/db_config/connection.php';
include("../../Classes/PHPExcel/IOFactory.php");
$query = "SELECT * FROM policy";  

// Execute the database query
$result = mysqli_query($connection, $query);

// Instantiate a new PHPExcel object
$objPHPExcel = new PHPExcel(); 
// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0); 
// Initialise the Excel row number
$rowCount = 1; 
// Iterate through each result from the SQL query in turn
// We fetch each database result row into $row in turn
while($row = mysqli_fetch_array($result)){ 
    // Set cell An to the "name" column from the database (assuming you have a column called name)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['policy_no']); 
    // Set cell Bn to the "age" column from the database (assuming you have a column called age)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['start_date']);
    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['end_date']);
    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['name_of_insured']);
    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['mobile_no']);
    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['premium']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['premium_range']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['OICL_department']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['OICL_Category']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['vehicle_no']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['OICL_office']);
    // Increment the Excel row counter
    $rowCount++; 
} 

header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="Limesurvey_Results.xls"'); 
header('Cache-Control: max-age=0'); 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save('php://output');
?>