	<?php
	session_start();
	$id=$_SESSION['userid'];
	$frndlistid=$_POST['friendid'];
	$con=mysqli_connect("localhost","root","","db1");
	$qry="update tbl_frnd set vchr_approval='1' where pk_int_frnd_id=$frndlistid";
	mysqli_query($con,$qry);
	header("location:myfriendlist.php");

	?>