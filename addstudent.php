<?php
session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else
		{
			header('location: ../login.php');
		}
?>
<?php

	include('header.php');
	include('titlehead.php');

?>
<form method ="post" action="addstudent.php" enctype="multipart/form-data">
	<table align ="center" border ="1" style="width:70%; margin-top:40px;">
		
		<tr>
			<th>Roll Number</th>
				<td><input type ="text" name ="RollNumber" placeholder="Enter RollNumber" required  /></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type ="text" name="Name" placeholder="Enter Full Name" required /></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type ="text" name="City" placeholder="Enter City" required /></td>
		
		</tr>
		<tr>
			<th>Perents Contacts</th>
			<td><input type ="text" name="Perents_Contact" placeholder="Enter Perents_Contact" required /></td>
		
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type ="text" name="Standard" placeholder="Enter Standard" required /></td>
		
		</tr>
		<tr>
			<th>Image</th>
			<td colspan ="2"><input type ="file" name="simg" required = "required" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"/></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php

	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$rolno=$_POST['RollNumber'];
		$name=$_POST['Name'];
		$city=$_POST['City'];
		$pcon=$_POST['Perents_Contact'];
		$std=$_POST['Standard'];
		$imagename = $_FILES['simg']['name'];
		$tempname =$_FILES['simg']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");
		$qry ="INSERT INTO `student`(`RollNumber`, `Name`, `City`, `Perents_Contact`, `Standard`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
		//echo $qry;
		$run = mysqli_query($con,$qry);
		if($run == true)
		{
			
			?>
			<script>
			alert('Data Inserted Successfully.');
			</script>
			<?php
		}
	
	}
?>