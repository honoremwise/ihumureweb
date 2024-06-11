<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>ihumure@gmail.com</p>
                            <!-- <p><i class="fas fa-phone-alt"></i>+012 345 6789</p> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="">About</a>
                            <a href="">Privacy</a>
                            <a href="">Terms</a>
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->

        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="/">
                                <img src="assets/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <!-- <div class="b-ads">
                            <a href="/">
                                <img src="assets/img/ads-1.jpg" alt="Ads">
                            </a>
                        </div> -->
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/" class="nav-item nav-link active">Ahabanza</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Sub Item 1</a>
                                    <a href="#" class="dropdown-item">Sub Item 2</a>
                                </div>
                            </div> -->
                            <a href="/ubukerarugendo" class="nav-item nav-link">Ubukerarugendo</a>
                            <a href="/politike" class="nav-item nav-link">Politics</a>
                            <!-- <a href="single-page.html" class="nav-item nav-link">Single Page</a> -->
                            <a href="/politike" class="nav-item nav-link">Sport</a>
                            <a href="/muzika" class="nav-item nav-link">Music</a>
                            <!-- <a href="contact.html" class="nav-item nav-link">Contact Us</a> -->
                        </div>
                        <div class="social ml-auto">
                            <!-- <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touchs</h3>
                            <div class="contact-info" style="color:aliceblue">
                            ihumure.rw ni urubuga rwatangiye muri 2023 hashyira 2024 rufite intego zo gutangaza amakuru y’umwihariko abamenyesha ibibera hirya no hino. Kuva icyo gihe kugera ubu, ntituradohoka.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Tourism Links</h3>
                            <ul>
                                <li><a href="https://rdb.rw/">RDB</a></li>
                                <li><a href="https://www.oneandonlyresorts.com/">One and Only</a></li>
                                <li><a href="https://visitrwanda.com/tourism/">Visit Rwanda</a></li>
                                <li><a href="https://visitrwanda.com/interests/kings-palace/">Ancient King Palace</a></li>
                                <li><a href="https://rcb.rw/">Kigali Convetion Center</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Rwanda Sport Links</h3>
                            <ul>
                                <li><a href="https://www.ferwafa.rw/">Ferwafa</a></li>
                                <li><a href="https://rayonsports.rw/">Rayon Sport</a></li>
                                <li><a href="https://www.aprfc.rw/">APR FC</a></li>
                                <li><a href="https://www.facebook.com/MukuraVS1963/">Mukura FC</a></li>
                                <li><a href="https://www.facebook.com/OfficialSCKiyovuSports/">Kiyovu FC</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Menu Start -->
        <!-- <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Accessibility help</a>
                    <a href="">Advertise with us</a>
                    <a href="">Contact us</a>
                </div>
            </div>
        </div> -->
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="">ihumure.com</a>. All Rights Reserved</p>
                    </div>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- <div class="col-md-6 template-by">
                        <p>Designed By <a href="#">HTML Codex</a></p>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
