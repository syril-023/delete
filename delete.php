<?php
include 'config.php';
$id = $_GET['del'];
$sql="delete from profile_details where user_id=$id";
$result= mysqli_query($conn,$sql);
if($result){
    header('location:list.php');
}
else{
    echo "<script>alert('File not deleted');</script>";
}
?>