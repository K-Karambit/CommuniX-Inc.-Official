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

    <link rel="stylesheet" href="../css/ApplicantDashboard.css">

    <title>CommuniX Inc.</title>
</head>

<body oncontextmenu="return false">
    <style>
        <?php include "../css/ApplicantDashboard.css" ?>
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
                                <a href="#" class="nav-a">Dashboard</a>
                            </li>
                    </div>

                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a id=avatar-img-a onclick="DropdownClick()"><img src="../img/ASSETS/AVATAR5.png" alt="AVATAR" class="avatar-img"></a>
                            </li>
                        </ul>
                        <ul class=nav-ul id=Dropdown onmouseleave="NoDropdown()"">
                            <li class=DropdownList-li><a class=DropdownList-a href=" #">Profile</a></li>
                            <li class=DropdownList-li><a class=DropdownList-a onclick="ApplicantLogout()">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>

        <div class="dashboard">
            <div class="dashboard-container">
                <h1 id="retrieveId-h1" class="retrieveId-h1">
                    <script>
                        var ID = localStorage.getItem("id");
                        document.getElementById("retrieveId-h1").innerHTML = "Welcome " + ID + "!"
                    </script>
                </h1>
                <div class="dashboard-form-container">
                    <div class="timeline">
                        <h1 class="timeline-title">
                            Application Process
                        </h1>
                        <div class="outer">
                            <div class="card card1" id="card1">
                                <div class="info ">
                                    <h3 class="title">Online Examination and Submition of Resume and Curriculum Vitae</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                            <div class="card card2" id="card2">
                                <div class="info">
                                    <h3 class="title">Application Assessment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="info">
                                    <h3 class="title">Initial Interview</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="info">
                                    <h3 class="title">Final Interview</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="examination-submit-resume-column">
                    <div class="examination">
                        <div class="examination-container">
                            <div class="examination-form-container">
                                <h1 class="examination-title">
                                    Online Examination
                                </h1>
                                <a class="online-examination-a" href="https://forms.gle/6qZU62asWCowyQB96" target="blank" onclick="onChangeEffect()">Take Online Exam</a>
                                <div class="btn-container-yes-no" id="btn-container-yes-no">
                                    <h4 class="btn-question">
                                        Click "Proceed" to begin your next step.
                                    </h4>
                                    <button class="btn-proceed" onclick="changeBG()">PROCEED</button>
                                </div>
                            </div>
                        </div>
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
                            <a href="../public/AboutUs.php" class="footer-nav-a">About Us</a>
                        </li>
                        <li class="footer-nav-li">
                            <a href="../public/Jobs.php" class="footer-nav-a">Careers</a>
                        </li>
                        <li class="footer-nav-li">
                            <a href="../public/Contact.php" class="footer-nav-a">Contact Form</a>
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

    <script src="../js/index.js"></script>
    <script src="../js/Applicant.js"></script>

</body>

</html>