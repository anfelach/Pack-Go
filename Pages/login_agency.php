<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <title>Login_agency</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <?php include 'header.php';?>
    <div class="left">
        <div class="Hey">Hey, Happy to see you</div>
       <div class="Ready-to"> Ready to <span class="PackGo" >Pack&Go</span>?</div>
    </div>
    <div class="right">
        <form action="../php/AgenloginFun.php" method="post" class="Login">
            <h1>Log in</h1>
            <div class="input-box">
                <label for="usern" class="usernl">mail:</label>
                <input type="text" class="usern" name="email" placeholder="enter your mail"  >
                <i class="useri"><ion-icon name="person"></ion-icon></i>
                <label for="passw" class="passwl" ">Password:</label>
                <input type="password" class="passw"  name="psw" placeholder="enter your password" >
                <i class="passi"><ion-icon name="lock-closed"></ion-icon></i>
                <div class="remember">
                    <input type="checkbox" name="" id="req">
                    <label for="req">Remember me</label>
                </div>
                <input type="submit" value="Login" name="login" >
                <p class="Noaccount">Don't have an account?</p>
                <a href="../Pages/Signup_agency.php" class="Signup">Sign up</a>
                
            </div>
        </form>
    </div>
</body>

</html>