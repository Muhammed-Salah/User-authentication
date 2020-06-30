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
                echo "<table>";
                echo "<tr><td>" . "ID" . "</td><td>" . "First Name" . "</td><td>" . "Last Name" . "</td><td>" . "Gender" . "</td><td>" . "Phone no." . "</td></tr>";
                while($row = mysqli_fetch_array($result))
                {
                        
                        echo "<tr><td>" . $row['id'] . "</td><td>"
                                        . $row['fname'] . "</td><td>"
                                        . $row['lname'] . "</td><td>" 
                                        . $row['gender'] . "</td><td>" 
                                        . $row['phno'] . "</td><td>" 
                                        . "<a href=edit.php?id=".$row['id']."&fname=".$row['fname']."&lname=". $row['lname']."&gender=". $row['gender']."&phno=". $row['phno'].">"."Edit</a>". "</td><td>"
                                        . "<a href=delete.php?id=".$row['id'].">"."Delete</a>". "</td><td>"
                                        ."</td></tr>"; 
                }
            }
		?>
    </p>
</body>
</html>