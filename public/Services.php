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

    <link rel="stylesheet" href="../css/Services.css">

    <title>CommuniX Inc.</title>
</head>

<body oncontextmenu="return false" onload="check()">
<style><?php include "../css/Services.css" ?></style>
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
                                <a href="./AboutUs.php" class="nav-a">About Us</a>
                            </li>
                            <li class="nav-li">
                                <a href="#" class="nav-a nav-a-services">Services</a>
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
                <h1 class="hero-h1">Our Services</h1>
            </div>
        </div>


        <div class="services-container">
            <div class="services-content-container">
                <div class="our-services-h2-description-container">
                    <h2 class="our-service-description-h2">
                        COMMUNIX INC. exists to address the key difficulties that our clients, both large and small,
                        face. Our distinct approach is not only what distinguishes us, but also what drives our success.
                        We offer a wide range of services and solutions to assist businesses in facilitating
                        transformation, achieving their vision, and optimizing performance and efficiency.
                    </h2>
                </div>

                <div class="service-card-container">
                    <div class="service-card-container-content">
                        <div class="service-card">
                            <div class="service-header-img-container">
                                <img src="../img/Services-IMG/CustomerCare.png" alt="customercare-img"
                                    class="services-img">
                            </div>

                            <div class="service-description">
                                <h1 class="service-h1">
                                    Customer Care
                                </h1>
                                <p class="service-description-p">
                                    Communix listens. We make things happen. By offering individualized service, we are able to exceed our customers' demands and expectations. Our number one concern is customer satisfaction.
                                </p>
                            </div>
                        </div>


                        <div class="service-card">
                            <div class="service-header-img-container">
                                <img src="../img/Services-IMG/BackOfficeSupport.png" alt="BackOfficeSupport-img"
                                    class="services-img">
                            </div>

                            <div class="service-description">
                                <h1 class="service-h1">
                                    Back Office Support
                                </h1>
                                <p class="service-description-p">
                                    Communix specializes in creating procedures and strategies to meet our clients' in-house work requirements. We will assist you in successfully managing your workload with our knowledge in outsourcing solutions. boost back-end efficiency and offer personalized outcomes.
                                </p>
                            </div>
                        </div>



                        <div class="service-card">
                            <div class="service-header-img-container">
                                <img src="../img/Services-IMG/EmailAndChatSupport.png" alt="EmailAndChatSupport-img"
                                    class="services-img">
                            </div>

                            <div class="service-description">
                                <h1 class="service-h1">
                                    Email and Chat Support
                                </h1>
                                <p class="service-description-p">
                                    We provide excellent service by responding to enquiries, processing requests, and resolving concerns. With our round-the-clock email assistance, we'll never miss a chance to answer a customer's complaint.
                                </p>
                            </div>
                        </div>



                        <div class="service-card">
                            <div class="service-header-img-container">
                                <img src="../img/Services-IMG/SalesSupport.png" alt="SalesSupport-img"
                                    class="services-img">
                            </div>

                            <div class="service-description">
                                <h1 class="service-h1">
                                    Sales Support
                                </h1>
                                <p class="service-description-p">
                                    We understand your company's requirements. That is why, at Communix, we recruit the finest people to assist your company generate sales in an efficient and cost-effective manner. Our professionals have a demonstrated track record of generating leads to sales.
                                </p>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-header-img-container">
                                <img src="../img/Services-IMG/LeadGeneration.png" alt="LeadGeneration-img"
                                    class="services-img">
                            </div>

                            <div class="service-description">
                                <h1 class="service-h1">
                                    Lead Generation
                                </h1>
                                <p class="service-description-p">
                                    Communix has been providing Lead Generation solutions since its establishment, using specific ways to assist expedite the process and link your organization with the proper leads. Allow our experts to assist your company in defining the perfect client.
                                </p>
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
                                <a href="./AboutUs.php" class="footer-nav-a">About Us</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./Jobs.php" class="footer-nav-a">Careers</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./Services.php" class="footer-nav-a">Contact Form</a>
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
    
    <script src="../js/Services.js"></script>
    <script src ="../js/burger.js"></script>
    <script src="../js/loggedInCheck.js"></script>
</body>

</html>