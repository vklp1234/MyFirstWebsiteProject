<?php
	function showdetails($standard,$rollno)
	{
		include('dbcon.php');
		$sql="SELECT * FROM `student` WHERE `Standard`='$standard' AND `RollNumber`='$rollno'";
		$run=mysqli_query($con,$sql);
		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run);
			?>
			<table border="1" style="width:50%; margin-top:20px; " align="center">
					<tr>
						<th colspan ="3" align ="center" style="background-color:#000; color:#fff;">Student Details</th>
					</tr>
					<tr>
							<td rowspan ="5"><img src="dataimg/<?php echo $data ['image'];?>  " style="max-height:150px; max-width:150px; padding-left:100px;" /> </td>
							<th>RollNumber</th>
							<td><?php echo $data['RollNumber']; ?></td>
					</tr>
					<tr>
							<th>Name</th>
							<td><?php echo $data['Name']; ?></td>
					</tr>
					<tr>
							<th>City</th>
							<td><?php echo $data['City']; ?></td>
					</tr>
					<tr>
							<th>Parents Contact no</th>
							<td><?php echo $data['Perents_Contact']; ?></td>
					</tr>
					<tr>
							<th>Standard</th>
							<td><?php echo $data['Standard']; ?></td>
					</tr>
					
					
					
			</table>
			
			<?php
		}
		else
		{
			echo "<script>alert('No Student Found,');</script>";
		}
	}

?>