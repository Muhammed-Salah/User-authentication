<?php
    $editid=$_GET['id'];
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $gender=$_GET['gender'];
    $phno=$_GET['phno'];
    include_once('database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edited.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $editid;?>">
        <input name="fname" value="<?php echo $fname;?>">
        <input name="lname" value="<?php echo $lname;?>">
        <input name="gender" value="<?php echo $gender;?>">
        <input name="phno" value="<?php echo $phno;?>">
        <input type="submit">
    </form>
</body>
</html>