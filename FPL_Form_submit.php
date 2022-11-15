<?php

if (isset($_POST["submit"])) {
    $arcid = $_POST["arcid"];
    $actype = $_POST["actype"];
    $adep = $_POST["adep"];
    $ades = $_POST["ades"];
    $eet = $_POST["time"];
    $dof = $_POST["dof"];
    $route = $_POST["route"];

    require_once 'con-flight.inc';
    require_once 'sql_functions.inc.php';
}
    //if (emptyInputForm($arcid, $actype, $adep, $ades, $eet, $dof, $route) !== false) {
    //    header("location: FPL_Form.php?error=emptyinput");
   //     exit();
   // }

    if (invalidArcid($arcid) !== false) {
        header("location: FPL_Form.php?error=invalidarcid");
        exit();
    }

    //if (invalidActype($actype) !== false) {
    //    header("location: ../FPL_Form.php?error=invalidactype");
    //    exit();
    //}

    createFPL($pripoj, $arcid, $actype, $adep, $ades, $eet, $dof, $route);



