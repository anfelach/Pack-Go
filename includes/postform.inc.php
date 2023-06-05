<?php
include("../php/dbconnect.php");
session_start(); 
// Get the post variables
$title = $_POST['title'];
$description = $_POST['description'];
$destination = $_POST['destination'];
$departure_date = $_POST['departure_date'];
$departure_place = $_POST['departure_place'];
$duration = $_POST['duration'];
$price = $_POST['price'];
$available_places = $_POST['available_places'];
//$image_url = $_POST['trip_url'];
$trip = $_FILES["trip_url"]["name"];
$triptemp = $_FILES["trip_url"]["tmp_name"];
$folder = "../img/Upload/" . $trip;

$email = $_SESSION['email'];


$sql = "SELECT id FROM agencies WHERE email = '" . $email . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$agency_id = $row['id'];        

$errors = array();

if (empty($title) || empty($description) || empty($destination) || empty($departure_place) ||
    empty($departure_date) || empty($duration) || empty($price) || empty($available_places) || empty($trip))
{     array_push($errors, "All fields are required");
    }

    if ((strlen($duration) < 0) || (strlen(($price) < 0))||(strlen(($available_places)) < 0)) {
        array_push($errors, "Enter A valid input");
    }
    // Process the file upload
    if (move_uploaded_file($triptemp, $folder)) {
        // File uploaded successfully
        echo " picture uploaded successfully.";
    } else {
        // Error uploading file
        echo "Error uploading picture.";
    }

    
    // prepare and bind
    $sql = "INSERT INTO trips (title ,description, destination, departure_date, departure_place, duration, price, available_places, agency_id,trip_url) 
    VALUES ('$title', '$description', '$destination', '$departure_date', '$departure_place', '$duration', '$price', '$available_places', '$agency_id','$trip')";

if ($conn->query($sql) === TRUE) {
    echo "New trip inserted successfully.";
    header('Location: ../Pages/trips.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$_SESSION["error"] = $errors;

?>
