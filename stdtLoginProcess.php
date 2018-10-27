<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/25/2018
 * Time: 8:37 PM
 */

$connected = mysqli_connect("localhost","root",
    "","Cat");
if (isset($_POST['email'])){
    extract($_POST);
    mysqli_query($connected, "SELECT * FROM `students reg` WHERE email = $email");
    header("location:showStudents.php");
}

?>