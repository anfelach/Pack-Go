<?php
session_start();
require_once 'dbconnect.php';

if (isset($_POST["heredone"])) {
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    $wilaya = $_POST["wilaya"];
    $phonenum = $_POST["phonenum"]; 
    $profile = $_FILES["profile"]["name"];
    $profiletemp = $_FILES["profile"]["tmp_name"];
    $folder = "../img/Upload/" . $profile;

    

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($name) || empty($email) || empty($password) || empty($wilaya) || empty($phonenum)) {
        $errors[] = "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }
    if (strlen($phonenum) < 10) {
        $errors[] = "Enter a correct phone number";
    }

    $sql = "SELECT * FROM agencies WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            $errors[] = "Email already exists!";
        }
    } else {
        $errors[] = "Something went wrong";
    }

    if (count($errors) > 0) {
        $_SESSION["error"] = implode("<br>", $errors);
        header("Location: ../Pages/SignUpAgency.php");
        exit();
    } else {
        // Process the file upload
        if (move_uploaded_file($profiletemp, $folder)) {
            // File uploaded successfully
            echo "Profile picture uploaded successfully.";
        } else {
            // Error uploading file
            echo "Error uploading profile picture.";
        }

        $sql = "INSERT INTO agencies (name, email, password, phone, wilaya, profile_picture) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $passwordHash, $phonenum, $wilaya, $profile);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php");
            exit();
        } else {
            die("Something went wrong");
        }
    }
}

$_SESSION["error"] = $error;

// Redirect back to the signup page with the error message
header("Location: ../pages/SignUpAgency.php");
exit();

?>
