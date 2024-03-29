<!DOCTYPE html>
<html lang="en">

<head>
    <title>INSURGEX-1.0 | Home</title> <!--Change the title with recent hackthon name-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/ONLY LOGO.jpg') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!--Google Font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Days+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo&family=Black+Ops+One&family=Carter+One&family=Exo+2&family=Montserrat+Alternates:wght@800&family=Viga&display=swap"
        rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Script -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/roboimgs.css') }}">
</head>

<body>
    <div class="container-fluid" id="particles-js"></div>
    <img src="{{ asset('images/Design2.svg') }}" alt="Design" id="d1" class="img-fluid vector_pos">
    <img src="{{ asset('images/Design.svg') }}" alt="Design" class="img-fluid vector_pos" id="d2">
    <img src="{{ asset('images/Vector.svg') }}" alt="Design" class="img-fluid vector_pos" id="d3">


    <header class="header">
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid px-0 px-md-1">
                <a class="navbar-brand ms-4 me-0" href="{{ route('index') }}">
                    <!--Hackthon LOGO.-->
                    <img src="{{ asset('images/logo without bg2.png') }}" width="auto" height="160px" alt="Logo"
                        class="justify-content-start d-inline-block insurg_logo align-text-top" id="logo">
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center container-fluid px-0" id="navbarNav">
                    <!--Navigation Bar items-->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link px-1" aria-current="page" href="#welcome">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#about">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#guideline">Guidelines</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" aria-current="page" href="#timeline">Timeline</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#prizes">Prizes</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#sponsers" target="_self">Sponsors</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('contactUs') }}" target="_self">Contact-us</a>
                        </li>


                        <!-- WILL BE UPDATED SOON -->

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More</a>
                            //Navigation drop don menu
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item dropdwn-shw" type="button"><a href="#sponsers"
                                        class="dd-item">Sponsers</a></button>
                                <button class="dropdown-item" type="button"><a href="{{ route('updates') }}"
                                        target="_self" class="dd-item">News-&-Updates</a></button>
                            </div>
                        </li> -->

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <!-- Welcome section-->
        <section id="welcome" class="shw_vwport">
            <div class="container">
                <div class="row">
                    <div class="topic-color text-sm-start">
                        <!--Hackthon main title.Can change with the time-->
                        <p class="welcome_para"><span class="st8_2_1">I</span>
                            <span class="st8_2">NSURGE</span>
                            <span class="st8_2_3">X</span>
                            <span class="st8_2">1.0</span>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="order-md-last col-lg-4 col-md-6 mb-lg-0 text-sm-start year">2024
                        <div class="bg_Gvectors">
                            <img src="{{ asset('images/Manage.png') }}" class="bg_vector_Gimg " alt="peple manage">
                        </div>
                    </div>
                    <div class="order-md-first col-lg-8 col-md-6 text-md-start desc">
                        <!--Hackthon subtheme title. Change with the time-->
                        <div class="subtext text-sm-start ms-0 ">
                            <p>Storm&apos;s Rage Looms - Brace for Impact !</p>
                        </div>
                        <!--Hackthon Introduction paragraph-->

                        <p class="text-sm-start">Welcome to &apos;INSURGEX 1.0&apos;, algorithmic inter-faculty
                            hackathon event.
                            It&apos;s brought to you by the Computer
                            Science Student Community of University of Ruhuna.
                            Expect a great experience!

                        </p>
                       <!--<a href="{{ route('register') }}" target="_self"><button type="button"
                                class="btn btn-primary bttn text-center">
                                <span class="bttn-text">ENROLL NOW</span>
                            </button></a>--> 
                    </div>

                </div>
                <div class="row clock-row-margin">
                    <p class="text-center countdown_title  col-md-6">Registration closed</p>
                    <div class="countdown-container">
                        <div>
                            <p id="days" class="big-text">0</p>
                            <span class="countdown_title">Days</span>
                        </div>
                        <div>
                            <p id="hours" class="big-text">0</p>
                            <span class="countdown_title">Hours</span>
                        </div>
                        <div>
                            <p id="min" class="big-text">0</p>
                            <span class="countdown_title">Min</span>
                        </div>
                        <div>
                            <p id="sec" class="big-text">0</p>
                            <span class="countdown_title">Sec</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ABOUT section -->
        <section class="shw_vwport reveal" id="about">
            <div class="container">
                <div class="row text-sm-end ms-2">
                    <div class="section-topic">About</div>
                </div>
                <div class="row about">
                    <!--About us paragraph-->
                    <div class="text-sm-justify-center about-text">INSURGEX is an algorithmic coding competition
                        organized by
                        undergraduates of the Department of Computer Science at the University of Ruhuna.
                        We have organized this event through the &quot;HackerRank&quot;platform.
                        Participants are able to use any programming language they prefer.
                        It takes 03 hours to compete with a group consisting of a maximum of three members.
                        This algorithmic event is organized with the explicit purpose of enhancing the coding skills of
                        undergraduates.
                        This is taking place as a physical event, and winners will receive cash prizes and a valuable
                        certificate.
                        Additionally, all other participants will receive a digital certificate as an appreciation of
                        their participation and hard work.
                    </div>
                </div>
            </div>
        </section>

        <!--Robotimg 1-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R3.png') }}" class="guidelineimg" alt="Description of Image 1">
        </div>

        <!-- GUIDELINE section -->
        <section class="shw_vwport reveal" id="guideline">
            <div class="container ms-sm-2 ">
                <div class="row">
                    <div class="col-sm-10 ms-sm-4 text-sm-center offset-sm-1 section-topic">Guidelines</div>
                </div>
                <div class="row guideline">
                    <div class="col-sm-10  ms-sm-4 guideline-text">
                        <!--Guidline list-->
                        <ol>
                            <li style="text-align: left">
                                Participants must be undergraduates at the University of Ruhuna.
                            </li>
                            <li style="text-align: left">
                                Maximum three(3) members can allocate for each team.
                            </li>
                            <li style="text-align: left">
                                Each team is required to create a single HackerRank account
                            </li>
                            <li style="text-align: left">
                                Ensure that the username for the HackerRank account follows the
                                specific pattern provided by the organizers. For alignment with your
                                team's name, "CodeRangers," the username for,<br>
                                <p style="font-weight: bolder;text-align:left">HackerRank should be CodeRangers_IX1
                                    (TeamName_IX1).</p>
                            </li>
                            <li style="text-align: left">
                                Participants are required to bring their own laptops for the hackathon.
                                Ensure your devices are fully charged(Because charging ports are
                                limited).
                                If you need extension you can bring it.

                            </li>
                            <li style="text-align: left">
                                The hackathon will run for a set duration of 3 hours. Manage your time
                                properly.

                            </li>
                            <li style="text-align: left">
                                Your internet connection is provided by the Organizing team through
                                Wifi.
                            </li>
                            <li style="text-align: left">
                                Feel free to use any tools during the hackathon to enhance your coding
                                experience.
                            </li>
                            <li style="font-weight: bolder">
                                To see more guidelines, Please download the PDF from
                                below.
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row text-lg-start text-center pt-0">
                <a href="https://drive.google.com/file/d/1PBjR8wt4crCcOA60sxl0qg_edZOYUefh/view?usp=drive_link"
                    target="_blank"><button type="button" class="btn btn-primary bttn"><span
                            class="bttn-text">Download</span></button></a>
            </div>
        </div>

        <div class="bg_Tvectors">
            <img src="{{ asset('images/clockticks.png') }}" class="bg_vector_Timg " alt="peple manage">
        </div>

        <!--Robotimg 2-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R4.png') }}" class="timelineimg" alt="Description of Image 1">
        </div>
        <!-- TIMELINE section -->
        <section class="shw_vwport timeline " id="timeline">
            <div class="container-fluid">
                <div class="row mx-0 text-sm-center text-start">
                    <div class=" _timeline text-md-end section-topic">TimeLine</div>
                    <div class="timelineSec ms-sm-1 px-0">
                        <div class="phone-timeline"></div>
                        <div class=" left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Registration Open
                                </h2>
                                <small class="h6">13-Jan 2024</small>
                                <p>"The creative coding revolution has been unlocked as registration for our hackathon
                                    is now open."
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                        <div class=" right-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Workshop I</h2>
                                <small class="h6">16-Jan 2024</small>
                                <p>"Master the art of hackathon success in Workshop 1 by Team ExactPro-your guide to
                                    conquering the coding challenges ahead!"
                                </p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>

                        <div class="left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Event Announcement Ceremony
                                </h2>
                                <small class="h6">17-Jan 2024</small>
                                <p>"Exciting announcement: Unveiling our upcoming event that promises innovation,
                                    collaboration, and memorable
                                    experiences!"
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                        <div class="right-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Registration Close
                                </h2>
                                <small class="h6">18-Jan 2024</small>
                                <p>"Registration has closed. Get ready for an incredible event!"
                                </p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>

                        <div class="left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Hackathon
                                </h2>
                                <small class="h6">20-Jan 2024</small>
                                <p>"Get ready for Hackathon Day: where innovation meets competition, and coding prowess
                                    takes center stage!"
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                        <div class="right-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Workshop II
                                </h2>
                                <small class="h6">20-Jan 2024</small>
                                <p>"Dive into the world of Software Quality Assurance in Workshop 2 by Team ExactPro -
                                    sharpen your skills for top-tier software development!"
                                </p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>

        <!--Robotimg 3-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R7.png') }}" class="awardimg" alt="Description of Image 1">
        </div>



        <!-- AWARDS AND PRIZE section -->
        <section class="shw_vwport" id="prizes">
            <div class="section-topic text-center">Award and Prizes</div>
            <div class="container prize reveal mt-5">
                <div class="row justify-content-evenly">

                    <!-- 1 -->
                    <div class="prize-body reveal sp-prize col-lg  col-md mx-lg-4 mx-md-2 order-md-2">
                        <div class="info-box-name" style="font-weight: bold">1st</div>
                        <div class="card">
                            <img class="user-image" src="{{ asset('images/1.png') }}" alt="1nd">
                        </div>
                        <div class="info-box-name">Rs.30,000</div>
                    </div>

                    <!-- 2 -->
                    <div class="prize-body reveal col-lg col-md mx-lg-4 mx-md-2 order-md-1">
                        <div class="info-box-name" style="font-weight: bold">2nd</div>
                        <div class="card">
                            <img class="user-image" src="{{ asset('images/2.png') }}" alt="2nd">
                        </div>
                        <div class="info-box-name">Rs.20,000</div>
                    </div>

                    <!-- 3 -->
                    <div class="prize-body reveal sp-prize col-lg  col-md mx-lg-4 mx-md-2 order-md-3">
                        <div class="info-box-name" style="font-weight: bold">3rd</div>
                        <div class="card">
                            <img class="user-image" src="{{ asset('images/3.png') }}" alt="3nd">
                        </div>
                        <div class="info-box-name">Rs.10,000</div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--<div class="bg_Pvectors">
            <img src="{{ asset('images/target.png') }}" class="bg_vector_Pimg " alt="peple manage">
        </div>-->

        <!-- PARTNERSHIP and Sponsors section -->
        <section class="shw_vwport" id="sponsers">
            <div class="container-fluid reveal">
                <div class="section-topic text-center">Sponsors</div>
                <div class="container prize reveal mt-5 mb-3">
                    <div class="row justify-content-evenly">
                        <!-- 1 -->
                        <div class="prize-body spon reveal col-lg mx-lg-2 mx-md-1 col-md my-4">
                            <div class="card">
                                <img class="user-image wso2"
                                    src="{{ asset('images/Sponsors/wso2-vector-logo-2022.png') }}" alt="1nd">
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="prize-body spon reveal  col-lg mx-lg-2 mx-md-1 col-md my-4">
                            <div class="card">
                                <img class="user-image" src="{{ asset('images/Sponsors/Logo2.png') }}"
                                    alt="2nd">
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="prize-body spon reveal  col-lg mx-lg-2 mx-md-1 col-md my-4">
                            <div class="card">
                                <img class="user-image" src="{{ asset('images/Sponsors/LanLogo_kavithi.png') }}"
                                    alt="3nd">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -->
        <script type="text/JavaScript" src="{{ asset('js/shakerobo.js') }}"></script>
    </main>


    <!-- Footer-->
    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <!-- Footer Left-->
                <div class="col-lg-7 col-md-7 col-sm-12 lfooter text-center">
                    <span><i class="fa fa-home"></i></span><span class="ms-2">UNIVERSITY OF RUHUNA,
                        WELLAMADAMA<br>MATARA, SRI LANKA.</span>
                    <ul class="f-logo">
                        <li>
                            <a href="">
                                <div class="responsive-cssc-container">
                                    <img src="{{ asset('images/cssc logo.png') }}" class="cssc-logo"
                                        alt="Description of Image 1">
                                </div>
                            </a>

                        </li>
                    </ul>
                </div>

                <!-- Footer Right-->
                <div class="col-lg-5 col-md-5 col-sm-12 text-justify-center rfooter">
                    <!-- Social Media links -->
                    <ul class="f-contact">
                        <li>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/csscuor" target="_blank"><i
                                    class="fa fa-facebook-f social"></i></a><span
                                class="ms-lg-2">facebook.com/csscuor</span>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope"></i></span><span
                                class="ms-lg-2">insurgex.ruh@gmail.com</span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone"></i></span><span class="ms-2">+94 702392322</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <!-- Footer Copyrigth-->
            <small class="lead mb-0 cpyright">&copy; 2023-2024 CSSC. All rights reserved.</small>
        </div>
    </footer>


    <!-- Bootstrap JavaScript Libraries -->

    <script difer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script difer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script type="text/JavaScript" src="{{ asset('js/Particle/particles.js') }}"></script>
    <script type="text/JavaScript" src="{{ asset('js/Particle/app.js') }}"></script>
    <!-- Custom JavaScript -->
    <script type="text/JavaScript" src="{{ asset('js/main.js') }}"></script>


</html>
