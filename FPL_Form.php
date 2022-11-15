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
        <button type="button" class="btn btn-dark" onclick="location.href='Login_Form.php'">Home</button>
        <button type="button" class="btn btn-dark" onclick="location.href='Map_Page.php'">Map</button>
        <div class="dropdown">
            <button class="dropbtn btn-dark">Flight</button>
            <div class="dropdown-content">
                <a href="#" onclick="location.href='Aircraft_List.php'">Aircraft</a>
                <a href="#" onclick="location.href='FPL_Form.php'">Create Flight Plan</a>
                <a href="#" onclick="location.href='FPL_List.php'">List of Flight Plans</a>
            </div>
        </div>
        <button type="button" class="btn btn-dark" onclick="location.href='About_Page.html'">About</button>
    </div>

</nav>

<div class="menu">
    <form action="FPL_Form_submit.php" method="post">
    <h1>FPL Form</h1>
    <hr>
    <label for="arcid"><b>Aircraft ID</b></label>
    <input type="text" name="arcid" id="arcid" required>

    <label for="acType"><b>Aircraft Type</b></label>
    <input type="text" name="acType" id="acType" required>

    <label for="adep"><b>ADEP</b></label>
    <input type="text" name="adep" id="adep" required>

    <label for="ades"><b>ADES</b></label>
    <input type="text" name="ades" id="ades" required>

    <label for="time"><b>Time</b></label>
    <input type="text" name="time" id="time" required>

    <label for="dof"><b>Date of Flight</b></label>
    <input type="text" name="dof" id="dof" required>

    <label for="route"><b>Route</b></label>
    <textarea name="route" id="route" rows="5" cols="40">

    </textarea>
    <hr>
    <button class="registerbutton" type="submit" name="submit" >Submit Form</button>
    </form>
</div>

</body>
</html>