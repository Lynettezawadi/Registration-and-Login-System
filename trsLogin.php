<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher-Log In</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
</head>
<body>
<div id="q">
<h1 class="h">TEACHER'S PORTAL <br> Welcome! Please Log In To Continue</h1>
<hr>
<form action="showStudents.php" method="get" class="v">
    <input type="text" name="name" placeholder="Enter Username" required class="y"><br>
    <input type="email" name="mail" placeholder="Enter Email" required class="y"><br>
    <input type="password" name="pass" placeholder="Enter Password" required class="y"><br>
    <input type="submit" name="btn_save" value="Log In" class="btn btn-success">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/24/2018
 * Time: 7:38 PM
 */

if (isset($_GET['btn_save'])){
    $connect = mysqli_connect("localhost", "root", "","Cat");
    if (!$connect){
        echo "Log In Failed";
    }else {
        $name = $_GET['name'];
        $email = $_GET['mail'];
        $password = $_GET['pass'];
        $select = "SELECT email FROM `teachers login` WHERE (email='$email')";
        $select2 = "SELECT password FROM `teachers login` WHERE (password='$password')";
        $query = mysqli_query($connect,$select);
        $query2 = mysqli_query($connect,$select2);
        $count = mysqli_num_rows($query);
        $count2 = mysqli_num_rows($query2);
        if ($count==1){
            if ($count2==1){
                echo "Welcome " . $name;
            }else{
                echo "Invalid Password";
            }
        }else{
            echo "Invalid Email";
        }

    }
}

?>
</div>
</body>
</html>