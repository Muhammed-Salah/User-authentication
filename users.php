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
			include_once('database.php');
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
                    ?>

                                <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['fname']  ?></td>
                                <td><?php echo $row['lname'] ?></td>
                                <td><?php echo $row['gender'] ?></td>
                                <td><?php echo $row['phno'] ?></td>
                                <td><a href=edit.php?id="$row['id']"&fname=".$row['fname']."&lname=". $row['lname']."&gender=". $row['gender']."&phno=". $row['phno'].">Edit</a></td><td>
                                 <a href=delete.php?id=".$row['id'].">"."Delete</a>". "</td><td>"
                                </td>
                                </tr>

                        <?php
                }
            }
		?>
    </p>
</body>
</html>