<?php
session_start();
require_once '../php/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="../css/trips.css">
  <title>trips</title>
</head>

<body>
  <header>
    <?php include "header.php"; ?>
  </header>

  <!-- end header -->
  <!-- section under-nav -->
  <section class="under-nav">
    <h2>Find Your Destination!</h2>
    <div class="search_bar">
      <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
        <g>
          <path
            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
          </path>
        </g>
      </svg>
      <input placeholder="Search" type="search" class="input">
    </div>
    <h3>Because traveling is a dream we make it reality</h3>
  </section>
  <!-- end section under-nav -->
  <!-- filter by price -->
  <div class="filter" id="filter-form">
    <label for="price" class="form-label">The maximum price</label>
    <input type="number" name="price" id='price' min="0" class="price" placeholder="Price">
  
  </div>
  <!-- Trips -->
  <div class="trips" id='trips'>
    <?php
    $sql = "SELECT * FROM trips";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // Loop through each trip and display data
      while ($row = $result->fetch_assoc()) {
        ?>
        <div class="card">
          <div class="card-img">
            <img src="../images/Oran.jpg" alt="dd" height="134px" width="100%">
          </div>
          <div class="card-info">
            <p class="text-title">
              <?php echo $row['title'] ?>
            </p>
            <p class="text-body">
              <?php echo $row['description'] ?>
            </p>
          </div>
          <div class="card-footer">
            <span class="text-title">$
              <?php echo $row['price'] ?>
            </span>
            <div class="card-button">
              <svg class="svg-icon" viewBox="0 0 20 20">
                <image xlink:href="../images/Oran.jpg" width="100%" height="100%" />
              </svg>
            </div>
          </div>
        </div>
      <?php }
      ;
    }
    ; ?>


  </div>
 

   <div class="SeeMore">
    <a href="" >See more</a>
   </div>

   <style>
    .SeeMore {
    position: relative;
    margin-top: 100px;

    height: 100px;
    width: 100%;
    left: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.SeeMore a {
    position: absolute;
    top: 0px;
    height: 50px;
    width: 150px;
    background-color: #1a192b;
    text-decoration: none;
    color: white;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.SeeMore a:hover {
    background-color: #85816B;
}

.filter {
  margin-bottom: 20px;
}

.form-label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.price {
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  width: 100%;
  box-sizing: border-box;
}

   </style>
  <script>
    

    function onPriceChange(event) {

      var maxPrice = $('#price').val(); 

      $.ajax({
        url: '../includes/filter.inc.php',
        method: 'POST',
        data: { request: maxPrice }, 
        beforeSend: function () {
          $("#trips").html("<span>Working...</span>");
        },

        success: function (response) {
          $('#trips').html(response);
        }
      });

    };

    function onSearch(event) {

      var maxPrice = $('#price').val(); 

     $.ajax({
      url: '../includes/filter.inc.php',
      method: 'POST',
      data: { request: maxPrice }, 
      beforeSend: function () {
        $("#trips").html("<span>Working...</span>");
      },

      success: function (response) {
        $('#trips').html(response);
      }
    });

    };
    $(document).ready(function () {
      $('#price').on('keyup change', onPriceChange);
});

  </script>
</body>

</html>