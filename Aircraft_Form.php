<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="sem.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">

    <div class="btn-group" role="group">
        <button type="button" class="btn btn-dark" onclick="location.href='Login_Form.php'">Login</button>
        <button type="button" class="btn btn-dark" onclick="location.href='Signup_Form.php'">Sign Up</button>
        <button type="button" class="btn btn-dark" onclick="location.href='Map_Page.html'">Map</button>
        <div class="dropdown">
            <button class="dropbtn btn-dark">Flight</button>
            <div class="dropdown-content">
                <a href="#" onclick="location.href='Aircraft_Form.php'">Add Plane</a>
                <a href="#" onclick="location.href='FPL_Form.php'">Create Flight Plan</a>
                <a href="#" onclick="location.href='FPL_List.php'">List of Flight Plans</a>
            </div>
        </div>
        <button type="button" class="btn btn-dark" onclick="location.href='About_Page.html'">About</button>
    </div>

</nav>
<?php
include "con-flight.inc";
$sql = "SELECT id, name, surname, login FROM User";
$result = mysqli_query($pripoj, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["surname"] . " " . $row["login"] . " <br>";
    }
}
?>
<div class="menu">
    <form action="sql_manager.php" method="post">
    <h1>Aircraft Form</h1>
    <hr>
    <label for="acType"><b>Aircraft Type</b></label>
    <input type="text" name="acType" id="acType" required>

    <label for="acWakeTurb"><b>Aircraft Wake Turbulency</b></label>
    <input type="text" name="acWakeTurb" id="acType" required>

    <label for="acName"><b>Aircraft name</b></label>
    <input type="text" name="acName" id="acName" required>
   
    <hr>
    <button type="submit" name="submit" class="registerbutton">Submit</button>
    </form>
</div>

</body>
</html>