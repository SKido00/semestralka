<?php
if (isset($_POST["submit"])) {

    $login = $_POST["username"];
    $psw = $_POST["psw"];



    require_once 'con-flight.inc';
    require_once 'signup_functions.inc.php';
}
if (emptyInputLogin($login,  $psw) !== false) {
    header("location: Login_Form.php?error=emptyinput");
    exit();
}

loginUser($pripoj, $login, $psw);