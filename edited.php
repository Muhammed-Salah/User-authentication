<?php
    $eid=$_POST('editedid');

    $conn=mysqli_connect('localhost','root','','my');
    if (!$conn) 
    {
        echo "not connected";
    }
    else
    {
        $num=$_SESSION['email'];
		$sql="SELECT *  FROM `user` Where id= '$eid'";
		$result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        $fname=$row['fname'];
        $lname=$row['lname'];
        $gender=$row['gender'];
        $phno=$row['phno'];
		echo "<tr><td>" . "<form name='editedform' action='edited.php'>" 
                        .    $row['id'] . "</td><td>"
                        . "<input type='text' name='fname' value='$fname'>" . "</td><td>"
                        . "<input type='text' name='lname' value='$lname'>" . "</td><td>" 
                        . "<input type='text' name='gender' value='$gender' size='3'>" . "</td><td>" 
                        . "<input type='text' name='phno' value='$phno' size='9'>" . "</td><td>"
                        . "<input type='submit' name='edit'>" . "</td></tr>";
        // while($ename = mysqli_fetch_array($editedname))
        // {
        //         $sql2="UPDATE `user` SET `gender` = 'female' WHERE `user`.`id` = '$editedid';";
        //         $result2=mysqli_query($conn,$sql1);
        // }
    }
?>