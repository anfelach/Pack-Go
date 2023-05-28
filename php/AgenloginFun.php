<?php
            session_start();
            if (isset($_SESSION["user"])) {
                header("Location: logged.php");
            }
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $pass= $_POST["psw"];

                require_once "dbconnect.php";
                $sql = "SELECT * FROM agencies WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                if ($user) {
               
                    if (password_verify($pass, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                    
                        header("Location: logged.php");
                        die();
                    }else{
                        echo ("<div class=\"alert alert-error\">
                        <p>Password does not match !</p></div>");
                    }
                }else{
                    echo ("<div class=\"alert alert-error\">
                    <p>Email does not match !</p></div>");
                }
            }
        ?>