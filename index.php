<html>
    <head>
		<title>Cahatfood - Home</title>

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
                background-image: url("./img/Cahatfood 01.png");
                min-height: 100%;
            }

            .bgimg-1a {
                background-image: url("./img/Cahatfood 01 - front.png");
                min-height: 100%;
            }

            .bgimg-1b {
                background-image: url("./img/Cahatfood 01 - back.png");
                min-height: 100%;
            }

            /* Second image (Portfolio) */
            .bgimg-2 {
                background-image: url("./img/Cahatfood 01.png");
                min-height: 400px;
            }

            .bgimg-3 {
                background-image: url("./img/Cahatfood 01 - back.png");
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

            .prombutton {
              background-color: #fef65b;
              -webkit-border-radius: 5px;
              border-radius: 5px;
              border: none;
              color: #FFFFFF;
              text-align: center;
              text-decoration: none;
            }
            @-webkit-keyframes glowing {
              0% { background-color: #000; -webkit-box-shadow: 0 0 3px #000; }
              50% { background-color: #fef65b; -webkit-box-shadow: 0 0 40px #fef65b; }
              100% { background-color: #000; -webkit-box-shadow: 0 0 3px #000; }
            }

            @-moz-keyframes glowing {
              0% { background-color: #000; -moz-box-shadow: 0 0 3px #000; }
              50% { background-color: #fef65b; -moz-box-shadow: 0 0 40px #fef65b; }
              100% { background-color: #000; -moz-box-shadow: 0 0 3px #000; }
            }

            @-o-keyframes glowing {
              0% { background-color: #000; box-shadow: 0 0 3px #000; }
              50% { background-color: #fef65b; box-shadow: 0 0 40px #fef65b; }
              100% { background-color: #000; box-shadow: 0 0 3px #000; }
            }

            @keyframes glowing {
              0% { background-color: #000; box-shadow: 0 0 3px #000; }
              50% { background-color: #fef65b; box-shadow: 0 0 40px #fef65b; }
              100% { background-color: #000; box-shadow: 0 0 3px #000; }
            }

            .prombutton {
              -webkit-animation: glowing 1500ms infinite;
              -moz-animation: glowing 1500ms infinite;
              -o-animation: glowing 1500ms infinite;
              animation: glowing 1500ms infinite;
            }
        </style>
    </head>
    <body>
    <!-- onload="openpromo()" -->
        <!-- START NAVIGATION BAR -->
        <div class="w3-top" style="background-color: #fff">
            <div class="w3-bar w3-card-2">
                <div class="container"  style="padding: 20px">
                        <a href="#Home">
                            <img src="./img/Cahatfood-tr.png" height="7%" width="10%">
                        </a>
                    <div class="navbar-right">
                        <a style="font-size:30px; cursor:pointer; color: #1b441b; z-index: 2; text-decoration:none" onclick="openNav()">&#9776;</a>   
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
                <h2> Cahatfood Snack is a healthy snack made from special cricket flour. </h2>
                <h4> Keeps you healthy and always better from anyone else. </h4>
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

        <!-- START MENU -->
        <div id="myNav" class="overlay" style="z-index: 3">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="z-index: 5">&times;</a>
            <div class="overlay-content w3-display-middle">
                <a href="#Home" onclick="closeNav()">Home</a>
                <a href="#Description" onclick="closeNav()">What is Cahatfood Snack?</a>
                <a href="#Reasons" onclick="closeNav()">Why Cahatfood?</a>
                <a href="#Nutrition" onclick="closeNav()">Nutrition Facts</a>
                <a href="#Order" onclick="closeNav()">Wanna Try?</a>
                <a href="#Team" onclick="closeNav()">Cahatfood's Team</a>
            </div>
        </div>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
        <!-- END MENU -->

        <!-- START PROMO SNACK LEBARAN -->
        <!-- <div id="promolebaran" class="overlay" style="z-index: 3">
            <a href="javascript:void(0)" class="closebtn" onclick="closepromo()" style="z-index: 5">&times;</a>
            <div class="overlay-content w3-display-middle w3-center">
                <a href="./fitr.php" class="w3-btn w3-block w3-yellow w3-center" style="width: 30%;" role="button">CLICK HERE FOR </br> PROMO EID AL-FITR !!</a>
            </div>
        </div>
        <script>
            function openpromo() {
                document.getElementById("promolebaran").style.width = "100%";
            }

            function closepromo() {
                document.getElementById("promolebaran").style.width = "0%";
            }
        </script> -->
        <!-- END PROMO SNACK LEBARAN -->

        <!-- START LINK PROMO -->
       <!--  <div class="w3-row w3-center w3-padding-jumbo" style="background-color: #e35a00; padding-top: 100px !important; color: #fff">
            <a href="./fitr.php" class="w3-btn w3-block w3-black w3-center prombutton" style="width: 30%;" role="button">CLICK HERE FOR PROMO EID AL-FITR !!</a>
        </div> -->
        <!-- END LINK PROMO -->

        <!-- START WHY CRICKETS -->
        <div class="w3-row w3-center w3-padding-16" style="background-color: #e35a00; color: #fff">
            <h2 class="w3-center">Why Crickets?</h2>
            <div class="w3-section w3-padding-jumbo">
                <h4 style="line-height: 2em; text-align: justify; text-justify: inter-word;">Crickets boast an excellent nutrient profile, providing a great source of lean protein, vitamins and minerals. Crickets contain about 65% protein, and other insects can contain up to 80% protein. Astonishingly, some insects have the same or greater amount of iron than beef. Crickets are a complete protein source, meaning they contain all of the essential amino acids. They also have omega 3 and 6 fatty acids, and are high in calcium and vitamin B12. </h4>
                <h4 style="line-height: 2em; text-align: center;">- Huffingtonpost -</h4>
            </div>
        </div>
        <!-- END WHY CRICKETS -->

        <!-- START WHAT IS CAHATFOOD PARALLAX -->
        <div class="w3-display-container" id="Description">
            <div class="bgimg-2" style="-webkit-filter: brightness(20%);filter: brightness(20%);"></div>
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">What Is Cahatfood Snack?</span>
            </div>
        </div>
        <!-- END WHAT IS CAHATFOOD PARALLAX -->
        
        <!-- START ABOUT CAHATFOOD CONTAINER -->
        <div class="w3-content w3-container w3-padding-64">
            <h2 class="w3-center">About Cahatfood</h2>
            <div class="w3-row">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <img src="./img/Cahatfood 01.png" class="w3-round w3-image w3-hover-opacity shadb" width="500" height="100%">
                </div>

                <!-- Hide this text on small devices -->
                <div class="w3-col m6 w3-hide-small w3-padding-large" style="text-align: justify; text-justify: inter-word;">
                    <h4>Cahatfood Snack is a snack which contains a cricket and spices from Indonesia. Rich with protein and minerals which is very convenient for you</h4>
                </div>
            </div>
        </div>

        <!-- START WHY CAHATFOOD CONTAINER -->
        <div class="w3-row w3-center w3-padding-16" id="Reasons" style="background-color: #f0eeeb; color: #001900 !important; padding-top: 100px !important">
            <h2 class="w3-center">Why Cahatfood?</h2>
            <div class="w3-quarter w3-section w3-padding-jumbo">
                <span class="w3-xlarge">
                    <img src="./img/leaf.png" width="90px" height="90px" style="margin-bottom:10px;">
                </span><br>
                <h3>Natural Ingredients</h3>
                <h5 style="text-align: justify; text-justify: inter-word;"> Cahatfood Snack is nutritious! Contains highly selected natural ingredients without any artificial food additives. Cahatfood Snack also enriched with Indonesian original spices.</h5>
            </div>
            <div class="w3-quarter w3-section w3-padding-jumbo">
                <span class="w3-xlarge">
                    <img src="./img/cricket.png" width="90px" height="90px" style="margin-bottom:10px;">
                </span><br>
                <h3>Made From Crickets</h3>
                <h5 style="text-align: justify; text-justify: inter-word;">Cahatfood Snack is made from crickets, which are high in proteins and can be consumed by vegans.</h5>
            </div>
            <div class="w3-quarter w3-section w3-padding-jumbo">
                <span class="w3-xlarge">
                    <img src="./img/easy.png" width="90px" height="90px" style="margin-bottom:10px;">
                </span><br>
                <h3>Protein In Just A Second</h3>
                <h5 style="text-align: justify; text-justify: inter-word;">Cahatfood Snack is practical! No matter where and no matter when, just unwrap it and taste its deliciousness without feeling guilty!</h5>
            </div>
            <div class="w3-quarter w3-section w3-padding-jumbo">
                <span class="w3-xlarge">
                    <img src="./img/cheap.png" width="90px" height="90px" style="margin-bottom:10px;">
                </span><br>
                <h3>Cheap</h3>
                <h5 style="text-align: justify; text-justify: inter-word;">Cahatfood Snack will boost your daily protein intake, by no spending much money (it is sold in an affordable price)</h5>
            </div>
        </div>
        <!-- END WHY CAHATFOOD CONTAINER -->

        <!-- START NUTRITION FACTS CONTAINER -->
        <div class="w3-row w3-center w3-padding-jumbo" style="background-color: #e35a00; padding-top: 100px !important; color: #fff" id="Nutrition">
            <h2 class="w3-center">Ingredients and Nutrition Facts</h2>
            <button onclick="myFunction('Original')" class="w3-btn w3-block w3-black w3-center" style="width: 30%;">Original</button>
            <button onclick="myFunction('Choco')" class="w3-btn w3-block w3-black w3-center" style="width: 30%;">Chocolate</button>
            <button onclick="myFunction('Straw')" class="w3-btn w3-block w3-black w3-center" style="width: 30%;">Strawberry</button>

            <div id="Original" class="w3-container w3-hide">
                <h3 class="w3-center">Original</h3>
                <img src="./img/ingredients-ori.png" width="50%" style="margin-bottom:10px;">
                <img src="./img/nutrition-ori.png" width="50%" style="margin-bottom:10px;">
            </div>
            <div id="Choco" class="w3-container w3-hide">
                <h3 class="w3-center">Chocolate</h3>
                <img src="./img/ingredients-cok.png" width="50%" style="margin-bottom:10px;">
                <img src="./img/nutrition-coklat.png" width="50%" style="margin-bottom:10px;">
            </div>
            <div id="Straw" class="w3-container w3-hide">
                <h3 class="w3-center">Strawberry</h3>
                <img src="./img/ingredients-stro.png" width="50%" style="margin-bottom:10px;">
                <img src="./img/nutrition-stroberi.png" width="50%" style="margin-bottom:10px;">
            </div>

            </div>
            <script>
            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            </script>
        </div>
        <!-- END NUTRITION FACTS CONTAINER -->

        <!-- START OFFER PARALLAX -->
        <div class="w3-display-container" id="Order">
            <div class="bgimg-3" style="-webkit-filter: brightness(20%);filter: brightness(20%);"></div>
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">Wanna Try? Tell Us!</span>
            </div>
        </div>
        <!-- END OFFER PARALLAX -->

        <!-- START ORDER CONTAINER -->
        <div class="w3-row w3-padding-jumbo w3-section" style="background-color: #e35a00; color: #fff; margin-top: 0 !important">
            <div class="w3-col m4 w3-container">
                <!-- Google Maps -->
                <div id="map" class="w3-round-large shadb">
                    <script>
                        function initMap() {
                            var myLatLng = {lat: -6.888308, lng: 107.608683};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: new google.maps.LatLng(-6.888308, 107.608683),
                                zoom: 16,
                                mapTypeControl: true,
                                styles: [
                                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                                    {
                                        featureType: 'administrative.locality',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#d59563'}]
                                    },
                                    {
                                        featureType: 'poi',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#d59563'}]
                                    },
                                    {
                                        featureType: 'poi.park',
                                        elementType: 'geometry',
                                        stylers: [{color: '#263c3f'}]
                                    },
                                    {
                                        featureType: 'poi.park',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#6b9a76'}]
                                    },
                                    {
                                        featureType: 'road',
                                        elementType: 'geometry',
                                        stylers: [{color: '#38414e'}]
                                    },
                                    {
                                        featureType: 'road',
                                        elementType: 'geometry.stroke',
                                        stylers: [{color: '#212a37'}]
                                    },
                                    {
                                        featureType: 'road',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#9ca5b3'}]
                                    },
                                    {
                                        featureType: 'road.highway',
                                        elementType: 'geometry',
                                        stylers: [{color: '#746855'}]
                                    },
                                    {
                                        featureType: 'road.highway',
                                        elementType: 'geometry.stroke',
                                        stylers: [{color: '#1f2835'}]
                                    },
                                    {
                                        featureType: 'road.highway',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#f3d19c'}]
                                    },
                                    {
                                        featureType: 'transit',
                                        elementType: 'geometry',
                                        stylers: [{color: '#2f3948'}]
                                    },
                                    {
                                        featureType: 'transit.station',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#d59563'}]
                                    },
                                    {
                                        featureType: 'water',
                                        elementType: 'geometry',
                                        stylers: [{color: '#17263c'}]
                                    },
                                    {
                                        featureType: 'water',
                                        elementType: 'labels.text.fill',
                                        stylers: [{color: '#515c6d'}]
                                    },
                                    {
                                        featureType: 'water',
                                        elementType: 'labels.text.stroke',
                                        stylers: [{color: '#17263c'}]
                                    }
                                ]
                            });
                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                            });
                        }
                    </script>
                    <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVcdqZ6XHMJmwsTvtviHP7EkysFBJFvoQ&callback=initMap">
                    </script>
                </div>
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>The Greater Hub Room, ITB-Freeport Building 4th Floor<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>08985050890<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>ask.cahatfood@gmail.com<br>
                </div>
                <p>Wanna Try Cahatfood Snack? Fill the form below:</p>
                <form method="post" action="./contact-form-handler.php" name="contact_form">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border shadb" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border shadb" type="text" placeholder="Email" name="email">
                        </div>
                    </div>
                    <textarea class="w3-input w3-border shadb" type="text" placeholder="Message" name="message"></textarea>
                    <button class="w3-btn w3-right w3-section shadb" type="submit" style="background-color: #1b441b">
                        <i class="fa fa-paper-plane"></i> Order Cahatfood Snack
                    </button>
                </form>
            </div>    
        </div>
        <!-- END ORDER CONTAINER -->

        <!-- START CONTACT CONTAINER -->
        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-content w3-container w3-padding-64" id="Team">
                <h2 class="w3-center">Cahatfood's Team</h2>
                <div class="row text-center" style="margin-top:50px">
                    <div class="col-md-12" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/David.jpg">
                        <h4 class="service-heading">David Wijaya</h4>
                        <h4 class="service-heading">Chief Executive Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/davidwijaya23/" target="blank">@davidwijaya23</a></h6>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="https://scontent-sit4-1.cdninstagram.com/vp/3952fb1d4e1b3489f6bff1ca043d2e35/5B2CCF1D/t51.2885-19/s150x150/20902682_1608379515879258_8664828045569294336_a.jpg">
                        <h4 class="service-heading">Cut Raisa Faratilla</h4>
                        <h4 class="service-heading">Chief Financial Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/raisafaratilla/" target="blank">@raisafaratilla</a></h6>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Rahel.jpg">
                        <h4 class="service-heading">Rahel Hasianna</h4>
                        <h4 class="service-heading">Chief Business Development Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/rahel_hasianna/" target="blank">@rahel_hasianna</a></h6>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Patricia.jpg">
                        <h4 class="service-heading">Patricia Santosa</h4>
                        <h4 class="service-heading">Chief Research Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/patriciasantosaa/" target="blank">@patriciasantosaa</a></h6>
                    </div>
                    <div class="col-md-6" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Buba.jpg">
                        <h4 class="service-heading">Mahbub Haq Al Farisi</h4>
                        <h4 class="service-heading">Chief Design Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/mahbubalfarisi/" target="blank">@mahbubalfarisi</a></h6>
                    </div>
                    <div class="col-md-6" style="padding-bottom: 50px;">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Atika.jpg">
                        <h4 class="service-heading">Atika Rahmawati Yuliantoputri</h4>
                        <h4 class="service-heading">Chief Technology and Operating Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/atikaryp/" target="blank">@atikaryp</a></h6>
                    </div>
                    <div class="col-md-6">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Bella.jpg">
                        <h4 class="service-heading">Bella Tania</h4>
                        <h4 class="service-heading">Chief Quality Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/bellaatania/" target="blank">@bellaatania</a></h6>
                    </div>
                    <div class="col-md-6">
                        <img class="w3-circle shadb" style="width:150px;" src="./img/Team/Davidi.jpg">
                        <h4 class="service-heading">Ignatius David</h4>
                        <h4 class="service-heading">Chief Marketing Officer</h4>
                        <h6 class="service-heading">Instagram: <a href="https://www.instagram.com/ig.dvd/" target="blank">@ig.dvd</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTACT CONTAINER -->

        <div class="w3-row w3-center" style="background-color: #fff;">
            <img src="./img/Cahatfood-tr.png" height="50px" width="120px">
            <h3 style="background-color: #fff; margin-bottom: 0 !important; padding: 20px"><a href="#Home" style="color:#1b441b !important">Back to Top</a></h3>
        </div>

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