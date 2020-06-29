<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $eid=$_POST['editedid'];
    $_SESSION['eid']=$eid;
    $conn=mysqli_connect('localhost','root','','my');
    if (!$conn) 
    {
        echo "not connected";
    }
    else
    {
		$sql="SELECT *  FROM `user` Where id= '$eid'";
		$result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        echo "<table>";
        echo "<tr><td>" . "ID" . "</td><td>" 
                        . "First Name" . "</td><td>" 
                        . "Last Name" . "</td><td>" 
                        . "Gender" . "</td><td>" 
                        . "Phone no." . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . $row['id'] . "</td><td>"
                        . $row['fname'] . "</td><td>"
                        . $row['lname'] . "</td><td>" 
                        . $row['gender'] . "</td><td>" 
                        . $row['phno'] . "</td></tr>"; 
    }
?>
<p><form name='editedform' action='edit.php' method='POST'>
    <tr><td>
    </td><td>                  
    <input type='text' name='fname'></td><td>
    <input type='text' name='lname'></td><td>
    <input type='text' name='gender'size='3'> </td><td>
    <input type='text' name='phno' size='9'></td></tr>
    <input type='submit'>
</p>
</body>
</html>

