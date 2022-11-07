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
require "../private/EmployeeLogin.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql_select = "SELECT * FROM tbl_employee WHERE username = '$username'";
($result = mysqli_query($link, $sql_select));
$data = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
        if (!empty($data)) {
            foreach ($data as $row) {
                if ($row['username'] == $username && $row['password'] == $password) {
                    if ($row['role'] == "System Admin") {
                        $userName = $row['username'];
                        $role = $row["role"];
                        echo "<script>localStorage.setItem('id', '$userName');</script>";
                        echo "<script>localStorage.setItem('role', '$role');</script>";
                        echo "<script>window.location.href = '../private/admin/SystemAdminDashboard.php';</script>";
                    } elseif ($row['role'] == "Website Admin") {
                        $userName = $row['username'];
                        $role = $row["role"];
                        echo "<script>localStorage.setItem('id', '$userName');</script>";
                        echo "<script>localStorage.setItem('role', '$role');</script>";
                        echo "<script>window.location.href = '../private/admin/WebAdminDashboard.php';</script>";
                    } elseif ($row['role'] == "Human Resource") {
                        $userName = $row['username'];
                        $role = $row["role"];
                        echo "<script>localStorage.setItem('id', '$userName');</script>";
                        echo "<script>localStorage.setItem('role', '$role');</script>";
                        echo "<script>window.location.href = '../private/admin/HumanResourceDashboard.php';</script>";
                    } elseif ($row['role'] == "Employee") {
                        $userName = $row['username'];
                        $role = $row["role"];
                        echo "<script>localStorage.setItem('id', '$userName');</script>";
                        echo "<script>localStorage.setItem('role', '$role');</script>";
                        echo "<script>window.location.href = '../private/EmployeeDashboard.php';</script>";
                    }
                } else {
                    echo "<script>alert('Invalid username or password.');</script>";
                    echo "<script>window.location.href = '../private/EmployeeLogin.php';</script>";
                }
            }
        }
    }
}
