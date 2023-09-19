<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rekruter</title>

    <!-- Fonts -->
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <link href="swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">




</head>

<body class="antialiased">


    <header class="header">
        <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/logo.png" height="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/jobs">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/company">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/employe">Employee</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Page1</a></li>
                                <li><a class="dropdown-item" href="#">Pages2</a></li>
                                <li><a class="dropdown-item" href="#">Page3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="signin-btn"><a class="btn btn-sign" href="/signip">Signin</a></div>
            </div>
        </nav>
    </header>

    <main>
        <div class="layout-padding">
            @yield('content')
        </div>
    </main>

    <!-- Section Bottom -->
    <div class="bottom section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
                    <div class="bottom-logo"><img class="pb-15" src="images/logow.png" alt="">
                        <p>Rekruter is a unique and beautiful collection of UI elements that are all flexible
                            and modular. A complete and customizable solution to building the website of your
                            dreams.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">About us</h4>
                        <ul class="">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/jobs">Jobs</a></li>
                            <li><a href="/detail-jobs">Job Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Company</h4>
                        <ul>
                            <li><a href="/price">Pricing</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/company">Company</a></li>
                            <li><a href="/detail-com">Company Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Employee</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <ul>
                                    <li><a href="/employee">Employee</a></li>
                                    <li><a href="/employee/1">Employee details</a>
                                    </li>
                                    <li><a href="/404">Error</a></li>
                                    <li><a href="/">Activity</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <ul>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/blog/1">Blog details</a></li>
                                    <li><a href="/signin">Signin</a></li>
                                    <li><a href="/signup">Signup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Bottom --->
    <!-- Footer --->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright">
                        <p>© Copyright 2023 <a href="">Rekruter</a> All Rights
                            Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="footer-social">
                        <ul>
                            <li><a href=""><i class="bi bi-facebook"></i></a>
                            </li>
                            <li><a href=""><i class="bi bi-twitter"></i></a></li>
                            <li><a href=""><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li><a href=""><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin --->

    <!--- js ---->

    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap.min.js"></script>
    <script src="swiper/swiper-bundle.min.js"></script>
    <script src="wow/wow.min.js"></script>
    <script src="js/swiper.js"></script>
    <!-- fin script -->
</body>

</html>