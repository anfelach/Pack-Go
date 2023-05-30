<?php
session_start();
require_once '../php/dbconnect.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Pack&Go</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body><header>
            <!-- Navbar & Hero Start -->
            <div class="container-fluid position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Pack&Go</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="../index.php" class="nav-item nav-link active">Home</a>
                            <a href="./about.php" class="nav-item nav-link">About</a>
                            <a href="./service.php" class="nav-item nav-link">Services</a>
                            <a href="./Agencies.php" class="nav-item nav-link">Agencies</a>
                            <a href="./Trips.php" class="nav-item nav-link">Trips</a>
                            <a href="./contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <?php
                

                    if (isset($_SESSION["user"])) {
                        // User is logged in
                        $userType = $_SESSION["user"]; // Assuming you have a "user" session variable that stores the user type
    
                        if ($userType === "client") {
                            // Client user
                            echo '
                            <div class="nav-item dropdown">
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4" data-bs-toggle="dropdown">' . $_SESSION["username"] . '</a>
                                <div class="dropdown-menu m-0">
                                    <a href="Pages/UserProfil.php" class="dropdown-item">My Profile</a>
                                    <a href="#" class="dropdown-item">My favoutites</a>
                                    <a href="php/Logout.php" class="dropdown-item">Log out</a>
            
                                </div>
                            </div>';
                        } elseif ($userType === "agency") {
                            // Agency user
                            echo '
                            <div class="nav-item dropdown">
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4" data-bs-toggle="dropdown">' . $_SESSION["username"] . '</a>
                                <div class="dropdown-menu m-0">
                                    <a href="Pages/AgencyProfil.php" class="dropdown-item">My Profile</a>
                                    <a href="#" class="dropdown-item">My trips</a>
                                    <a href="../php/Logout.php" class="dropdown-item">Log out</a>
            
                                </div>
                            </div>';
                        }
                    } else {
                        // User is not logged in
                        $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page file name
                        $hideLoginButton = ($currentPage === 'LoginUser.php' || $currentPage === 'SignUpUser.php' || $currentPage === 'LoginAgen.php' || $currentPage === 'SignUpAgency.php'); // Replace 'specific_page.php' with the actual page name where you want to hide the button
    
                        if (!$hideLoginButton) {
                            echo '
                            <div class="nav-item dropdown">
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4" data-bs-toggle="dropdown">Log in</a>
                                <div class="dropdown-menu m-0">
                                    <a href="./LoginUser.php" class="dropdown-item">Traveler</a>
                                    <a href="./LoginAgen.php" class="dropdown-item">Agency</a>
            
                                </div>
                            </div>';
                        }
                    }
                    ?>
                    </div>

                </nav>
        </header>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
    </body>
    </html>