<?php
		session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
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
				$sql="SELECT *  FROM `user`";
				$result=mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    $row = mysqli_fetch_array($result);
                    echo $row['email']."<br>";
                }
            }
		?>
	</p>
</body>
</html>