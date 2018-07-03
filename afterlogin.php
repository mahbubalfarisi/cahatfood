<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ENCRADLE - Just you and your baby</title>
    <link rel='shortcut icon' href="./img/favicon.ico" type='image/x-icon' />
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header navbar-left">
                <logo></logo>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="./index">
                            <img src="./img/homepage.png" border="1px" width="25px" height="25px">
                        </a>
                    </li>
                    <li>
                    </li>
                    <li></li>
                    <li>
                        <a class="page-scroll" href="#portfolio">MEET YOUR BABY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">HELP</a>
                    </li>
                    <li class="dropdown">
                        <a href="./user" class="dropbtn">
                            <img src="./img/user.png" width="25px" height="25px">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <iframe width="100%" height="480" src="https://www.youtube.com/embed/lnFWB1K2eEQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Need Help?</h2>
                    <h3 class="section-subheading text-muted">Tell us what you deserve</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="buttonkirim" class="btn btn-xl">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; ENCRADLE 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Peralatan Rumah Tangga</h2>
                                <p class="item-intro text-muted">UPS!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>This page is under construction! Please come back later!
                                    <p>
                                        <ul class="list-inline">
                                            <li>Deadline: Akhir November 2016</li>
                                            <li>Halaman RT</li>
                                            <li>Category: modal</li>
                                        </ul>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Elektronik</h2>
                                <p class="item-intro text-muted">UPS!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p>This page is under construction! Please come back later!
                                    <p>
                                        <ul class="list-inline">
                                            <li>Deadline: Akhir November 2016</li>
                                            <li>Halaman</li>
                                            <li>Category: modal</li>
                                        </ul>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Pakaian</h2>
                                <p class="item-intro text-muted">UPS!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>This page is under construction! Please come back later!
                                    <p>
                                        <ul class="list-inline">
                                            <li>Deadline: Akhir November 2016</li>
                                            <li>Halaman</li>
                                            <li>Category: modal</li>
                                        </ul>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Makanan dan Minuman</h2>
                                <p class="item-intro text-muted">UPS!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>This page is under construction! Please come back later!
                                    <p>
                                        <ul class="list-inline">
                                            <li>Deadline: Akhir November 2016</li>
                                            <li>Halaman</li>
                                            <li>Category: modal</li>
                                        </ul>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Kosmetik</h2>
                                <p class="item-intro text-muted">UPS!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>This page is under construction! Please come back later!
                                    <p>
                                        <ul class="list-inline">
                                            <li>Deadline: Akhir November 2016</li>
                                            <li>Halaman</li>
                                            <li>Category: modal</li>
                                        </ul>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Obat-Obatan</h2>
                                <p class="item-intro text-muted">UPS!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>This page is under construction! Please come back later!
                                    <p>
                                        <ul class="list-inline">
                                            <li>Deadline: Akhir November 2016</li>
                                            <li>Halaman</li>
                                            <li>Category: modal</li>
                                        </ul>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
</body>

</html>
