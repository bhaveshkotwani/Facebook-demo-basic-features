<?php
include("header.php");
$id=$_SESSION['userid'];
$con=mysqli_connect("localhost","root","","db1");
$qry="select * from tbl_signup where int_pk_id=$id";
$result=mysqli_query($con,$qry);
while($fetch=mysqli_fetch_row($result))
{
	$fname=$fetch[1];
	$lname=$fetch[2];
	$email=$fetch[3];
	$phone=$fetch[5];
	$dob=$fetch[6];
	$gender=$fetch[7];
?>
<table border="0" align="center">
<tr><td colspan="2" align="right"><a href="editprofile.php" style="text-decoration: none;">Edit</a></td></tr>
<tr><td>FirstName:</td><td><?php echo $fname;?></td></tr>
<tr><td>LastName:</td><td><?php echo $lname;?></td></tr>
<tr><td>Email:</td><td><?php echo $email;?></td></tr>
<tr><td>Phone:</td><td><?php echo $phone;?></td></tr>
<tr><td>Date Of Birth:</td><td><?php echo $dob;?></td></tr>	
<tr><td>Gender:</td><td><?php echo $gender;?></td></tr>
<?php
echo "</table>";
include("footer.php");
}
?>