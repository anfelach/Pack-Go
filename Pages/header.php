 <?php 
 session_start();
 require_once '../php/dbconnect.php';
  ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Pack&Go</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- style css -->
    <link rel="stylesheet" href="../css/landing_page.css" />
    
    </head>


<body>
<header>
    <h1 class="logo" href="PackGo/landing_page.php">Pack&Go</h1>
    <div class="navigation">
        <a href="#discover">Discover With Us</a>
        <a href="./Pages/trips.php">Trips</a>
        <a href="./Pages/agencies.php">Agencies</a>
        <a href="#abouts">About us </a>
        <!--<button class="Log-Sign">
            <a href="login.php" class="log">Log in</a>
            </button>-->
            <?php
            
            if (isset($_SESSION["user"])) {
                // User is logged in
                echo '<a href="logout.php" class="dropdown">Logout</a>';
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
</body>
</html>