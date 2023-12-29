<?php
include('loginandlogout using section part1.php');
$rollno=$_GET['rollno'];
$sql="DELETE FROM `student` WHERE rollno='$rollno'";

$num=mysqli_query($conn,$sql);
if($num!=0){
    echo" <script> alert('record deleted successfully')</script>";
}
else{
    echo"record not deleted";
}








?>