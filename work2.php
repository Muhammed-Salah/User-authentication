
<?php
	session_start();
	
	$email=$_POST['email'];
	$pswd=$_POST['password'];

	$conn=mysqli_connect('localhost','root','','my');
	if (!$conn) 
	{
		echo "not connected";
	}
	else
	{
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
        		header("Location: login.html");
    		}
    	}
    	else
    	{
    		echo "Mail ID does not exist";
    	}
	}
?>