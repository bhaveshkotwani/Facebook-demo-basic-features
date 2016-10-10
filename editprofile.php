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
	$pwd=$fetch[4];
	$phone=$fetch[5];
	$dob=$fetch[6];
	$gender=$fetch[7];
	$picture=$fetch[8];
?>
<table border="0" align="center">
<tr><td colspan="2" align="right"><a href="myprofile.php" style="text-decoration: none;">Back</a></td></tr>
<form name="edit" action="saveprofile.php" method="POST" enctype="multipart/form-data">
<tr><td><input type="hidden" name="profilepic" value="<?php echo $picture; ?>"></td></tr>
<tr><td>First Name:</td><td><input type="text" name="fname" value="<?php echo $fname?>"></input></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lname" value="<?php echo $lname?>"></input></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $email?>"></input></td></tr>
<tr><td>Password:</td><td><input type="text" name="pwd" value="<?php echo $pwd?>"></input></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" value="<?php echo $phone?>"></input></td></tr>
<tr><td>Date Of Birth:</td><td><input type="text" name="dob" value="<?php echo $dob?>"></input></td></tr>
<tr><td>Gender:</td><td><input type="text" name="gender" value="<?php echo $gender?>"></input></td></tr>
<tr><td>Pofile_pic:</td><td><input type="file" name="pic"></input></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Save"></input></td></tr>
<?php
echo "</table>";
include("footer.php");
}
?>