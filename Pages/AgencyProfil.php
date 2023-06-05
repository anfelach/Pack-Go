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

            
            // Retrieve the agency's profile information from the database using the email
            $id = substr($_SERVER['QUERY_STRING'],3);
            $sql = "SELECT * FROM agencies WHERE id = '$id'";
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
                         <?php if ($_SESSION['agencyin'] == 'in' && $row['name'] == $user["name"] )  { ?>
                        <div class="nav-item dropdown">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4" data-bs-toggle="dropdown">Manage my trips</a>
                            <div class="dropdown-menu m-0">
                                <a href="./PostForm.php" class="dropdown-item">Add a Trip</a>
                                <a href="#" class="dropdown-item">Delete a Trip</a>
                            </div>
                        </div>
                    <?php } ?>
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
                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        <p class="fs-4 text-white mb-4 animated slideInDown">Phone Number: <?php echo $row['phone']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        <p class="fs-4 text-white mb-4 animated slideInDown">Wilaya: <?php echo $row['wilaya']; ?></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package Start -->
    <div class="container-xxl py-5">
            <div class="container" id='trips'>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Trips</h6>
                    <h1 class="mb-5"><?php echo $row['name']; ?> Trips</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    
                    
                    <?php
                    $sql = "SELECT * FROM trips where agency_id= '$id' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $tripId = $row['id'];
                        // echo $tripId;



                        ?>
                        <!-- start trip -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="package-item">
                                <?php
                                // Retrieve the profile picture path from the database
                                    $tripPicturePath = $row['trip_url'];

                                    // Generate the URL of the profile picture
                                    $tripPictureURL = "../img/Upload/" . $tripPicturePath;
                                    ?>
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="<?php echo $tripPictureURL; ?>" alt="">
                                </div>
                                <div class="d-flex border-bottom">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row['destination']?></small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $row['duration'] ?> day(s)</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i><?php echo $row['available_places']?> place(s)</small>
                                </div>
                                <div class="text-center p-4">
                                    <h3 class="mb-0"><?php echo $row['price']?> DA</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <p><?php echo $row['description']?></p>
                                    <div class="d-flex justify-content-center mb-2">

                                    <a href="trip.php?id=<?php echo $tripId ; ?>" data-value="" id='readmore'  class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end trip -->
                        <?php };};
                        ?>

                </div>
            </div>
        </div>
        <!-- Package End -->
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