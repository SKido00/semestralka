<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="sem.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script>
        function validateForm() {
            let firstname = document.forms["signup form"]["name"].value;
            let surname = document.forms["signup form"]["surname"].value;
            let login = document.forms["signup form"]["username"].value;
            let email = document.forms["signup form"]["email"].value;
            let password = document.forms["signup form"]["psw"].value;
            let password2 = document.forms["signup form"]["repeatpsw"].value;

            if(password.length<6){
                alert("Password must be longer than 6 characters");
                return false;
            }

            if (password != password2){
                alert("Passwords dont match");
                return false;
            }

        }
    </script>
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
<form name="signup form" action="Signup_Form_submit.php" method="post" onsubmit="return validateForm()">
    <div class="menu">
    <h1>Sign up</h1>
    <hr>
    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="name" id="name" required>

    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="repeatpsw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeatpsw" id="repeatpsw" required>

    <hr>
    <button class="registerbutton" type="submit" name="submit">Sign Up</button>
    <div class="container signin">
        <p>Already have an account? <a href="Login_Form.php">Sign in</a>.</p>
    </div>
    </div>

</form>
</body>
</html>
