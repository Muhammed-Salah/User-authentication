<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$pswd=$_POST['password'];
	$phno=$_POST['phno'];

	$conn=mysqli_connect('localhost','root','','my');
	if (!$conn) 
	{
		echo "not connected";
	}
	else
	{
		$sql="INSERT INTO `user` (`fname`, `lname`, `gender`, `email`, `password`, `phno`) VALUES ('$fname', '$lname', '$gender', '$email', '$pswd', '$phno');";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo "<script>alert('Successfull Now Log in')</script>";
			echo "<script>window.history.go(-1)</script>";
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			echo "<script>window.history.go(-1)</script>";
		}
	}
?>