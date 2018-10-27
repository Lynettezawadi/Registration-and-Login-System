<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/22/18
 * Time: 10:46 AM
 */

$connected = mysqli_connect("localhost","root", "","Cat");
if (isset($_GET['x'])){
    $Id = $_GET['x'] ;
    mysqli_query($connected, "DELETE FROM `students reg` WHERE id = $Id");
    header("location:showStudents.php");
}

?>