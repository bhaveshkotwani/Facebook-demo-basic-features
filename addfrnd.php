<?php
session_start();
$frndid=$_POST['friendid'];
$id=$_SESSION['userid'];
$con=mysqli_connect("localhost","root","","db1");
$qry="insert into tbl_frnd values(null,$id,$frndid,'0')";
mysqli_query($con,$qry);
header("location:search.php");

?>