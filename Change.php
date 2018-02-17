<?php
session_start();
if(isset($_SESSION['username']))
{
	echo"session start";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password | Admin Login | Vishwas lodhi</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>	
	<h1 class="p1">Change Password</h1><div class="divider"> </div>
     <table class="p0">
		<form  action="Change.php" method="post">
			<tr>
				<td class="p2"><b><i>Current Password -></i></b></td>
				<td><input type="text" name="Password" placeholder="Enter Current Password" required="required"/></td>
			</tr>
			<tr>
				<td class="p3"><b><i>New Password -></i></b></td>
				<td><input type="text" name="nPassword" placeholder="Enter New Password" required="required"/></td>
			</tr>
			<tr>
				<td class="p4"><b><i>Re-Enter New Password -></i></b></td>
				<td><input type="text" name="rPassword" placeholder="Re-Enter New Password" required="required"/></td>
			</tr>
			<td style="background-color: skyblue; color: black;display: inline-block; margin: 5% 0% 0% 75%;"><input type="submit" name="submit" value="submit"/></td>
			
		</form>
	</table>

</body>
</html>
<?php 
include('dbcon.php');
	if(isset($_POST['submit'])) 
	{
		include('dbcon.php');
		$Password = $_POST['Password'];
		$nPassword = $_POST['nPassword'];
		$rPassword = $_POST['rPassword'];
		$qry ="SELECT * FROM `admin` WHERE `password`=''";
	}
?>