<?php
session_start();
include './dbconnect.php';
$id = $_GET['id'];
$tablename = $_GET['name'];
$sql = "SELECT * FROM `$tablename` WHERE `$tablename`.`sr no` = '$id'"; 
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_assoc($result);
$count = $row['Vote_no'];
$count = $count + 1; 
// echo $count; 
$sql1 = "UPDATE `$tablename` SET `Vote_no` = '$count' WHERE `$tablename`.`sr no` = '$id';";
$result = mysqli_query($conn, $sql1);
if($result){
    $username = $_SESSION['username'];
    $sql1 = "SELECT * FROM `registration` WHERE 'name' = '$username'";
    $result = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_assoc($result);
    $votelist = $row['Voted_in'];
    $updatedlist = $votelist.",".$tablename;
    $sql2 = "UPDATE `registration` SET `Voted_in` = '$updatedlist'";
    $result = mysqli_query($conn, $sql2);
    if($result){
        header("location:elections.php");
    }else{
        echo 'fail';
    }
}
else{ 
    echo 'query didnt update';
}
?>