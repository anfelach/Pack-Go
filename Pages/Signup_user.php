
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
    <link rel="stylesheet" href="../css/user_signup.css">
</head>
<body>
    <?php include "header.php";?>
    
    <div class="label">
       <h1>Sign up</h1>
    </div>
    <form action="../php/UserSignFun.php" method="post" enctype="multipart/form-data" class="Login">
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
    </div>
    </div>
                <!-- Error message div -->
                    <?php if (!empty($error)) : ?>
                    <div class="errors""><?php echo $error; ?></div>
                <?php endif; ?>
    
</body>
</html>