<html>
<head>
	<title>my account</title>
</head>
<body>
	<p>Welcome</p>
	<br>
	<?php
		session_start();

		$conn=mysqli_connect('localhost','root','','my');
		if (!$conn) 
		{
			echo "not connected";
		}
		else
		{
			echo $_SESSION['email'];
			// $num=$_SESSION['email'];
			// $sql="SELECT *  FROM `user` Where email= '$num'";
			// $result=mysqli_query($conn,$sql);
			// $row = mysqli_fetch_array($result);
			// echo $row['fname'];
			// echo $row['lname'];
			// echo $row['gender'];
			// echo $row['phno'];
		}
	?>
</body>
</html>