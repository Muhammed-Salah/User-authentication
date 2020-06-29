<?php
		session_start();
?>

<html>
<head>
	<title>my account</title>
</head>
<body>
	<p>Welcome
		<br>
		<?php
			$conn=mysqli_connect('localhost','root','','my');
			if (!$conn) 
			{
				echo "not connected";
			}
			else
			{
				$num=$_SESSION['email'];
				$sql="SELECT *  FROM `user` Where email= '$num'";
				$result=mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				echo "User name=".$row['fname']." ";
				echo $row['lname']."<br>";
				echo "Gender=".$row['gender']."<br>";
				echo "Phone no=".$row['phno']."<br>";
			}
		?>
	</p>
</body>
</html>