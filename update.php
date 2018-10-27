<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
</head>
<body>
<div id="lo">
<h1 class="rt">UPDATE STUDENTS</h1>
<a href="showStudents.php"><button class="btn btn-danger">Cancel</button></a>
<hr>
<form action="updateProcess.php" method="post" class="fd">
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 10/23/18
     * Time: 10:32 AM
     */

    $connected = mysqli_connect("localhost","root",
        "","Cat");
    //    extract($_GET);
    $Id = $_GET['x'];
    $fetch = mysqli_query($connected,"SELECT * FROM `students reg` WHERE id=$Id");
    $row = mysqli_fetch_assoc($fetch);
    extract($row);
    ?>
    <input type="text" name="name" value="<?php echo $Name;?>" class="gh"><br>
    <input type="email" name="email" value="<?php echo $Email;?>"class="gh"><br>
    <input type="date" name="date" value="<?php echo $DOB;?>"class="gh"><br>
   Male <input type="radio" name="gender" value="Male""<?php echo $Gender;?>">
    Female <input type="radio" name="gender" value="Female""<?php echo $Gender;?>"<br>
    <input type="text" name="username" value="<?php echo $Username;?>"class="gh"><br>
    <input type="password" name="pass" value="<?php echo $Password;?>"class="gh"><br>
    <input type="number" name="id" value="<?php echo $Id;?>" hidden>
    <input type="submit" name="btnsave" value="Update">
</form>
</div>
</body>
</html>