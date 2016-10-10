<?php
session_start();
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","db1");
$qry= "select int_pk_id from tbl_signup where  vchr_email='$email' and vchr_pwd='$pwd'";
$result=mysqli_query($con,$qry);
$id=0;
while($fetch=mysqli_fetch_row($result))
{
	$id=$fetch[0];
	
}

if($id>0){
	$_SESSION['userid']=$id;
	header("location:home.php");

}
else{
	header("location:facebook.php?status=failed");
}

?>