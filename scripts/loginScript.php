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
require "../public/Login.php";


$username = $_POST['username'];
$password = md5($_POST['password']);

$sql_select = "SELECT * FROM tbl_applicants WHERE username = '$username'";
($result = mysqli_query($link, $sql_select));
$data = [];

if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
        if (!empty($data)) {
            foreach ($data as $row) {
                if ($row['username'] == $username && $row['password'] == $password && $_COOKIE[$cookie_name] == $_POST['otp']) {
                    if ($row['role'] == "Applicant") {
                        $userName = $row['username'];
                        $role = $row["role"];
                        echo "<script>localStorage.setItem('id', '$userName');</script>";
                        echo "<script>localStorage.setItem('role', '$role');</script>";
                        echo "<script>window.location.href = '../src/ApplicantsDashboard.php';</script>";
                    }
                } else {
                    echo "<script>alert('Invalid username or password.');</script>";
                    echo "<script>window.location.href = '../public/Login.php';</script>";
                }
            }
        } else {
            echo "<script>alert('Invalid username or password.');</script>";
            echo "<script>window.location.href = '../public/Login.php';</script>";
        }
    }
}
