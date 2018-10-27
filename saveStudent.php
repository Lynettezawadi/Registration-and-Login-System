<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/styles.css">
</head>
<body>
<div id="u">
    <h1 class="n">WELCOME! <br> Please enter the student's details to register</h1>
    <hr>
    <form action="saveStdtProcess.php" method="get" class="o">
        <input type="text" name="name" placeholder="Enter Name" required class="l"> <br>
        <input type="email" name="mail" placeholder="Enter Email" required class="l"> <br>
        <input type="date" name="date" placeholder="Enter D.O.B" required class="l"> <br>
        Male <input type="radio" name="gender" value="Male" required>
        Female <input type="radio" name="gender" value="Female" required> <br>
        <input type="text" name="uname" placeholder="Enter Username" required class="l"> <br>
        <input type="password" name="pass" placeholder="Enter Password" required class="l"> <br>
        <input type="submit" name="btnsave" value="Save" class="btn btn-success">
        <a href="showStudents.php" class="m"><button class="btn_btn btn-primary">View Students</button></a>

    </form>
    <br>
</div>
</body>
</html>