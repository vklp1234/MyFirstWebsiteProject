<?php
if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$rolno=$_POST['RollNumber'];
		$name=$_POST['Name'];
		$city=$_POST['City'];
		$pcon=$_POST['Perents_Contact'];
		$std=$_POST['Standard'];
		$id=$_POST['sid'];
		$imagename = $_FILES['simg']['name'];
		$tempname =$_FILES['simg']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");
		$qry ="UPDATE `student` SET `RollNumber` = '$rolno', `Name` = '$name', `City` = '$city', `Perents_Contact` = '$pcon', `Standard` = '$std' , `image`='$imagename' WHERE `id` = '$id'";
		$run = mysqli_query($con,$qry);
		if($run == true)
		{
			
			?>
			<script>
			alert('Data Updated Successfully.');
			window.open('updateform.php?sid=<?php echo $id;?>','_self');
			</script>
			<?php
		}
	
	}
?>

