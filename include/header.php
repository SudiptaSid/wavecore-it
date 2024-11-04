<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/favicon.ico">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>WaveCore IT</title>
</head>

<body>
    <!-- Loader -->
    <div class="loaderWrapper">
        <div class="loader">
            <div class="inner innerOne"></div>
            <div class="inner innerTwo"></div>
            <div class="inner innerThree"></div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="mainHeader">
        <div class="ptrn">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-4 p-1 bg-primary"></div>
                    <div class="col-4 p-1 bg-info"></div>
                    <div class="col-4 p-1 bg-primary"></div>
                </div>
            </div>
        </div>
        <!-- Top Header -->
        <div class="topHeader">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="leftSec">
                            <p>
                                <em class="ri-map-2-line"></em> Ottawa, Ontario, Canada
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="rightSec">
                            <li>
                                <a href="tel:+1-613-319-8011">
                                    <em class="ri-phone-line"></em> +1-613-319-8011
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@wavecoreit.com">
                                    <em class="ri-mail-line"></em> info@wavecoreit.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="navbarArea" id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logoW.png" alt="">
                    </a>
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                        aria-controls="navbarOffcanvas">
                        <span class="burger-menu">
                            <span class="topBar"></span>
                            <span class="middleBar"></span>
                            <span class="bottomBar"></span>
                        </span>
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#home" class="nav-link active scroll">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link scroll">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#service" class="nav-link scroll">Services</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">Services</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#.php" class="nav-link">Unified Communications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#.php" class="nav-link">Implementation & Maintenance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#.php" class="nav-link">Integration & Development</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a href="#blogs" class="nav-link scroll">Our Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link scroll">Contact Us</a>
                            </li>
                        </ul>
                        <div class="othersOption">
                            <a class="sidebarToggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                                aria-controls="navbarOffcanvas">
                                <em class="ri ri-menu-2-line"></em>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="responsiveNavbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <em class="ri-close-line"></em>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <a class="accordion-button without-icon active scroll" href="#home">Home</a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon scroll" href="#about">About Us</a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon scroll" href="#service">Services</a>
                </div>
                <!-- <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseService" aria-expanded="false" aria-controls="collapseService">
                        Services
                    </button>
                    <div id="collapseService" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion7">
                                <div class="accordion-item">
                                    <a href="#.php" class="accordion-link">Unified Communications</a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#.php" class="accordion-link">Implementation & Maintenance</a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#.php" class="accordion-link">Integration & Development</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="accordion-item">
                    <a class="accordion-button without-icon scroll" href="#blogs">Our Blogs</a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon scroll" href="#contact">Contact Us</a>
                </div>
            </div>
            <div class="offcanvas-contact-info">
                <div class="copyright">
                    © WaveCoreIT 2024 All right reserved
                </div>
            </div>
        </div>
    </div>