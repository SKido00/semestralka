<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $login = $_POST["username"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $repeatpsw = $_POST["repeatpsw"];


    require_once 'con-flight.inc';
    require_once 'signup_functions.inc.php';
}
if (emptyInputForm($name, $surname, $login, $email, $psw, $repeatpsw) !== false) {
    header("location: Signup_Form.php?error=emptyinput");
    exit();
}

if (invalidUsername($login) !== false) {
    header("location: Signup_Form.php?error=invalidusername");
    exit();
}

if (invalidEmail($email) !== false) {
    header("location: Signup_Form.php?error=invalidemail");
    exit();
}

if (pswMatch($psw, $repeatpsw) !== false){
    header("location: Signup_Form.php?error=passwordsdontmatch");
    exit();
}

if (userExists($pripoj, $login, $email) !== false) {
    header("location: Signup_Form.php?error=usernametaken");
    exit();
}

//if (invalidActype($actype) !== false) {
//    header("location: ../FPL_Form.php?error=invalidactype");
//    exit();
//}

createUser($pripoj, $name, $surname, $login, $email, $psw);



