<!doctype html>
<html lang="en">

<head>
    <title>INSURGEX-1.0 | ContactUs</title> <!--Change the title with recent hackthon name-->
    <link rel="icon" type="image/x-icon" href="{{asset('images/ONLY LOGO.jpg')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Google Font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Days+One&display=swap" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Script -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">

</head>

<body>
    <header class="header">
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid px-0 px-md-1">
                <a class="navbar-brand ms-4 me-0" href="{{ route('index') }}">
                    <!--Hackthon LOGO.-->
                    <img src="{{ asset('images/logo_hrz.png') }}" width="auto" height="109px" alt="Logo"
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
                            <a class="nav-link px-1" aria-current="page" href="{{ route('index') }}#welcome">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('index') }}#about">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('index') }}#guideline">Guidelines</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" aria-current="page"
                                href="{{ route('index') }}#timeline">Timeline</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('index') }}#prizes">Prizes</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('index') }}#sponsers" target="_self">Sponsors</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('contactUs') }}" target="_self">Contact-us</a>

                        </li>

                        

                        <!-- WILL BE UPDATED SOON -->
                        <!--


                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More</a>-->

                        <!--Navigation drop don menu-->
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a href="{{ route('index') }}#sponsers"
                                    class="dd-item">Sponsers</a></button>
                            <button class="dropdown-item" type="button"><a href="{{ route('updates') }}"
                                    target="_self" class="dd-item">News-&-Updates</a></button>

                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <img src="{{ asset('images/Design2.svg') }}" alt="Design" id="d1" class="img-fluid vector_pos">
    <div class="container bdy">
        <div class="row justify-content-evenly">
            <!-- Card 1 -->
            <div class="card mx-2 mx-lg-2 ">
                <div>
                    <img class="user-image" src="{{ asset('images/Contacts/chair.png') }}" alt="Chair person Image">
                </div>
                <div class="info-box-name">
                    <h2>Thanuja Priyadarshane<br>(Chair)</h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>thanujapriyadarshane26@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: +94767274497</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card mx-2 mx-lg-2">
                <div><img class="user-image" src="{{ asset('images/Contacts/Secratary.png') }}" alt="Secratary Image">
                </div>
                <div class="info-box-name">
                    <h2>Chalani Chanchala<br>(Secretary) </h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>chalanichanchala18@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: +94776250496</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card mx-2 mx-lg-2 ">
                <div><img class="user-image" src="{{ asset('images/Contacts/Treasurer.png') }}"
                        alt="Treasurer Image">
                </div>
                <div class="info-box-name">
                    <h2>Buddhika Perera<br>(Treasurer)</h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>buddhikapereraofficial@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: 0701577670</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card mx-2 mx-lg-2 ">
                <div><img class="user-image"
                        src="{{ asset('images/Contacts/Programming.png') }}"alt="Programming leader Image">
                </div>
                <div class="info-box-name">
                    <h2>Isuru Shanaka<br>(Programming)</h2>

                </div>
                <div class="info-box">
                    <p>Email:<br>shanakaisuru11@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: 0768324613
                    </p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="card mx-2 mx-lg-2 ">
                <div><img class="user-image"
                        src="{{ asset('images/Contacts/Financial.png') }}"alt="Finance leader Image">
                </div>
                <div class="info-box-name">
                    <h2>Kushan Sandul<br>(Finance)</h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>kushanca20@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: 0777357473
                    </p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="card mx-2 mx-lg-2 ">
                <div><img class="user-image" src="{{ asset('images/Contacts/PR.png') }}" alt="User Image">
                </div>
                <div class="info-box-name">
                    <h2>Thejana Hirumal<br>(Public Relation)
                    </h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>thejanahirumal5@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: 0789389459
                    </p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="card mx-2 mx-lg-2 ">
                <div><img class="user-image" src="{{ asset('images/Contacts/logistics.png') }}" alt="User Image">
                </div>
                <div class="info-box-name">
                    <h2>Imasha Dilshan<br>(Logistics)
                    </h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>imashadilshan1080@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: 0769799502
                    </p>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="card mx-2 mx-lg-2 ">
                <div><img class="user-image" src="{{ asset('images/Contacts/Marketing.png') }}" alt="User Image">
                </div>
                <div class="info-box-name">
                    <h2>Malinda Sampath<br>(Marketing)
                    </h2>
                </div>
                <div class="info-box">
                    <p>Email:<br>malindasampath45@gmail.com</p>
                </div>
                <div class="info-box phone">
                    <p>Phone: 0701894658
                    </p>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Custom JavaScript -->
    <script type="text/JavaScript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
