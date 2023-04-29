
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <title>Sign Up</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="user_signup.css">
</head>
<body>
    
    <div class="label">
       <h1>Sign up</h1>
    </div>
    <form action="Signup_user.php" method="post"  class="Login">
        <div class="input-box">
            <label for="username" class="usernl">Username:</label>
            <input type="text" class="usern" name="username" placeholder="Username" >
            <label for="email" class="emaill">Email:</label>
            <input type="text" class="email" name="email" placeholder="Email" >
            <label for="password" class="passwl">Password:</label>
            <input type="password" class="passw" name="password" placeholder="password" >
            <label for="profile" class="prof">Profile photo</label>
            <input type="file" class="profile" name="profile">
            <input id="signup" type="submit" value="Register" name="heredone">
        </div>
    </form>
    <div class="signAgen">
        <a href="Signup_agency.php" class="link">Sign up as an Agency ?</a>
    </div>
    <div class="errors">
        <?php
        if (file_exists('dbconnect.php')) 
        {
            require 'dbconnect.php';
        }
        else {
            echo "File not found";
            die();
        }
        if (isset($_POST["heredone"])) {
            $email = $_POST["email"];
            $username = $_POST["username"]; 
            $password = $_POST["password"]; 
            $profile = $_POST["profile"];
           
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
           
            if (empty($username) OR empty($email) OR empty($password)) {
                array_push($errors,"All fields are required");
                
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
               
            }
            if (strlen($password)<8) {
                array_push($errors,"Password must be at least 8 charactes long");
                
            }
          
          
            $sql = "SELECT * FROM client WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0) {
                foreach ($errors as  $error) {
                    echo ("<div class=\"alert alert-error\">
                        <p>$error</p></div>");
                }
            }else{
                $sql = "INSERT INTO client (email, username, password, pfp) VALUES ( ?, ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sssb",$email, $username, $passwordHash, $profile);
                    mysqli_stmt_execute($stmt);
                    header("Location: landing_page.php");
                    die();
                }else{
                    die("Something went wrong");
                }
            }
        }
        ?>
    </div>
    
</body>
</html>