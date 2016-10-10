<?php
session_start();
if(isset($_POST['clk_btn']))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email1'];
	$pwd=$_POST['pwd1'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	}
$con=mysqli_connect("localhost","root","","db1");
$qry="insert into tbl_signup values(null,'$fname','$lname','$email','$pwd','$phone','$dob','$gender','')";
mysqli_query($con,$qry);
$id=mysqli_insert_id($con);
$_SESSION['userid']=$id;

header("location:home.php");
?>