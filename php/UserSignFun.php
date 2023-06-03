<?php
session_start();
require_once 'dbconnect.php';

if (isset($_POST["heredone"])) {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $profile = $_FILES["profile"]["name"];
    $profiletemp = $_FILES["profile"]["tmp_name"];
    $folder = "../img/Upload/" . $profile;

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($username) || empty($email) || empty($password)) {
        array_push($errors, "All fields are required");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    // Check if there are any errors
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo ("<div class=\"alert alert-error\">
                <p>$error</p></div>");
        }
    } else {
        // Process the file upload
        
            if (move_uploaded_file($profiletemp, $folder)) {
                // File uploaded successfully
                echo "Profile picture uploaded successfully.";
            } else {
                // Error uploading file
                echo "Error uploading profile picture.";
            }


        // Insert user data into the database
        $sql = "INSERT INTO clients (email, name, password, profile_picture) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $email, $username, $passwordHash, $profile);
            mysqli_stmt_execute($stmt);

            // Redirect to the landing page after successful registration
            header("Location: ../index.php");
            die();
        } else {
            echo ("<div class=\"alert alert-error\">
                <p>Something went wrong</p></div>");
        }
    }
}
?>
