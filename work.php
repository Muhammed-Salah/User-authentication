<?php
	include_once('database.php');
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$pswd=$_POST['password'];
	$phno=$_POST['phno'];


	if (!$conn)
	{
		echo "not connected";
	}
	else
	{
		$pswd=md5($pswd);
		$sql="INSERT INTO `user` (`fname`, `lname`, `gender`, `email`, `password`, `phno`) VALUES ('$fname', '$lname', '$gender', '$email', '$pswd', '$phno');";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo "<script>alert('Successfull Now Log in')</script>";
			header("Location: login.php");
		}
		else
		{
			echo "<script>window.history.go(-1)</script>";
		}
	}
?>