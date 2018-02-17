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
	include('../dbcon.php');
	$sid = $_GET['sid'];
	$sql="SELECT * FROM `student` WHERE `id`='$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);

?>
<form method ="post" action="updatedata.php" enctype="multipart/form-data">
	<table align ="center" border ="1" style="width:70%; margin-top:40px;">
		
		<tr>
			<th>Roll Number</th>
				<td><input type ="text" name ="RollNumber" value =<?php echo $data['RollNumber'];?> required  /></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type ="text" name="Name"  value =<?php echo $data['Name'];?>  required /></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type ="text" name="City"  value =<?php echo $data['City'];?>  required /></td>
		
		</tr>
		<tr>
			<th>Perents Contacts</th>
			<td><input type ="text" name="Perents_Contact"  value =<?php echo $data['Perents_Contact'];?>  required /></td>
		
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type ="text" name="Standard"  value =<?php echo $data['Standard'];?>  required /></td>
		
		</tr>
		<tr>
			<th>Image</th>
			<td colspan ="2"><input type ="file" name="simg" required = "required" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type ="hidden" name ="sid" value = "<?php echo $data['id']; ?>"/>
			<input type="submit" name="submit" value="submit"/></td>
		</tr>
	</table>
</form>
</body>
</html>