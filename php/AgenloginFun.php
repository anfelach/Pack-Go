<?php
            session_start();
            require_once 'dbconnect.php';

            if (isset($_SESSION["user"])) {
                header("Location: ../index.php");
                exit();
                
            }
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $pass= $_POST["psw"];

                
                $sql = "SELECT * FROM agencies WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_assoc($result);


                if ($user) {
                    if (password_verify($pass, $user["password"])) {
                        $_SESSION["user"] = "agency";
                        $_SESSION["username"] = $user["name"]; // Store the client's username in the session
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['password'] = $user['password'];  

                        header("Location: ../index.php");
                        exit();
                    } else {
                        $error = "Password does not match!";
                    }
                } else {
                    $error = "Email does not exist!";
                }
                
            
            // Store the error message in a session variable
            $_SESSION["error"] = $error;

            // Redirect back to the login page with the error message
            header("Location: ../Pages/LoginAgen.php");
            exit();
        }
        ?>