<?php

$n = 20;
function generateOTP($n)
{
    $generator = "1357902468ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$";

    $result = "";

    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }

    return $result;
}


$OTP = generateOTP($n);
echo "<script>localStorage.setItem('otp', '$OTP');</script>";

$cookie_name = "cookie_OTP";
$cookie_value = $OTP;
setcookie($cookie_name, $cookie_value, time() + (30 * 60 * 1000), "/");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/LandingPage-IMG/chicken.png" type="image/x-icon" />

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600;900&family=Poppins:wght@100;200;300;400;600;900&family=Questrial&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../css/Login.css">

    <title>CommuniX Inc.</title>
</head>

<body oncontextmenu="return false">
    <style>
        <?php include "../css/Login.css" ?>
    </style>
    <div class="container">
        <div class="nav-container">
            <nav>
                <div class="nav-contents">
                    <div class="nav-logo-container">
                        <a href="../index.php">
                            <h1 class="nav-logo-h1">COMMUNIX</h1>
                        </a>
                    </div>
                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a href="AboutUs.php" class="nav-a">About Us</a>
                            </li>
                            <li class="nav-li">
                                <a href="./Services.php" class="nav-a">Services</a>
                            </li>
                            <li class="nav-li nav-li-careers">
                                <a href="#" class="nav-a nav-a-careers">Careers</a>
                                <div class="dropdown-careers-content">
                                    <a href="./AnnouncementAndEvents.php" class="dropdown-careers-content-a">Announcement and Events</a>
                                    <a href="./Jobs.php" class="dropdown-careers-content-a">Job Opportunities</a>
                                </div>
                            </li>
                            <li class="nav-li">
                                <a href="./Contact.php" class="nav-a">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li-login"><a href="./Login.php" class="nav-a-login">Login</a></li>
                            <li class="nav-li-register"><a href="./Register.php" class="nav-a-register">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="login">
            <div class="login-container">
                <div class="login-container-left">
                    <div class="logo-container">
                        <a href="../LandingPage.html">
                            <h1 class="logo-h1">COMMUNIX <br> LOGIN</h1>
                        </a>
                    </div>
                </div>

                <div class="login-container-right">
                    <div class="login-form-container">
                        <h1 class="login-title">
                            Login
                        </h1>
                        <form action="../scripts/loginScript.php" method="post" enctype="multipart/forms">
                            <input type="text" name="username" id="username" placeholder="Username" required>

                            <input type="password" name="password" id="password" placeholder="Password" required>

                            <input type="text" name="otp" id="otp" placeholder="OTP" required>

                            <button class="btn-login">Log in</button>
                        </form>

                        <button class="btn-login" action="../scripts/loginScript.php" method="post" onclick="return sendEmail(),reset(),!1">Send OTP</button>
                        <h1 class="register">
                            Don't have an account? <a href="../public/Register.php" class="register-a"> Register</a>
                        </h1>

                        <div class="login-form-container-footer">
                            <h1 class="login-form-container-footer-h1">CommuniX Employee</h1>
                            <a href="../private/EmployeeLogin.php"><button class="btn-signin">Sign in</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer-container">
            <footer>
                <div class="footer-container-top">
                    <h1 class="footer-h1">Want to learn more?</h1>
                </div>
                <div class="footer-container-middle">
                    <h2 class="footer-h2">Get in touch to discuss how CommuniX can help you meet your customer services
                        needs with greater flexibility, lower cost and better outcomes.</h2>

                    <a href="#">
                        <button class="footer-btn-lets-connect">Let's Connect</button>
                    </a>
                </div>
                <div class="footer-horizontal-line"></div>
                <div class="footer-container-bottom">
                    <div class="footer-container-bottom-1">
                        <div class="footer-brand-container">
                            <a href="../index.html" class="navbar-brand-anchor">
                                <span class="footer-brand-name">COMMUNIX</span>
                            </a>
                        </div>

                        <ul class="footer-nav-ul">
                            <li class="footer-nav-li">
                                <a href="#" class="footer-nav-a">Industries</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="#" class="footer-nav-a">Solutions</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="#" class="footer-nav-a">Resources</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./AboutUs.php" class="footer-nav-a">About Us</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./Jobs.php" class="footer-nav-a">Careers</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./Contact.php" class="footer-nav-a">Contact Form</a>
                            </li>
                        </ul>

                        <div class="socials-container">
                            <a href="https://www.facebook.com/CommuniXInc"><i class='bx bxl-facebook'></i></a>
                            <a href="https://www.linkedin.com/company/communix-inc-cxi/"><i class='bx bxl-linkedin'></i></a>
                            <a href="https://twitter.com/cxi_bpo"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.instagram.com/cxi_bpo/"><i class='bx bxl-instagram'></i></a>
                        </div>
                    </div>
                    <div class="footer-container-bottom-2">
                        <h4 class="bottom-left-h4">Copyright &COPY; 2022 CommuniX Inc. All rights reserved</h4>

                        <div class="bottom-right">
                            <a href="#" class="footer-nav-a">Privacy Policy</a>
                            <a href="#" class="footer-nav-a">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>