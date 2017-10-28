<?php
	include('connection.php');
	
	$uname=$_POST["lun"];
	$password=$_POST["lpass"];
	$result=mysqli_query($conn,"SELECT * FROM register" );
	while($row=mysqli_fetch_array($result))
	{
		$passwd = $row["passwd"];
        $user = $row["uname"];
		
	}
	if( $password == $passwd )
	{
		session_start();
		$_SESSION['sid']=session_id();
		//echo "<script> alert('Successfully Login')</script>";
		header('location: index.html?uname='.$user.'') ;
	}
	else{
		
        header('location: register.html');
	}
?>
<?php

