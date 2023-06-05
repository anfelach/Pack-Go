<?php

session_start();
include("../php/dbconnect.php");

    ?>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                  <h6 class="section-title bg-white text-center text-primary px-3">Trips</h6>
                  <h1 class="mb-5">Organized Trips</h1>
              </div>
              <div class="row g-4 justify-content-center">
    <?php
    if(isset($_POST['request1'])){
    $price = $_POST['request1'];
    }
    $destination = $_POST['request2'];
   
    $sql = "SELECT * FROM trips WHERE 1";
    if(isset($_POST['request1'])){
    $sql .= " AND price <= '$price'";
    }

    if(isset($_POST['request2']) && $destination !== "ALL"){
        $sql .= " AND destination = '$destination' ";
    }

  
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i> <?php echo $row['duration']?> day(s)</small>
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
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end trip -->
            <?php };};
            ?>

        </div>
<?php
     //else {
      //  echo "No trips found.";
    // }

?>