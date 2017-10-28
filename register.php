<?php
	include ('connection.php');
	
	$username=$_POST["uname"];
	$email=$_POST["uemail"];
    $password=$_POST["passwd"];
	
	$count = 0;
	$result = mysqli_query($conn,"select count(*) as count from register where uname = '$username' and uemail = '$email' ");
	if( $count == 0 )
	{
		$text=mysqli_query($conn,"insert into `register` values ('$username','$email','$password')");	
		if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
		else
		{
			echo "<script>alert('Your Registration is complete')</script>";
			header('location: index.html?uname='.$username.'') ;
			
		}
	
	}
	else
	{
		echo "<script>alert('You are already a member')</script>";	
	}
	
	
?>