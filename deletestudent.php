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
<table align ="center">
<form action="deletestudent.php" method="post">
	<tr>
		<th>Enter Standard</th>
			<td><input type="number" name="Standard" placeholder="Enter Standard" required="required"/></td>
	<th> Enter Student Name </th>
			<td><input type="text" name = "studentname" placeholder="Enter Student Name" required="required">
			<td colspan ="2"><input type="submit" name="submit" value="search"/></td>
	</tr>
		
</form>
</table>
<table align="center" width="80%" border="1" style="margin-top:10px">
	<tr style="background-color:#000; color:#fff;">
		<th>Number</th>
		<th>image</th>
		<th>Name</th>
		<th>RollNumber</th>
		<th>Edit</th>
		
	</tr>
	<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$Standard = $_POST['Standard'];
		$Name = $_POST['studentname'];
		$sql="SELECT * FROM `student` WHERE `Standard`='$Standard' AND `Name` LIKE '%$Name%'";
		$run = mysqli_query($con,$sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "No Record Found";
		}
	}


?>
<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$Standard = $_POST['Standard'];
		$Name = $_POST['studentname'];
		$sql="SELECT * FROM `student` WHERE `Standard`='$Standard' AND `Name` LIKE '%$Name%'";
		$run = mysqli_query($con,$sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan ='5'> No Record Found</td></tr>";
		}
		else
		{
			$count=0;
			while($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr align = "center">
					<td><?php echo $count; ?></td>
					<td><img src ="../dataimg/<?php echo $data ['image']; ?>" style="max-width:100px;"/></td>
					<td><?php echo $data['Name'];?></td>
					<td><?php echo $data['RollNumber'];?></td>
					<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
					
				</tr>
				<?php
			}
			
		}
	}


?>
</table>