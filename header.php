<?php
session_start();
$id=$_SESSION['userid'];
$con=mysqli_connect("localhost","root","","db1");
$qry="select * from tbl_signup where int_pk_id=$id";
$result=mysqli_query($con,$qry);
while($fetch=mysqli_fetch_row($result))
	{
	$fname=$fetch[1];
	$pic=$fetch[8];
}
if($pic==''){
	$pic="img1.png";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>fbhome</title>
	<style type="text/css">
	</style>
</head>
	<body>
		<table id="tab1" cellspacing="0" style="width: 100%"> 
			<tr bgcolor="#3b5998">
			<td align="right"><img src="fblogo.png" style="padding-left: 40px; padding-top: 5px; padding-bottom: 5px"></td>
			<td><input type="search" name="search" style="height: 25px"></input></td>
			<td align="right"><img src="images/profile_pic/<?php echo $pic?>" width="30" height="30"><font color="white">
			<?php echo $fname;?>
			|</font> <a href="home.php" style="text-decoration:none;"><font color="white">Home</a> | </font>
			<a href="logout.php" style="text-decoration:none;"><font color="white">LogOut</font></a></td>
			</tr>
			<tr> 
			<td bgcolor="#dfe3ee" height="700" width="400"><a href="myprofile.php" style="margin-left: 30px; text-decoration: none;">My Profile</a><br>
			<a href="search.php" style="margin-left: 30px; text-decoration: none;">Search</a><br>
			<a href="myfrnd.php" style="margin-left: 30px; text-decoration: none;">Friend Request</a><br>
			<a href="myfriendlist.php" style="margin-left: 30px; text-decoration: none;">My Friend List</a></td>
			<td>