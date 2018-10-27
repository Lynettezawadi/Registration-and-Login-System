<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/25/2018
 * Time: 8:37 PM
 */

$connected = mysqli_connect("localhost","root",
    "","Cat");
if (isset($_POST['id'])){
    extract($_POST);
    mysqli_query($connected, "UPDATE `students reg` SET Name='$name',Email='$email',DOB='$date',Gender='$gender',Username='$username',Password='$pass' WHERE id = $id");
    header("location:showStudents.php");
}

?>