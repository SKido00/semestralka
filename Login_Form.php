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
        <button type="button" class="btn btn-dark" onclick="location.href='Map_Page.php'">Map</button>
        <button type="button" class="btn btn-dark" onclick="location.href='About_Page.php'">About</button>
    </div>

    </nav>
    <form action="Login_Form_submit.php" method="post">
    <div class="menu">
        <h1>Login</h1>
        <hr>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <hr>
        <button class="registerbutton" type="submit" name="submit">Login</button>

    </div>
    </form>
</body>
</html>