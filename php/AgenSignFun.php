<?php
session_start();

if (file_exists('dbconnect.php')) {
    require 'dbconnect.php';
} else {
    echo "File not found";
    die();
}

if (isset($_POST["heredone"])) {
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    $wilaya = $_POST["wilaya"];
    $phonenum = $_POST["phonenum"]; 

    // Check if a file was uploaded
    if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] === UPLOAD_ERR_OK) {
        $profile = $_FILES["profile"]["name"];
        $profile_tmp = $_FILES["profile"]["tmp_name"];

        // Move uploaded file to a permanent location
        move_uploaded_file($profile_tmp, "profile_images/" . $profile);
    } else {
        $profile = ""; // Default profile image if no file was uploaded
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($name) || empty($email) || empty($password) || empty($wilaya) || empty($phonenum)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if (strlen($phonenum) < 10) {
        array_push($errors, "Enter a correct phone number");
    }

    $sql = "SELECT * FROM agencies WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            array_push($errors, "Email already exists!");
        }
    } else {
        die("Something went wrong");
    }

    if (count($errors) > 0) {
        $_SESSION["error"] = implode("<br>", $errors);
        header("Location: Agency_signup.php");
        exit();
    } else {
        $sql = "INSERT INTO agencies (name, email, password, wilaya, phonenum, profile) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $passwordHash, $wilaya, $phonenum, $profile);
            mysqli_stmt_execute($stmt);
            header("Location: landing_page.php");
            exit();
        } else {
            die("Something went wrong");
        }
    }
}
?>
