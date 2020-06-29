<?php
    $editid=$_GET['eidd'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $phno=$_POST['phno'];

    $conn=mysqli_connect('localhost','root','','my');
    if (!$conn) 
    {
        echo "not connected";
    }
    else
    {
        echo "<script>alert($editid.$fname.$lname.$gender.$phno)</script>";
        // $sql2="UPDATE `user` SET `fname` = '$fname', `lname` = '$lname', `gender` = '$gender', `phno` = '$phno' WHERE `user`.`id` = '$editid';";
        // $result2=mysqli_query($conn,$sql2);
        // if($result2!=NULL)
        // {
        //     echo "<script>alert('Editing Failed')</script>";
        //     echo "<script>window.history.go(-1)</script>";
        // }
        // else
        // {
        //     echo "<script>alert('Edited Successfully')</script>";
        //     header("Location: users.php");
        // }
    }
?>