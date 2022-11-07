<?php

// This code is to prevent a user from accessing the login page directly from the URL.
if (
    $_SERVER["REQUEST_METHOD"] == "GET" &&
    realpath(__FILE__) == realpath($_SERVER["SCRIPT_FILENAME"])
) {
    header("HTTP/1.0 403 Forbidden", true, 403);
    die(("location: ../scripts/error.php"));
}

require "../private/db_config_employee.php";
require "../private/admin/SystemAdminDashboard.php";
$db_uname_chkr = "SELECT username FROM tbl_employee WHERE username='{$_POST['uname']}'";
($result = mysqli_query($link, $db_uname_chkr));

try {
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username already exist.');</script>";
    } else {
        if ($_POST['psw'] != $_POST['psw2']) {
            echo "<script>alert('Password do not match.');</script>";
        } else {
            $password = md5($_POST['psw']);
            $sql_insert = "INSERT INTO tbl_employee (username, password, email, role) VALUES ('{$_POST['uname']}', '{$password}', '{$_POST['email']}', '{$_POST['roles']}')";
            mysqli_query($link, $sql_insert);
            echo "<script>alert('A new employee has been added.');</script>";
            echo "<script>window.location.href = '../private/admin/SystemAdminDashboard.php';</script>";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
