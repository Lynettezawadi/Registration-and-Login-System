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
<div id="d">
<h1 class="b">STUDENTS</h1>
<a href="studentLogin.php"><button class="btn btn-danger">Log Out</button></a>
<hr>
<table>
    <tr>
        <th>Names</th>
        <th>Emails</th>
        <th>D.O.B</th>
        <th>Gender</th>
        <th>Username</th>
        <th>Password</th>
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
</tr>";
    }
    ?>
</table>
</div>
</body>
</html>