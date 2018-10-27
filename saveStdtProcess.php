<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/25/2018
 * Time: 6:54 PM
 */

if (isset($_GET['btnsave'])){
    $connect = mysqli_connect("localhost", "root", "", "Cat");
    if (!$connect){
        echo "Failed to connect";
    }else{
        $name = $_GET['name'];
        $email = $_GET['mail'];
        $date = $_GET['date'];
        $gender = $_GET['gender'];
        $username = $_GET['uname'];
        $password = $_GET['pass'];
        $insert = "INSERT INTO `students reg`(`Id`, `Name`, `Email`, `DOB`, `Gender`, `Username`, `Password`) VALUES ('null','$name','$email','$date','$gender','$username','$password')";
        $query = mysqli_query($connect,$insert);
        if ($query){
            echo "Saved Successfully";
            header("location:saveStudent.php");
        }else{
            echo "Failed to save";
        }
    }
}

?>