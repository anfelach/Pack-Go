<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agencies</title>
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

    <!-- Template Stylesheet -->
    <link href="../css/agencies.css" rel="stylesheet">
 </head>

    <body>

        <?php include "header.php";?>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Agencies</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Agencies</a></li>
                            
                        </ol>
                    </nav>
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
                  <h1 class="mb-5">Organized Trips</h1>
              </div>
              <div class="row g-4 justify-content-center">
                  
                  
              <?php
             $sql = "SELECT * FROM agencies";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                ?>
                  <!-- start trip -->
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="package-item">
                          <div class="overflow-hidden">
                              <img class="img-fluid" src="img/package-3.jpg" alt="">
                          </div>
                          <div class="d-flex border-bottom">
                              <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row['wilaya']?></small>
                              <small class="flex-fill text-center border-end py-2"></i> <?php echo $row['email']?></small>
                          </div>
                          <div class="text-center p-4">
                              <h3 class="mb-0"><?php echo $row['name']?> </h3>
                              <div class="mb-3">
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                              </div>
                              <p><?php echo $row['description']?></p>
                              <div class="d-flex justify-content-center mb-2">
                                  <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
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


        

    <? include "footer.php"?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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