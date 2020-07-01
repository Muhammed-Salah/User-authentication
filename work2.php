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
     	   		echo "Success";
        		header("Location: Profile.php");
    		} 
    		else 
    		{
       			echo "Failed";
        		header("Location: login.php");
    		}
    	}
    	else
    	{
    		echo "Mail ID does not exist";
    	}
	}
?>