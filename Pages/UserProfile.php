<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
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
    <link href="../css/AgencyProfil.css" rel="stylesheet">
</head>

<body>
    
    <?php include "header.php"; ?>
        <?php
            session_start();
            // Include the necessary files and connect to the database
            require_once '../php/dbconnect.php';

            
            // Retrieve the user's profile information from the database using the email
            $useremail =$_SESSION['email'];
            $sql = "SELECT * FROM clients WHERE email = '$useremail'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();


            // Retrieve the profile picture path from the database
            $profilePicturePath = $row['profile_picture'];

            // Generate the URL of the profile picture
            $profilePictureURL = "../img/Upload/" . $profilePicturePath;
            ?>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
             <div class="container py-5">
                 <div class="row justify-content-center py-5">
                     <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                         <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row['name']; ?> Profile</h1>
                      </div>
                 </div>
             </div>
    </div> 
                   

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h1 class="text-white mb-4"><img src="<?php echo $profilePictureURL; ?>" alt="Profile Picture"></h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4"><?php echo $row['name']; ?> Informations</h1>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Name: <?php echo $row['name']; ?></p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date">
                                <p class="fs-4 text-white mb-4 animated slideInDown">Email: <?php echo $row['email']; ?></p>
                                    
                                </div>
                            </div>                     
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include"footer.php";?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Javascript -->
    <!--<script src="../js/main.js"></script>-->

    


</body>
</html>