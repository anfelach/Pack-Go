<?php
include("../php/dbconnect.php");

// Get the post variables
$title = $_POST['title'];
$description = $_POST['description'];
$destination = $_POST['destination'];
$departure_date = $_POST['departure_date'];
$departure_place = $_POST['departure_place'];
$duration = $_POST['duration'];
$price = $_POST['price'];
$available_places = $_POST['available_places'];
$email = $_POST['email'];
$image_url = $_POST['image_url'];

$sql = 'SELECT agency_id from agencies WHERE email = "$email" ';
$result = mysqli_query($db, $sql);
$agency_id = $result;


if (!empty($title) && !empty($description) && !empty($destination) && !empty($departure_place) &&
    !empty($departure_date) && !empty($duration) && !empty($price) && !empty($available_places) && !empty($agency_id) && !empty($image_url))
{   
    
    // prepare and bind
    $sql = "INSERT INTO trips (title ,description, destination, departure_date, departure_place, duration, price, available_places, agency_id,trip_url) 
    VALUES ('$title', '$description', '$destination', '$departure_date', '$departure_place', '$duration', '$price', '$available_places', '$agency_id','$image_url')";

if ($conn->query($sql) === TRUE) {
    echo "New trip inserted successfully.";
    header('Location: ../Pages/postingform.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 
}
?>