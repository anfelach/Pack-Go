<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <title>Landing page</title>
</head>

<body>
    <header>
        <h1 class="logo">Pack&Go</h1>
        <div class="navigation">
            <a href="#discover">Discover With Us</a>
            <a href="#Dest">Trips</a>
            <a href="#Agen">Agencies</a>
            <a href="#abouts">About us </a>
            <button class="Log-Sign">
                <a href="logout.php"class="log">log out</a>
                </button>
        </div>
    </header>
    <div class="under-nav">
        <p class="welcome">Welcome to Algeria!</p>
        <p class="under-welcome">Because travelling is a dream, we make it reality</p>
    </div>

    <div class="map"></div>

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



</body>

</html>
