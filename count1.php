
<?php
include './dbconnect.php';
$id = $_GET['pollid'];
$sql = "SELECT * FROM `polls` WHERE `polls`.`poll id` = '$id'"; 
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_assoc($result);
$username = $row['user_name']
$count = $row['poll_count_1'];
$count = $count + 1; 
// echo $count; 
$sql1 = "UPDATE `polls` SET `poll_count_1` = '$count' WHERE `polls`.`poll id` = '$id';";
$result = mysqli_query($conn, $sql1);
if($result){
    // echo 'queary updated succesfully';
    header("location:poll_link.php?un=".$username);
}
else{ 
    echo 'query didnt update';
}
?>