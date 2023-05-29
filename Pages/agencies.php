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
    <link rel="stylesheet" href="../css/agencies.css">
    <title>See more agencies</title>
</head>
<body>
<header><?php include "header.php"; ?></header>
    <!-- end header -->
    <!-- section under-nav -->
   <section class="under-nav">
      <h2>Find Your Agency!</h2>
      <input type="search">
      <h3>Because traveling is a dream we make it reality</h3>
   </section>
   <!-- end section under-nav -->
   <!-- Agencies -->
   <div class="agencies">
          <a href="" >
            <p class="info">Some info#1</p>
            <p class="info">Some info#2</p>
          </a>
          <a href="">
            <p class="info">Some info#1</p>
            <p class="info">Some info#2</p>
          </a>
          <a href="">
            <p class="info">Some info#1</p>
            <p class="info">Some info#2</p>
          </a>
          <a href="">
            <p class="info">Some info#1</p>
            <p  class="info">Some info#2</p>
          </a>
          <a href="">
            <p class="info">Some info#1</p>
            <p class="info">Some info#2</p>
          </a>
          <a href="">
            <p class="info">Some info#1</p>
            <p class="info">Some info#2</p>
          </a>
        
   </div>
   <div class="SeeMore">
    <a href="" >See more</a>
   </div>
   
</body>
</html>