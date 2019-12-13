<?php 
include '../../config/db_config/connection.php';
if(isset($_POST['import'])) {
	$id = isset($_GET['id']) ? $_GET['clinet_id'] : $_POST['clinet_id'];
  	$image_error = [];
    // Configure upload directory and allowed file types 
    $upload_dir = '../../images/lic_policy/'.DIRECTORY_SEPARATOR;
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
      
    // Define maxsize for files i.e 2MB 
    $maxsize = 2 * 1024 * 1024;  
  
    // Checks if user sent an empty form  
    if(!empty(array_filter($_FILES['document']['name']))) { 
  
        // Loop through each file in files[] array 
        foreach ($_FILES['document']['tmp_name'] as $key => $value) { 
              
            $file_tmpname = $_FILES['document']['tmp_name'][$key]; 
            $file_name = $_FILES['document']['name'][$key]; 
            $file_size = $_FILES['document']['size'][$key]; 
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
            // Set upload file path 
            $filepath = $upload_dir.$file_name; 
  
            // Check file type is allowed or not 
            if(in_array(strtolower($file_ext), $allowed_types)) { 

                if ($file_size > $maxsize)   
                	$image_error['file_size'] = 'File size is larger than the allowed limit.';
                	$errorData = serialize($image_error);    
                	header("location:../uploadDocument.php?error=$errorData");  
                     
                    $filepath = $upload_dir.time().$file_name; 
                      
                    if( move_uploaded_file($file_tmpname, $filepath)) { 

                    	$fileName = time().$file_name;

                    	$imageSql = "INSERT INTO `lic_document`(`file_name`, `file_size`, `client_id`) VALUES ('".$fileName."','".$file_size."','".$id."')";
                    	mysqli_query($connection,$imageSql);


                    	$image_error['success'] .= "File {$file_name} successfully uploaded. <br>";
                    	$errorData = serialize($image_error);
                    	header("location:../uploadDocument.php?error=$errorData&id=$id");
                    }  
                    else {  
                    	$image_error['upload'] = "Error uploading {$file_name} <br>";  
                    	$errorData = serialize($image_error);  
                    	header("location:../uploadDocument.php?error=$errorData&id=$id");
                    } 
            } 
            else { 
                 $image_error['type'] =  "({$file_ext} file type is not allowed)<br / >";
                 $errorData = serialize($image_error);
                 header("location:../uploadDocument.php?error=$errorData&id=$id");
            }  
        } 
    }  
    else { 
          $image_error['select'] = "No files selected.";
          $errorData = serialize($image_error);
          header("location:../uploadDocument.php?error=$errorData");
    } 
}  









 ?>