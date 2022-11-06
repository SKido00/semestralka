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
        <button type="button" class="btn btn-dark" onclick="location.href='Login_Form.html.'">Home</button>
        <button type="button" class="btn btn-dark" onclick="location.href='Map_Page.html'">Map</button>
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
    <h1>FPL Form</h1>
    <hr>
    <label for="arcid"><b>Aircraft ID</b></label>
    <input type="text" name="arcid" id="arcid" required>

    <label for="acType"><b>Aircraft Type</b></label>
    <input type="text" name="acType" id="acType" required>

    <label for="rule"><b>Flight Rules</b></label>
    <input type="text" name="rule" id="rule" required>

    <label for="adep"><b>ADEP</b></label>
    <input type="text" name="adep" id="adep" required>

    <label for="ades"><b>ADES</b></label>
    <input type="text" name="ades" id="ades" required>

    <label for="route"><b>Route</b></label>
    <textarea name="route" id="route" rows="5" cols="40">

    </textarea>
    <hr>
    <button class="fplformsubmit">Submit</button>
</div>

</body>
</html>