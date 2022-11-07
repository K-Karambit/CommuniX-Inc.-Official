<?php

// This code is to prevent a user from accessing the login page directly from the URL.
if (
    $_SERVER["REQUEST_METHOD"] == "GET" &&
    realpath(__FILE__) == realpath($_SERVER["SCRIPT_FILENAME"])
) {
    header("HTTP/1.0 403 Forbidden", true, 403);
    die(("location: ../scripts/error.php"));
}

require "../scripts/db_config_applicants.php";
require "../public/Register.php";
$db_uname_chkr = "SELECT username FROM tbl_applicants WHERE username='{$_POST['uname']}'";
($result = mysqli_query($link, $db_uname_chkr));

try {
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username already exist.');</script>";
    } else {
        if ($_POST['psw'] != $_POST['psw2']) {
            echo "<script>alert('Password do not match.');</script>";
        } else {
            $password = md5($_POST['psw']);
            $sql_insert = "INSERT INTO tbl_applicants (username, password, email, role) VALUES ('{$_POST['uname']}', '{$password}', '{$_POST['email']}', 'Applicant' )";
            mysqli_query($link, $sql_insert);
            echo "<script>alert('Thank you for registering with CommuniX Inc.');</script>";
            echo "<script>window.location.href = '../public/Login.php';</script>";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
