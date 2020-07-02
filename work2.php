<?php
	session_start();
	
	$email=$_POST['email'];
	$pswd=$_POST['password'];

	include_once('database.php');
	if (!$conn) 
	{
		echo "not connected";
	}
	else
	{
		$pswd=md5($pswd);
		$sql="SELECT email, password  FROM `user` Where email= '$email'";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		if($row!=NULL)	
		{	
			if ($email == $row['email'] And $pswd == $row['password']) 
			{
				$_SESSION["email"]=$email;
				echo "<script>alert('Welcome')</script>";
        		header("Location: Profile.php");
    		} 
    		else 
    		{
				$_SESSION['error2']='wrongpassword';
        		header("Location: login.php");
    		}
    	}
    	else
    	{
			$_SESSION['error1']='wrongmailid';
			header("Location: login.php");
    	}
	}
?>