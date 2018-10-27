<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student-Log In</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
</head>
<body>
<div id="r">
<h1 class="w">STUDENT'S PORTAL <br> WELCOME! PLEASE LOG IN TO CONTINUE</h1>
<hr>
<form action="showStudents2.php" method="get" class="st">
    <input type="text" name="name" placeholder="Enter Username" required class="mt"><br>
    <input type="email" name="mail" placeholder="Enter Email" required class="mt"><br>
    <input type="password" name="pass" placeholder="Enter Password" required class="mt"><br>
    <input type="submit" name="btn_save" value="Log In">
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
        $select = "SELECT email FROM `students reg` WHERE (email='$email')";
        $select2 = "SELECT password FROM `students reg` WHERE (password='$password')";
        $query = mysqli_query($connect,$select);
        $query2 = mysqli_query($connect,$select2);
        $count = mysqli_num_rows($query);
        $count2 = mysqli_num_rows($query2);

        if ($count==1){
            if ($count2==1){
                echo "Welcome " . $name ."<br>";
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