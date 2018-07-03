<html>
    <head>
		<title>Crickbar - Home</title>

        <!-- CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet" >
        <link href="./css/bootstrap.css" rel="stylesheet" >
        <link href="./css/bootstrap-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Gambar tab browser -->
        <link rel="shortcut icon" href="./img/favicon.ico"/>

        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Lato", sans-serif;
            }
            body, html {
                height: 100%;
                color: #777;
                line-height: 1.8;
            }

            .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-1a, .bgimg-1b {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bgimg-1 {
                background-image: url("./img/front-ori.png");
                min-height: 100%;
            }

            .bgimg-1a {
                background-image: url("./img/front-coklat.png");
                min-height: 100%;
            }

            .bgimg-1b {
                background-image: url("./img/front-strawberry.png");
                min-height: 100%;
            }

            /* Second image (Portfolio) */
            .bgimg-2 {
                background-image: url("./img/actual.png");
                min-height: 400px;
            }

            .bgimg-3 {
                background-image: url("./img/back-ori.png");
                min-height: 400px;
            }

            .w3-wide {
                letter-spacing: 10px;
            }
            
            .w3-hover-opacity {
                cursor: pointer;
            }

            #map {
                width: 100%;
                height: 400px;
                background-color: grey;
            }

            @media only screen and (max-device-width: 1024px) {
                .bgimg-1, .bgimg-2 {
                    background-attachment: scroll;
                }
            }

            .overlay {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
                overflow-x: hidden;
                transition: 0.2s;
            }

            .overlay-content {
                position: relative;
                height: auto;
                width: 100%;
                text-align: center;
                margin-top: 30px;
            }

            .overlay a {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .overlay a:hover, .overlay a:focus {
                color: #f1f1f1;
            }

            .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
            }

            .shadb {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            @media screen and (max-height: 450px) {
              .overlay a {font-size: 20px}
              .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
              }
            }

            .mySlides {
                display:none;
            }
        </style>
    </head>
    <body onload="openpromo()">
        <!-- START NAVIGATION BAR -->
        <div class="w3-top" style="background-color: #e35a00">
            <div class="w3-bar w3-card-2">
                <div class="container">
                    <div class="navbar-left">
                        <a href="./index.php">
                            <img src="./img/logo.png" height="10%" width="20%">
                        </a>
                    </div>
                    <div class="navbar-right">
                        <a href="./index.php" class="fa fa-home" style="font-size:40px; cursor:pointer; color: #1b441b; z-index: 2; text-decoration:none"></a>   
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAVIGATION BAR -->

        <!-- START HOME SLIDES -->
        <div class="w3-display-container" id="Home">
            <div class="mySlides w3-animate-opacity bgimg-1"></div>
            <div class="mySlides w3-animate-opacity bgimg-1a"></div>
            <div class="mySlides w3-animate-opacity bgimg-1b"></div>
            <div class="w3-display-bottomleft w3-padding-jumbo" style="color: #1b441b">
                <h2> Wanna Order? Kindly chat with us: </h2>
                <h4> Whatsapp: +628985050890; +6285655667622 </h4>
                <h4> Line: mahbub.alfarisi </h4>
            </div>
        </div>
        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2500);    
        }
        </script>
        <!-- END HOME SLIDES -->

        <!-- START CONTACT CONTAINER -->
        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-content w3-container w3-padding-64" id="Team">
                <h2 class="w3-center">Crickbar's Team</h2>
                <div class="row text-center" style="margin-top:50px">
                    <div class="col-md-12" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/David.jpg">
                        <h4 class="service-heading">David Wijaya</h4>
                        <h4 class="service-heading">Chief Executive Officer</h4>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Rahel.jpg">
                        <h4 class="service-heading">Rahel Hasianna Tarihoran</h4>
                        <h4 class="service-heading">Chief Product Development Officer</h4>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Patricia.jpg">
                        <h4 class="service-heading">Patricia Santosa</h4>
                        <h4 class="service-heading">Chief Financial Officer</h4>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Desy.jpg">
                        <h4 class="service-heading">Tribuana Desy Ariyanti</h4>
                        <h4 class="service-heading">Chief Marketing and Business Development Officer</h4>
                    </div>
                    <div class="col-md-4">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Buba.jpg">
                        <h4 class="service-heading">Mahbub Haq Al Farisi</h4>
                        <h4 class="service-heading">Chief Technology Officer</h4>
                    </div>
                    <div class="col-md-4">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Dhani.jpg">
                        <h4 class="service-heading">Dwi Wahyu Rohmadhani</h4>
                        <h4 class="service-heading">Chief Design Officer</h4>
                    </div>
                    <div class="col-md-4">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Dudu.jpg">
                        <h4 class="service-heading">Dwi Wahyu Setiyani</h4>
                        <h4 class="service-heading">Chief Operating Officer</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTACT CONTAINER -->

        <script language="JavaScript">
            var frmvalidator  = new Validator("contactform");
            frmvalidator.addValidation("name","req","Please provide your name");
            frmvalidator.addValidation("email","req","Please provide your email");
            frmvalidator.addValidation("email","email", "Please enter a valid email address");
        </script>

        <!-- Layout -->
        <script src="./js/jquery.min.js" charset="utf-8"></script>
        <script src="./js/jquery-3.1.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        
        <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/w3.css">
	</body>
</html>