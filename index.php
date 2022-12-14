<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/LandingPage-IMG/chicken.png" type="image/x-icon" />

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600;900&family=Poppins:wght@100;200;300;400;600;900&family=Questrial&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./css/LandingPage.css">

    <title>CommuniX Inc.</title>
</head>

<body oncontextmenu="return false" onload="check()">
    <style>
        <?php include "../css/LandingPage.css" ?>
    </style>
    <div class="container">
        <div class="nav-container">
            <nav>
                <div class="nav-contents">
                    <div class="nav-logo-container">
                        <a href="#">
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

                    <ul class="Dropdown-menu" id=Dropdown onmouseleave="NoDropdown()">
                        <li class=DropdownList><a href=./public/AboutUs.php>About Us</a>
                        <li class=DropdownList><a href=./public/Services.php>Services</a>
                        <li class=DropdownList><a href=./public/AnnouncementAndEvents.php>Announcement and Events</a>
                        <li class=DropdownList><a href=./public/Jobs.php>Job Opportunities</a>
                        <li class=DropdownList><a href=./public/Contact.php>Contact Us</a>
                    </ul>


                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a href="./public/AboutUs.php" class="nav-a">About Us</a>
                            </li>
                            <li class="nav-li">
                                <a href="./public/Services.php" class="nav-a">Services</a>
                            </li>
                            <li class="nav-li nav-li-careers">
                                <a href="#" class="nav-a nav-a-careers">Careers</a>
                                <div class="dropdown-careers-content">
                                    <a href="./public/AnnouncementAndEvents.php" class="dropdown-careers-content-a">Announcement and Events</a>
                                    <a href="./public/Jobs.php" class="dropdown-careers-content-a">Job Opportunities</a>
                                </div>
                            </li>
                            <li class="nav-li">
                                <a href="./public/Contact.php" class="nav-a">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav-links-login-register-btn" id="nav-links-login-register-btn">
                        <ul class="nav-ul">
                            <li class="nav-li-login"><a href="./public/Login.php" class="nav-a-login">Login</a></li>
                            <li class="nav-li-register"><a href="./public/Register.php" class="nav-a-register">Register</a></li>
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
                <h1 class="hero-h1">CommuniX Inc.</h1>
                <h2 class="hero-h2">Together, Let's make it happen</h2>
                <a href="#" class="hero-button">Get Started</a>
            </div>
        </div>

        <div class="who-we-are" id="who-we-are">
            <div class="who-we-are-container">
                <div class="who-we-are-img-container-left">
                    <img src="./img/WhoWeAre-IMG/WhoWeAre.png" alt="who-we-are" class="who-we-are-img" />
                </div>
                <div class="who-we-are-text-container-right">
                    <h1 class="who-we-are-h1">Who are we</h1>
                    <p class="who-we-are-p">
                        COMMUNIX INC. is an outsourcing company located in Cavite, Philippines. We offer customized
                        call
                        center services for small to medium-sized client headcount needs that are designed to meet
                        and
                        exceed expectations. Our outsourcing company was founded on three fundamental principles:
                        quality, pricing, and service.
                    </p>

                    <div class="no-of-emp-container">
                        <div class="no-of-exp">
                            <h1 class="no-of-exp-h1-1">
                                60
                            </h1>
                            <p class="no-of-exp-p-1">
                                Years of Experience
                            </p>
                        </div>

                        <div class="no-of-emp">
                            <h1 class="no-of-emp-h1-1">
                                600+
                            </h1>
                            <p class="no-of-emp-p-1">
                                No. of Employees
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="WhyCommuniX" id="WhyCommuniX">
            <div class="WhyCommuniX-container">
                <div class="WhyCommuniX-title-container">
                    <h1 class="WhyCommuniX-h1">Why CommuniX?</h1>
                </div>
                <div class="WhyCommuniX-cards-container">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./img/WhyCommuniX-IMG/RightPeopleRightSolutions.png" alt="Service 1" class="card-image">
                        </div>
                        <div class="card-text-container">
                            <h1 class="card-h1">Right People, Right Solutions</h1>
                            <p class="card-p">
                                We have the right skills, the right knowledge and the right attitude towards the job.
                                Our
                                Team are BPO professionals supporting a full spectrum of simple to complex process
                                requirements with emphasis on performance management.
                            </p>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-image-container">
                            <img src="./img/WhyCommuniX-IMG/SmartTailoredSolutions.png" alt="Service 1" class="card-image">
                        </div>
                        <div class="card-text-container">
                            <h1 class="card-h1">Smart Tailored Solutions</h1>
                            <p class="card-p">
                                We prioritize in understanding our clients business.
                                We study your product, your culture and your business style.
                                By offering realistic, appropriate and well supported solutions.
                                We design strategies that would best suit your needs.
                            </p>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-image-container">
                            <img src="./img/WhyCommuniX-IMG/ValueBeyondCostReduction.png" alt="Service 1" class="card-image">
                        </div>
                        <div class="card-text-container">
                            <h1 class="card-h1">Value Beyond Cost Reduction</h1>
                            <p class="card-p">
                                We focus on how our services can help our Clients far beyond the limitations while
                                helping
                                you save money. We provide Fixed All-In Rate to protect you from fluctuating business
                                demands.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image-container">
                            <img src="./img/WhyCommuniX-IMG/AnExtensionOfYourBusiness.png" alt="Service 1" class="card-image">
                        </div>
                        <div class="card-text-container">
                            <h1 class="card-h1">An Extension Of Your Business</h1>
                            <p class="card-p">
                                We are our client's favorite partner. Our partnership becomes an extension of your team,
                                while being self sufficient enough to build strategies to overcome challenges and exceed
                                client's expectations.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image-container">
                            <img src="./img/WhyCommuniX-IMG/ResultsOrientedAndQualityFocused.png" alt="Service 1" class="card-image">
                        </div>
                        <div class="card-text-container">
                            <h1 class="card-h1">Results Oriented And Quality Focused</h1>
                            <p class="card-p">
                                We maximize our Productivity without compromising our Quality. We are committed to
                                exceed
                                our Clients Service Levels while keeping the company goals and vision in mind.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="testimonial">
            <div class="testimonial-container">
                <div class="testimonial-title-container">
                    <h1 class="testimonial-h1">Testimonials</h1>
                </div>

                <div class="testimonial-cards-container">

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Keith Basong</h1>
                            <p class="testimonial-card-p">
                                " Feels good to work here. "
                            </p>
                        </div>
                    </div>


                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Andres Pamplona</h1>
                            <p class="testimonial-card-p">
                                " Great Place to work. "
                            </p>
                        </div>
                    </div>


                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Eugene Vidor</h1>
                            <p class="testimonial-card-p">
                                " I love it !!!! "
                            </p>
                        </div>
                    </div>

                    <!--
                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Franco Tonelete</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">John Rafael Pineda</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Yano Sy</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Dianne Jean Velasquez</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Romeo Angela Lipat</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Crislyn Ramonida</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Nuevo Caren</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Kiko Barrameda</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Yan Osdana</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Georgina Hernando</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Nhiel Terrora</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Steffano Sabordo</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Jonas Lumasag</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Paolo Cano</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">XD Lmao</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Faith Alcantara</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Manoling Clemente</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Maria Jlo</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Nick JM Yacast</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Mikasa1005</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Vanessa Rosales</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">James Manaquil</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Charice Lacida</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Ana Marie Docto</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Marwin Paril</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-card-image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 testimonial-card-image" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="testimonial-card-text-container">
                            <h1 class="testimonial-card-h1">Eliezer Mojica</h1>
                            <p class="testimonial-card-p">
                                " ??????????????? "
                            </p>
                        </div>
                    </div>

                    -->

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
                            <a href="./index.html" class="navbar-brand-anchor">
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
                                <a href="./public/AboutUs.php" class="footer-nav-a">About Us</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./public/Jobs.php" class="footer-nav-a">Careers</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="./public/Contact.php" class="footer-nav-a">Contact Form</a>
                            </li>
                        </ul>

                        <div class="socials-container">
                            <a href="https://www.facebook.com/CommuniXInc"><em class='bx bxl-facebook'></em></a>
                            <a href="https://www.linkedin.com/company/communix-inc-cxi/"><em class='bx bxl-linkedin'></em></a>
                            <a href="https://twitter.com/cxi_bpo"><em class='bx bxl-twitter'></em></a>
                            <a href="https://www.instagram.com/cxi_bpo/"><em class='bx bxl-instagram'></em></a>
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

    <script src="./js/index.js"></script>
    <script src="./js/burger.js"></script>
    <script src="./js/loggedInCheck.js"></script>

</body>

</html>