<?php
    $editid=$_GET['id'];
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
        $conn=mysqli_connect('localhost','root','','my');
        if (!$conn) 
        {
            echo "not connected";
        }
        else
        {
            $sql2="DELETE FROM `user` WHERE `user`.`id` = $editid;";
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
