<!DOCTYPE HTML>
<html lang  = "en_US">
<head>
	<meta charset = "UTF-8">
	<title>STUDENT | MANAGMENT | SYSTEM | VISHWAS | LODHI</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<form class="forms" method ="post" action = "index.php">
<h3 class="h3" align="right"><a href = "login.php">Admin Login</a></h3>
<div id="left_header"><marquee direction="left" scrollamount="7" ><h1 class="hold">Welcome to Student Managment System</h1></marquee></div>
<table style ="width:30%;" align ="center" border = "1">
	
	<tr>
		<td colspan ="2" align ="center">Student Information</td>
	</tr>
	<tr>
		<td align ="left">Choose Standard</td>
		<td>
			<select name="Standard" required>
				<option value = "1">1st</option>
				<option value = "2">2nd</option>
				<option value = "3">3rd</option>
				<option value = "4">4th</option>
				<option value = "5">5th</option>
				<option value = "6">6th</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="td1">Enter RollNumber</td>
		<td><input type ="text" name ="rollno" required></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type ="submit" name="submit" value="Show Info"></td>
	</tr>
</table>
</body>
</html>
<?php

		if(isset($_POST['submit']))
		{
			$standard=$_POST['Standard'];
			$rollno=$_POST['rollno'];
			include('dbcon.php');
			include('function.php');
			showdetails($standard,$rollno);
		}

?>