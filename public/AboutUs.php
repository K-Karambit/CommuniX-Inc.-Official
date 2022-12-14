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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600;900&family=Poppins:wght@100;200;300;400;600;900&family=Questrial&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../css/AboutUs.css">

    <title>CommuniX Inc.</title>
</head>

<body oncontextmenu="return false" onload="check()">
<style><?php include "../css/AboutUs.css" ?></style>
    <div class="container">
        <div class="nav-container">
            <nav>
                <div class="nav-contents">
                    <div class="nav-logo-container">
                        <a href="../index.php">
                            <h1 class="nav-logo-h1">COMMUNIX</h1>
                        </a>
                    </div>

                                     
                    <button id=hamburger onclick="DropdownClick()">
                 
                    <svg viewBox="0 0 100 80" width="40" height="40">
                    <rect width="100" height="20"></rect>
                    <rect y="30" width="100" height="20"></rect>
                    <rect y="60" width="100" height="20"></rect>
                    </svg>           
                    
                </button>
                <ul class= "Dropdown-menu" id=Dropdown onmouseleave="NoDropdown()">
                    <li class=DropdownList><a href=../public/AboutUs.php>About Us</a>
                    <li class=DropdownList><a href=../public/Services.php>Services</a>
                    <li class=DropdownList><a href=../public/AnnouncementAndEvents.php>Announcement and Events</a>
                    <li class=DropdownList><a href=../public/Jobs.php>Job Opportunities</a>
                    <li class=DropdownList><a href=../public/Contact.php>Contact Us</a>
                </ul>


                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a href="#" class="nav-a nav-a-aboutus">About Us</a>
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

                    <div class="nav-links-login-register-btn" id="nav-links-login-register-btn">
                        <ul class="nav-ul">
                            <li class="nav-li-login"><a href="./Login.php" class="nav-a-login">Login</a></li>
                            <li class="nav-li-register"><a href="./Register.php" class="nav-a-register">Register</a></li>
                        </ul>
                    </div>

                    <a id="retrieveId-h1-a" class="retrieveId-h1" onclick="goBackToDashboard()">
                        <h1 id="retrieveId-h1" class="retrieveId-h1" onclick="goBackToDashboard()">
                            <script>
                                var ID = localStorage.getItem("id");
                                document.getElementById("retrieveId-h1").innerHTML = "Welcome " + ID + "!"
                            </script>
                        </h1>
                    </a>

                </div>
            </nav>
        </div>

        <div class="hero-container">
            <div class="hero-text-container">
                <h1 class="hero-h1">About Us</h1>
            </div>
        </div>


        <div class="gallery" id="gallery">
            <div class="gallery-container">
                <div class="gallery-title-container">
                    <h1 class="gallery-title-h1">Our Team</h1>
                </div>

                <div class="collage-container">
                    <div class="collage">
                        <div class="collage-left">
                            <img src="../img/collage/Screenshot_4.jpg" alt="collage-img-1" class="collage-img-1">
                        </div>
                        <div class="collage-right">
                            <img src="../img/collage/JTX16046.JPG" alt="collage-img-2" class="collage-img-2">
                            <img src="../img/collage/JTX16155.JPG" alt="collage-img-2" class="collage-img-2">
                            <img src="../img/collage/JTX16191.JPG" alt="collage-img-2" class="collage-img-2">
                            <img src="../img/collage/JTX26783.JPG" alt="collage-img-2" class="collage-img-2">
                            <img src="../img/collage/JTX26816.JPG" alt="collage-img-2" class="collage-img-2">
                            <img src="../img/collage/JTX15919.JPG" alt="collage-img-2" class="collage-img-2">
                            <img src="../img/collage/JTX16219.JPG" alt="collage-img-2" class="collage-img-2 collage-img-bottom">
                            <img src="../img/collage/JTX26646.JPG" alt="collage-img-2" class="collage-img-2 collage-img-bottom">
                            <img src="../img/collage/JTX26829.JPG" alt="collage-img-2" class="collage-img-2 collage-img-bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="about" class="about">
            <div class="about-container-div">
                <div class="about-container-div-h1">
                    <h1 class="about-container-div-h1-h1">
                        About Us
                    </h1>
                </div>
                <div class="about-container-div-p">
                    <p class="about-container-div-p-p">
                        COMMUNIX INC. has worked hard to provide smart, flexible, and affordable services to all of our
                        customers. Whatever your requirements are, our team of experts will go above and beyond to
                        tailor
                        our solutions to exceed your expectations. Browse our services and contact us today to schedule
                        an
                        introductory meeting. <br>
                        We have worked as part of global companies and have been trained by industry leaders to
                        successfully
                        manage both voice and non-voice accounts for global clients with resource requirements ranging
                        from
                        20 to 600 Full Time Employees (FTE), supporting a full spectrum of simple to complex process
                        requirements with an emphasis on performance management.
                    </p>
                </div>
            </div>
        </div>
    </div>

        <div class="location">
            <div class="location-container">
                <div class="location-container-h1">
                    <h1 class="location-container-h1-h1">
                        Our Company
                    </h1>
                </div>
                <div class="location-container-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3863.7467563867644!2d120.94616295987595!3d14.441752732651379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d4f418441adf%3A0x5633ca9d036a2a57!2sCommunix%20Inc.!5e0!3m2!1sen!2sph!4v1658989149250!5m2!1sen!2sph" width="2020" height="500" style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <a href="#" class="footer-nav-a">About Us</a>
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
                            <a href="https://www.linkedin.com/company/communix-inc-cxi/"><i
                                    class='bx bxl-linkedin'></i></a>
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
    <script src="../js/About.js"></script>
    <script src ="../js/burger.js"></script>
    <script src="../js/loggedInCheck.js"></script>
</body>

</html>