<?php

// This code is to prevent a user from accessing the login page directly from the URL.
if (
    $_SERVER["REQUEST_METHOD"] == "GET" &&
    realpath(__FILE__) == realpath($_SERVER["SCRIPT_FILENAME"])
) {
    header("HTTP/1.0 403 Forbidden", true, 403);
    die(("location: ../scripts/error.php"));
}

require "../private/EmployeeDashboard.php";

