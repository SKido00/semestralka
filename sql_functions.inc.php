<?php

    function emptyInputForm($arcid, $actype, $adep, $ades, $eet, $dof, $route) {
        $result;
        if (empty($arcid) || empty($actype) || empty($adep) || empty($ades) || empty($eet) || empty($route)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidArcid($arcid) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $arcid)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function createFPL($pripoj, $arcid, $actype, $adep, $ades, $eet, $dof, $route){
        $sql = "INSERT INTO Flight (status, arcid, acType, adep, ades, eet, route, userId) VALUES (1,?, ?, ?, ?, ?, ?,1)";
        $pripoj->query($sql);
$stmt = mysqli_stmt_init($pripoj);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: FPL_Form.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssss", $arcid, $actype, $adep, $ades, $eet, $route);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: FPL_Form.php?error=none");
        exit();

    }
?>