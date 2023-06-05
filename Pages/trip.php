<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Trips</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">  
    <link rel="stylesheet" href="../css/trips.css">


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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../css/trips.css" rel="stylesheet">


</head>
<body>
    <!-- hero-->

        <?php include"header.php";?>

    <?php
        $id = substr($_SERVER['QUERY_STRING'],3);
        $sql = "SELECT * FROM trips WHERE id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $agency_id = $row['agency_id'];
        $sqlag = "SELECT * FROM agencies WHERE id = '$agency_id'";
        $resultag = $conn->query($sqlag);
        $rowag = $resultag->fetch_assoc();

        $tripPicturePath = $row['trip_url'];

        // Generate the URL of the profile picture
        $tripPictureURL = "../img/Upload/" . $tripPicturePath;
?>  
<div class="container-fluid bg-primary py-5 mb-5 trip-hero" style="background: url(<?php echo $tripPictureURL; ?>); background-repeat: no-repeat; background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-4 pt-lg-5 mt-lg-5 text-center">
                <h1 class="mb-0"style="text-shadow: 2px 6px 4px rgba(0, 0, 0, 0.4);"><?php echo $row['title']?></h1>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="#" class="btn btn-lg btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Book Now</a> 
                </div>
            </div> 
        </div> 
    </div> 
    <!--end hero-->
    
    <!-- start trip info -->
    <div class="trip_info">
        <div class="container-xxl py-1">
            <div class="container">
                <div class="text-start wow fadeInUp" data-wow-delay="0.1s">

                    <h2>Organized trip to <?php echo $row['destination']?></h2> 
                    <p> from <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d1561e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <?php echo $row['departure_place']?> 
                        to <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d1561e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <?php echo $row['destination']?>
                    </p>
                    <h2>with <span><?php echo $rowag['name']?></span> </h2>
                </div>
            </div>
        </div>

        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-start wow fadeInUp" data-wow-delay="0.1s">
                    <h2> Description </h2>
                    <p><?php echo $row['description']?></p>
                </div>
            </div>
        </div>
        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-start wow fadeInUp" data-wow-delay="0.1s">
                    <div class="details">
                        <div class="Other_Departure_Dates">
                            <h2>Departure Date </h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline></svg><?php echo $row['departure_date']?><br>
                            </p>
                        </div>
                        <div class="pricing">
                            <div class="price_title">
                            <h2>Price: <?php echo $row['price']?> DA</h2>
                            </div> 
                            
                        </div>
                        <div class="places">
                            <h2> places available: <?php echo $row['available_places']?> place(s) </h2>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
     </div>
     <?php include "footer.php"; ?>
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
    <script src="../js/main.js"></script>

</body>
</html>