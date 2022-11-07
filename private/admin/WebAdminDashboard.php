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

    <link rel="stylesheet" href="../../css/WebAdminDashboard.css">

    <title>CommuniX Inc.</title>
</head>

<body oncontextmenu="return false">
    <style>
        <?php include "../../css/WebAdminDashboard.css" ?>
    </style>
    <div class="container">
        <div class="nav-container">
            <nav>
                <div class="nav-contents">
                    <div class="nav-logo-container">
                        <a href="../../index.php">
                            <h1 class="nav-logo-h1">COMMUNIX</h1>
                        </a>
                    </div>
                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a href="#" class="nav-a">Dashboard</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav-links">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a id=avatar-img-a onclick="DropdownClick()"><img src=" ../../img/ASSETS/AVATAR2.jpg" alt="AVATAR" class="avatar-img"></a>
                            </li>
                        </ul>
                        <ul class=nav-ul id=Dropdown onmouseleave="NoDropdown()"">
                            <li class=DropdownList-li><a class=DropdownList-a href=" #">Profile</a></li>
                            <li class=DropdownList-li><a class=DropdownList-a onclick="WebsiteAdminLogout()">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>

        <div class=" dashboard">
            <div class="dashboard-container">
                <div class="dashboard-form-container">
                    <h1 class="dashboard-title">
                        Attendance
                    </h1>

                    <form class="form-In-Out" method="post" enctype="multipart/forms">
                        <button class="btn-dashboard" name="btn-ClockIn">Clock In</button>
                        <button class="btn-dashboard" name="btn-ClockOut">Clock Out</button>
                        <button class="btn-dashboard" name="btn-BeginBreak">Begin Break</button>
                        <button class="btn-dashboard" name="btn-EndBreak">End Break</button>
                    </form>
                    <div class="account-activities" id="account-activities">
                        <?php
                        date_default_timezone_set("Singapore");

                        if (isset($_POST['btn-ClockIn'])) {
                            echo "Logged In : " . date("l /Y /m /d - H:i:sa") . "<br>";
                        }

                        if (isset($_POST['btn-ClockOut'])) {
                            echo "Logged Out : " . date("l /Y /m /d - H:i:sa") . "<br>";
                        }

                        if (isset($_POST['btn-BeginBreak'])) {
                            echo "Begin Break : " . date("l /Y /m /d - H:i:sa") . "<br>";
                        }

                        if (isset($_POST['btn-EndBreak'])) {
                            echo "End Break : " . date("l /Y /m /d - H:i:sa") . "<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="post">
            <div class="post-container">
                <div class="post-form-container">
                    <h1 class="post-title">
                        Post an Event
                    </h1>
                    <form class="form-post" method="post" enctype="multipart/forms">
                        <input type="file" id="post-template" name="template" accept="image/png, image/jpeg">

                        <input type="text" name="title" id="title" placeholder="Title" required>

                        <input type="text" name="location" id="location" placeholder="Location" required>

                        <input type="text" name="message" id="message" placeholder="Message" required>

                        <div class="choices-container-row">
                            <label for="choices" class="label-for-choices">Where to post?</label>
                            <select name="choices" id="choices" class="select-choices" required>
                                <option value="None" class="option-choices">None</option>
                                <option value="Announcement and Events" class="option-choices">Announcement and Events</option>
                                <option value="Job Opportunities" class="option-choices">Job Opportunities</option>
                            </select>
                        </div>

                        <button class="btn-post">Post</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="events">
            <div class="events-container">
                <div class="announcement-and-events-container">
                    <div class="announcement-and-events-card-container">
                        <div class="announcement-and-events-cards-container">

                            <div class="announcement-and-events-card">
                                <div class="announcement-and-events-img-header">
                                    <img src="../../img/AnnouncementAndEvents-IMG/bg_announcement_events.jpg" alt="SAMPLE BG" class="announcement-and-events-img">
                                </div>
                                <span class="span-right"><a href="#" class="span-a">Edit Post</a>
                                    <hr><a href="#" class="span-a">Delete Post</a>
                                </span>
                                <div class="announcement-and-events-description">
                                    <h1 class="announcement-event-title-h1">Title</h1>
                                    <h3 class="supporting-details-h3">Bacoor, Philippines</h3>
                                    <p class="announcement-and-events-description-p">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum iure dignissimos laborum, velit fugit quisquam.
                                    </p>
                                </div>
                            </div>


                            <div class="announcement-and-events-card">
                                <div class="announcement-and-events-img-header">
                                    <img src="../../img/AnnouncementAndEvents-IMG/bg_announcement_events.jpg" alt="SAMPLE BG" class="announcement-and-events-img">
                                </div>
                                <span class="span-right"><a href="#" class="span-a">Edit Post</a>
                                    <hr><a href="#" class="span-a">Delete Post</a>
                                </span>
                                <div class="announcement-and-events-description">
                                    <h1 class="announcement-event-title-h1">Title</h1>
                                    <h3 class="supporting-details-h3">Bacoor, Philippines</h3>
                                    <p class="announcement-and-events-description-p">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum iure dignissimos laborum, velit fugit quisquam.
                                    </p>
                                </div>
                            </div>


                            <div class="announcement-and-events-card">
                                <div class="announcement-and-events-img-header">
                                    <img src="../../img/AnnouncementAndEvents-IMG/bg_announcement_events.jpg" alt="SAMPLE BG" class="announcement-and-events-img">
                                </div>
                                <span class="span-right"><a href="#" class="span-a">Edit Post</a>
                                    <hr><a href="#" class="span-a">Delete Post</a>
                                </span>
                                <div class="announcement-and-events-description">
                                    <h1 class="announcement-event-title-h1">Title</h1>
                                    <h3 class="supporting-details-h3">Bacoor, Philippines</h3>
                                    <p class="announcement-and-events-description-p">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum iure dignissimos laborum, velit fugit quisquam.
                                    </p>
                                </div>
                            </div>


                            <div class="announcement-and-events-card">
                                <div class="announcement-and-events-img-header">
                                    <img src="../../img/AnnouncementAndEvents-IMG/bg_announcement_events.jpg" alt="SAMPLE BG" class="announcement-and-events-img">
                                </div>
                                <span class="span-right"><a href="#" class="span-a">Edit Post</a>
                                    <hr><a href="#" class="span-a">Delete Post</a>
                                </span>
                                <div class="announcement-and-events-description">
                                    <h1 class="announcement-event-title-h1">Title</h1>
                                    <h3 class="supporting-details-h3">Bacoor, Philippines</h3>
                                    <p class="announcement-and-events-description-p">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum iure dignissimos laborum, velit fugit quisquam.
                                    </p>
                                </div>
                            </div>


                            <div class="announcement-and-events-card">
                                <div class="announcement-and-events-img-header">
                                    <img src="../../img/AnnouncementAndEvents-IMG/bg_announcement_events.jpg" alt="SAMPLE BG" class="announcement-and-events-img">
                                </div>
                                <span class="span-right"><a href="#" class="span-a">Edit Post</a>
                                    <hr><a href="#" class="span-a">Delete Post</a>
                                </span>
                                <div class="announcement-and-events-description">
                                    <h1 class="announcement-event-title-h1">Title</h1>
                                    <h3 class="supporting-details-h3">Bacoor, Philippines</h3>
                                    <p class="announcement-and-events-description-p">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum iure dignissimos laborum, velit fugit quisquam.
                                    </p>
                                </div>
                            </div>

                            
                            <div class="announcement-and-events-card">
                                <div class="announcement-and-events-img-header">
                                    <img src="../../img/AnnouncementAndEvents-IMG/bg_announcement_events.jpg" alt="SAMPLE BG" class="announcement-and-events-img">
                                </div>
                                <span class="span-right"><a href="#" class="span-a">Edit Post</a>
                                    <hr><a href="#" class="span-a">Delete Post</a>
                                </span>
                                <div class="announcement-and-events-description">
                                    <h1 class="announcement-event-title-h1">Title</h1>
                                    <h3 class="supporting-details-h3">Bacoor, Philippines</h3>
                                    <p class="announcement-and-events-description-p">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum iure dignissimos laborum, velit fugit quisquam.
                                    </p>
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
                                <a href="../../public/AboutUs.php" class="footer-nav-a">About Us</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="../../public/Jobs.php" class="footer-nav-a">Careers</a>
                            </li>
                            <li class="footer-nav-li">
                                <a href="../../public/Contact.php" class="footer-nav-a">Contact Form</a>
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

    <script src="../../js/WebAdmin.js"></script>

</body>

</html>