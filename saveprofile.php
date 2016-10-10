<?php
session_start();
$id=$_SESSION['userid'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$phone=$_POST['phone'];
$bday=$_POST['dob'];
$gender=$_POST['gender'];
$profile_pic=$_POST['profilepic'];

$filename=$profile_pic;
if(is_uploaded_file($_FILES['pic']['tmp_name']))
{
	$currentposition=$_FILES['pic']['tmp_name'];
	$filename=rand().$_FILES['pic']['name'];
	$destination="images/profile_pic/".$filename;
	move_uploaded_file($currentposition, $destination);	
}
$con=mysqli_connect("localhost","root","","db1");
$qry="update tbl_signup set vchr_f_name='$fname',vchr_l_name='$lname',vchr_email='$email',vchr_pwd='$password',vchr_phone='$phone',vchr_dob='$bday',vchr_gender='$gender',vchr_profile_pic='$filename' where int_pk_id=$id";
mysqli_query($con,$qry);
header("location:myprofile.php");