<?php
include("header.php");
$id=$_SESSION['userid'];
$con=mysqli_connect("localhost","root","","db1");
$selqry="select * from tbl_signup join tbl_frnd on fk_int_user1_id=int_pk_id AND vchr_approval='0' AND fk_int_user2_id=$id";
$result=mysqli_query($con,$selqry);
while($fetch=mysqli_fetch_row($result)){
	$id_1=$fetch[0];
	$fname=$fetch[1];
	$lname=$fetch[2];
	$email=$fetch[3];
	$gender=$fetch[7];
	$pic=$fetch[8];	
	$friendid=$fetch[9];
	if($pic==''){
		$pic="img1.png";
	}
?>
<form name="confirm" action="confirm.php" method="POST">
<table align="center">
<tr><td><input type="hidden" name="friendid" value="<?php echo $friendid; ?>" ></td></tr>
<tr><td rowspan="3"><img style="height: 100px; width: 100px"src="images/profile_pic/<?php echo $pic;?>"></td>
<td><?php echo $fname.$lname;?></td></tr>
<tr><td><?php echo $email;?></td></tr>
<tr><td><?php echo $gender;?></td></tr>
<tr><td><input type="submit" name="submit" value="Confirm"></input></td></tr>	
</form>
<?php 
echo "</table>";
}
include("footer.php");
?>