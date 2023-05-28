<?php
session_start();
require_once 'php/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <title>Landing page</title>
</head>

<body>
        
    <header>
    <h1 class="logo" href="landing_page.php">Pack&Go</h1>
    <div class="navigation">
        <a href="#discover">Discover With Us</a>
        <a href="./Pages/trips.php">Trips</a>
        <a href="./Pages/agencies.php">Agencies</a>
        <a href="#abouts">About us </a>
        
            <?php
            if (isset($_SESSION["user"])) {
                // User is logged in
                echo '<a href="./php/Logout.php" class="dropdown">Log out</a>';
            } else {
                // User is not logged in
                echo '
                <div class="dropdown">
                    <button class="dropbtn" onclick="toggleMenu()">Log in</button>
                    <div class="dropdown-content" id="menu">
                        <a href="./Pages/Login.php">Traveler</a>
                        <a href="./Pages/login_agency.php">Agency</a>
                    </div>
                </div>';
            }
            ?>
    </div>
    </header>


    <section class='c-slider'>
        <div class='c-slider-init'>

            <div class='c-slide' style='background-image:url("./images/Algeria.jpg")'>
                <div class='c-slide-content'>
                    <div class='c-wrap c-wrap--line'>
                        <h2 class='c-slide__title'>
                            Dicvover
                            <span class='c-slide__title--large'>Algeria</span>
                        </h2>
                    </div>
                    <div class='c-wrap c-wrap--small'>
                        <div class='c-slide__info'>
                            <h3 class='c-slide__subtitle'>With Pack&Go</h3>
                            <p class='c-slide__body'>Experience the allure of Algeria, where ancient ruins whisper tales of civilizations past. Explore Roman archaeological sites, stroll through charming traditional villages, and indulge in the vibrant flavors of Algerian cuisine.
                                From the Mediterranean coastline to the Sahara Desert, this country holds a world of wonders waiting to be discovered
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class='c-slide' style='background-image:url("./images/Airport.jpeg")'>
                <div class='c-slide-content'>
                    <div class='c-wrap c-wrap--line'>
                        <h2 class='c-slide__title'>
                            Find
                            <span class='c-slide__title--medium'>Your Agency</span>
                        </h2>
                    </div>
                    <div class='c-wrap c-wrap--small'>
                        <div class='c-slide__info'>
                            <h3 class='c-slide__subtitle'>With Pack&Go</h3>
                            <p class='c-slide__body'> Find your perfect travel agency, We've carefully curated a selection of top-notch agencies that will exceed your expectations.You can easily browse various agencies, ensuring you find the ideal match for your travel needs.Tap
                                on Agencies . Say goodbye to the hassle of searching and let Pack&Go connect you with the agency that will make your dream vacation a reality.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class='c-slide' style='background-image:url("./images/trip.jpg")'>
                <div class='c-slide-content'>
                    <div class='c-wrap c-wrap--line'>
                        <h2 class='c-slide__title'>
                            Find
                            <span class='c-slide__title--large'>Your Trip</span>
                        </h2>
                    </div>
                    <div class='c-wrap c-wrap--small'>
                        <div class='c-slide__info'>
                            <h3 class='c-slide__subtitle'>With Pack&Go</h3>
                            <p class='c-slide__body'>Embark on extraordinary journeys and discover your ideal trip. We've curated a diverse collection of unforgettable travel experiences, all available at your fingertips.Our platform has the perfect trip for you. Finding your
                                dream trip has never been easier. Start your next adventure today and let us guide you towards unforgettable memories.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <div class="cities" id="discover">
        <div class="Algiers"><a href="">Algiers</a></div>
        <div class="Setif"><a href="">Setif</a></div>
        <div class="Ghardaia"><a href="">Ghardaia</a></div>
        <div class="Oran"><a href="">Oran</a></div>
        <div class="Tlemcen"><a href="">Tlemcen</a></div>
        <div class="Bejaia"><a href="">Bejaia</a></div>
        <div class="Tamanrasset"><a href="">Tamanrasset</a></div>
        <div class="Constantine"><a href="">Constantine</a></div>
        <div class="Annaba"><a href="">Annaba</a></div>
    </div>
    <a id="Dest" href="trips.php">Top Destination</a>
    <div class="destination">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <a class="Agencies" id="Agen" href="agencies.php">Top Agencies</a>
    <div class="agencies">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <footer>
        <div class="logof">Pack&Go</div>
        <div class="paragraph">
            <p>Pack&Go is the first independent promoting website for algeria in the world, Discover new destination and spend great holidays and weekends away with your family and friends with the best agencies that you can find.
            </p>
        </div>
        <div class="aboutus" id="abouts">
            <p>About us</p>
            <div>
                <i><ion-icon name="mail"></ion-icon></i>
                <a href="">Email</a>
            </div>
            <div>
                <i><ion-icon name="logo-facebook"></ion-icon></i>
                <a href="">Facebook</a>
            </div>
            <div>
                <i><ion-icon name="logo-instagram"></ion-icon></i>
                <a href="">Instagram</a>
            </div>
            <div>
                <i><ion-icon name="logo-linkedin"></ion-icon></i>
                <a href="">LinkedIn</a>
            </div>

        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".c-slider-init").slick({
                dots: false,
                nav: false,
                arrows: false,
                infinite: true,
                speed: 1200,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                draggable: false,
                pauseOnFocus: false,
                pauseOnHover: false
            });

            jQuery(".slick-current").addClass("initialAnimation");

            let transitionSetup = {
                target: ".slick-list",
                enterClass: "u-scale-out",
                doTransition: function() {
                    var slideContainer = document.querySelector(this.target);
                    slideContainer.classList.add(this.enterClass);
                    jQuery(".slick-current").removeClass("animateIn");
                },
                exitTransition: function() {
                    var slideContainer = document.querySelector(this.target);
                    setTimeout(() => {
                        slideContainer.classList.remove(this.enterClass);
                        jQuery(".slick-current").addClass("animateIn");
                    }, 1000);
                }
            };

            var i = 0;
            // On before slide change
            jQuery(".c-slider-init").on("beforeChange", function(
                event,
                slick,
                currentSlide,
                nextSlide
            ) {
                if (i == 0) {
                    event.preventDefault();
                    transitionSetup.doTransition();
                    i++;
                } else {
                    i = 0;
                    transitionSetup.exitTransition();
                }

                jQuery(".c-slider-init").slick("slickNext");
                jQuery(".slick-current").removeClass("initialAnimation");
            });
        });
    </script>
    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu.style.display === "none") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        }
    </script>



</body>

</html>