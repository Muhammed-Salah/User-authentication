<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $eid=$_POST['editedid'];
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
        $row1=$row['id'];
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
        <input type="radio" id="mail" name="gender" value="male">
 	    <label for="male">Male</label><br>
	    <input type="radio" id="female" name="gender" value="female">
	    <label for="female">Female</label><br>
	    <input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<br> </td><td>
    <input type='text' name='phno' size='9'></td></tr>
    </form>
    <form>
    <a href="edit.php?eidd=<?php echo $row1; ?>"><input type="button" value="Insert"></a>
    </form> 
</p>
</body>
</html>

