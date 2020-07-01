<?php
    $editid=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $phno=$_POST['phno'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change</title>
</head>
<body>
    <?php    
        include_once('database.php');
        if (!$conn) 
        {
            echo "not connected";
        }
        else
        {
            $sql2="UPDATE `user` SET `fname` = '$fname', `lname` = '$lname', `gender` = '$gender', `phno` = '$phno' WHERE `user`.`id` = '$editid';";
            $result2=mysqli_query($conn,$sql2);
            if($result2)
            {
                echo "<script>alert('Edited Successfully')</script>";
                header("Location: users.php");
            }
            else
            {
                echo "<script>alert('Editing Failed')</script>";
                echo "<script>window.history.go(-1)</script>";
            }
        }
    ?>
</body>
</html>

