<!DOCTYPE html>
<?php
include 'constants.php';
?>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo @$title; ?></title>


    <!-- [ FONT-AWESOME ICON ] 
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">


    <!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">

    <!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="css/color/themecolor.css">


</head>

<body>

    <!-- [ LOADERs ]

================================================================================================================================-->

    <div class="preloader">

        <div class="loader theme_background_color">

            <span></span>


        </div>
    </div>
    <!-- [ /PRELOADER ]

=============================================================================================================================-->

    <!-- [WRAPPER ]

=============================================================================================================================-->

    <div class="wrapper">

        <!-- [NAV]
 
============================================================================================================================-->

        <!-- Navigation
    ==========================================-->

        <nav class=" nim-menu navbar navbar-default navbar-fixed-top">

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="index.php"><?php echo $title[0]; ?><span class="themecolor">
                            <?php echo $title[1]; ?></span><?php for ($i = 2; $i < strlen($title); $i++) echo $title[$i]; ?></a>

                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home" class="page-scroll">
                                <h3>Home</h3>
                            </a></li>

                        <li><a href="#two" class="page-scroll">
                                <h3>About</h3>
                            </a></li>
 <li><a href="#three" class="page-scroll">
                                <h3>Contact</h3>
                            </a></li>
                        <li><a href="pro/individual_reg.php" class="page-scroll">
                                <h3>Passenger Portal</h3>
                            </a></li>

                        <li><a href="pro/adminsignin.php" class="page-scroll">
                                <h3>Admin</h3>
                            </a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->

        </nav>



        <!-- [/NAV]
 
============================================================================================================================-->


        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

        <section class="main-heading" id="home">

            <div class="overlay">

                <div class="container">

                    <div class="row">

                        <div class="main-heading-content col-md-12 col-sm-12 text-center">

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" MODERN RAILWAY, MODERN RAILWAY, MODERN RAILWAY"></span></h1>

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" MANAGEMENT SYSTEM, MANAGEMENT SYSTEM, MANAGEMENT SYSTEM"></span>
                            </h1>

                            <h2><p class="main-heading-text">WELCOME TO,<br />E - TICKETING FOR RAILWAYS</p></h2>

                            <div class="btn-bar">

                                <a href="pro/signin.php" class="btn btn-custom theme_background_color">Make Reservations Now</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </section>

     



        <!-- [ABOUT US]
 
============================================================================================================================-->

        <section class="aboutus white-background black" id="two">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center black">

                        <h3 class="title">ABOUT <span class="themecolor">US</span></h3>

                        <p >IndiGo is India’s largest passenger airline with a market share of 53.5% as of October, 2021. We primarily operate in India’s domestic air travel market as a low-cost carrier with focus on our three pillars – offering low fares, being on-time and delivering a courteous and hassle-free experience. IndiGo has become synonymous with being on-time.
Since our inception in August 2006, we have grown from a carrier with one plane to a fleet of 282 aircraft today. A uniform fleet for each type of operation, high operational reliability and an award winning service make us one of the most reliable airlines in the world.</p>

                    </div>

                </div>

                <div class="gap">


                </div>


                <div class="row about-box">

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-newspaper-o"></i>

                            <h4>Get Train Tickets from the comfort of your home</h4>

                            <p class="black">Book train tickets from anywhere using the robust ticketing platform
                                exclusively built to provide the passengers with pleasant ticketing experience. </p>

                        </div> <!-- / margin -->

                    </div> <!-- /col -->

                    <div class="col-sm-4 about-line text-center style color:red">

                        <div class="margin-bottom">

                            <i class="fa fa-diamond"></i>

                            <h4>Train & Ticketing related information at your fingertips</h4>

                            <p class="black">Checkout available seats, route information, fare information on real time
                                basis with Esheba Platform.</p>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-dollar"></i>

                            <h4>Pay Securely</h4>

                            <p class="black">Online payment. (NO REFUND!)</p>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                </div> <!-- /row -->





            </div>
        </section>
    </div>
<hr>
<section class="aboutus background black" id="three">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center white">

                        <h3 class="title">CONTACT <span class="themecolor">US</span></h3>
                    </div>

                </div>

                <div class="gap">


                </div>


                <div class="row about-box">

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-user" style='font-size:30px;color:white'></i>
<p style="color:white;"<h4><b>ISHWAR RUNWAL</b></h4></p>
<p style="color:white;"<span>&#128222;</span>+91 7725164930</p>
<a href="mailto:firstwebsite21@gmail.com"><p><span>&#x1F4E7;</span>ishwar@gmail.com</p></a>

                        </div> <!-- / margin -->

                    </div> <!-- /col -->

                    <div class="col-sm-4 about-line text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-user" style='font-size:30px;color:white'></i>

                            <p style="color:white;"<h4><b>PRANIT DHUPKAR</b></h4></p>
<p style="color:white;"<p><span>&#128222;</span>+91 7725164931</p>
       <a href="mailto:firstwebsite21@gmail.com"><p><span>&#x1F4E7;</span>pranit@gmail.com</p></a>


                        </div> <!-- / margin -->

                    </div><!-- /col -->

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-user" style='font-size:30px;color:white'></i>

            <p style="color:white;"<h4><b>ANURAG SHASTRI</b></h4></p>
<p style="color:white;"<p><span>&#128222;</span>+91 7725164932</p>

       <a href="mailto:firstwebsite21@gmail.com"><p><span>&#x1F4E7;</span>anurag@gmail.com</p></a>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                </div> <!-- /row -->





            </div>
        </section>



      



    </div>




























    <!-- [ /WRAPPER ]

=============================================================================================================================-->


    <!-- [ DEFAULT SCRIPT ] -->

    <script src="library/modernizr.custom.97074.js"></script>

    <script src="library/jquery-1.11.3.min.js"></script>

    <script src="library/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- [ PLUGIN SCRIPT ] -->

    <script src="library/vegas/vegas.min.js"></script>

    <script src="js/plugins.js"></script>

    <!-- [ TYPING SCRIPT ] -->

    <script src="js/typed.js"></script>

    <!-- [ COUNT SCRIPT ] -->

    <script src="js/fappear.js"></script>

    <script src="js/jquery.countTo.js"></script>

    <!-- [ SLIDER SCRIPT ] -->

    <script src="js/owl.carousel.js"></script>

    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/SmoothScroll.js"></script>


    <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>

</body>


</html>