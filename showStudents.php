<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
</head>
<body>
<div id="f">
<h1 class="p">STUDENTS</h1>
<a href="saveStudent.php"><button class="btn btn-primary">Add Student</button></a>
<a href="trsLogin.php"><button class="btn btn-danger">Log Out</button></a>
<hr>
<table>
    <tr>
        <th>Names</th>
        <th>Emails</th>
        <th>D.O.B</th>
        <th>Gender</th>
        <th>Username</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 10/18/18
     * Time: 11:08 AM
     */

    $connected = mysqli_connect("localhost","root",
        "", "Cat");
    $fetch = mysqli_query($connected,"SELECT * FROM `students reg`");
    while ($row = mysqli_fetch_assoc($fetch)){
       extract($row);
        echo "
<tr>
<td>$Name</td>
<td>$Email</td>
<td>$DOB</td>
<td>$Gender</td>
<td>$Username</td>
<td>$Password</td>
<td><a href='update.php?x=$Id'><button class='btn btn-success'>Update</button></a></td>
<td><a href='delete.php?x=$Id'><button class='btn btn-danger'>Delete</button></a></td>
</tr>";
    }
    ?>
</table>
</div>
</body>
</html>