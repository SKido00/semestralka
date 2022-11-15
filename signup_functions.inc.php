<?php

function emptyInputForm($name, $surname, $login, $email, $psw, $repeatpsw) {
    $result;
    if (empty($name) || empty($surname) || empty($login) || empty($email) || empty($psw) || empty($repeatpsw)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($login) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $login)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function userExists($pripoj, $login, $email) {
    $sql = "SELECT * FROM User WHERE login = ? OR email = ?;";
    $stmt = mysqli_stmt_init($pripoj);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: Signup_Form.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $login, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
    header("location: Signup_Form.php?error=none");
    exit();
}

function pswMatch($psw, $repeatpsw) {
    $result;
    if ($psw !== $repeatpsw) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createUser($pripoj, $name, $surname, $login, $email, $psw){
    $sql = "INSERT INTO User (name, surname, login, password, email) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($pripoj);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: Signup_Form.php?error=stmtfailed");
        exit();
    }

    $hashpsw = password_hash($psw, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $surname, $login, $hashpsw, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: Signup_Form.php?error=none");
    exit();

}

function emptyInputLogin($login,  $psw){
    $result;
    if (empty($login) || empty($psw)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($pripoj, $login, $psw){
    $userExists = userExists($pripoj, $login, $login);
    if($userExists == false) {
        header("location: Login_Form.php?error=wronglogin");
        exit();
    }
    $pswHashed = $userExists["password"];
    $checkPsw = password_verify($psw, $pswHashed);

    if ($checkPsw == false){
        header("location: Login_Form.php?error=wronglogin");
        exit();
    } else if ($checkPsw == true) {
        session_start();
        $_SESSION["userid"] = $userExists["id"];
        $_SESSION["username"] = $userExists["login"];
        header("location: Map_Page.php");
        exit();
    }

}
