<?php
include './dbconnect.php';

$org_name = $_GET['org_name'];
$pno = $_GET['p_no'];
$table_name = $org_name.' Candidates';
// echo $org_name;
// echo $pno;
$p_name = array();
$email = array();
$_abt = array();
$sql1 = "CREATE TABLE `one vote`.`$table_name` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `p_name` VARCHAR(50) NOT NULL ,  `p_email` VARCHAR(50) NOT NULL ,  `p_about` TEXT NOT NULL , `Vote_no` INT(11) NOT NULL , PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
$result = mysqli_query($conn, $sql1);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
   for($i=0; $i < $pno; $i++){
       $p_name[$i] = $_POST['p_name_'.$i]; 
       $email[$i] = $_POST['p_email_'.$i];
       $_abt[$i] = $_POST['p_about_'.$i];

      // for files upload. 
      $file = $_FILES['file-'.$i];
      $fileName = $_FILES['file-'.$i]['name'];
      print_r($fileName);
      $filetmpname = $_FILES['file-'.$i]['tmp_name'];
      $fileType = $_FILES['file-'.$i]['type'];
      $fileError = $_FILES['file-'.$i]['error'];
      $fileSize = $_FILES['file-'.$i]['size'];
      
      $fileExt = explode('.', $fileName);        //This will give the extension by seperating the filename by the "."
      $fileActuallExt = strtolower(end($fileExt)); // end function will give me the last element of the array. 
  
      $allowed = array('jpg', 'jpeg' , 'png');
      if(in_array($fileActuallExt, $allowed)){
          if($fileError == 0){
                  if($fileSize < 500000){
                      $filenewName = $p_name[$i].".".$fileActuallExt;  // this will give me a uniq id as a timestap in miliseconds. 
                      $filedestination = 'candidates_photos/'.$filenewName; 
  
                      move_uploaded_file($filetmpname, $filedestination);  // This function will actually upload the file in the folder. 
                  }else{
                      echo 'File size too big!';
                  }
          }else{
              echo 'There was an error uploading the file';
          }
      }else{
          echo 'This extension is not valid';
      }
   }
   for($i = 0; $i<=$pno; $i++){
    //    $name =  $p_name[$i];
    //    $email =  $email[$i];
    //    $abt = $_abt[$i];
       $sql2 = "INSERT INTO `$table_name` (`p_name`, `p_email`, `p_about`,`vote_no`) VALUES ('$p_name[$i]', '$email[$i]','$_abt[$i]', 0)";
       $result = mysqli_query($conn, $sql2);
       if($result){ 
           header('location: ./main2.php');
        }
       else{
           echo 'fail';
        }
       
   }
}

?>