<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Your Cars - Bienvenue sur le site de Yourcars</title>
    <link rel="icon" href="images/logo.webp" sizes="40  x40">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Your Cars - Bienvenue sur le site de Yourcars" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/blue-teal.css" rel="stylesheet" type="text/css">


    {{-- toaster notifications --}}
    {{-- <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

    {{-- <script>
        Configure Toastr
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script> --}}

    <style>
        .mobile-only {
            display: none !important;
        }

        @media (max-width: 768px) {
            .desktop-only {
                display: none !important;
            }
            .mobile-only {
                display: block !important;
            }
            .to-hide-mobile {
                display: none !important;
            }
        }
    </style>

</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div class="scrollbar"></div>
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('home') }}">
                                            <img class="logo-main" src="images/logo.webp" width="230" height="70"
                                                alt="">
                                            <img class="logo-mobile" src="images/logo.webp" width="150"
                                                height="40" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{ route('home') }}">Accueil</a></li>
                                    <li class="to-hide-mobile"><a class="menu-item" href="{{ route('home') }}#section-about">À Propos</a></li>
                                    <li class="to-hide-mobile"><a class="menu-item" href="{{ route('home') }}#section-gallery">Galerie</a></li>

                                    <li><a class="menu-item" href="{{ route('offers') }}">Offres</a></li>

                                    <li class="desktop-only"><a class="menu-item" href="{{ route('home') }}#section-location">Contact</a>

                                    <li class="mobile-only"><a class="menu-item" href="{{ route('contact') }}">Contact</a>


                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="{{ route('contact') }}" class="btn-line contact_navbar_btn">Contactez-Nous</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <!-- float text begin -->
            {{-- <div class="float-text">
                <div class="de_social-icons">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                </div>
                <span><a href="#">Suivez-nous</a></span>
            </div> --}}
            <!-- float text close -->
