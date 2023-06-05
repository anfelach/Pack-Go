<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pack&Go</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!--Stylesheet -->
    <link href="../css/Agency_signup.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Sign Up</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Sign Up to Pack&Go to get the oppurtunity of benefiting from the various services we profide.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Sign Up </h6>
                        <h1 class="text-white mb-4">Sign Up as an Agency</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Agency Informations</h1>
                        <form method="post" action="../php/AgenSignFun.php" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent"  name="name" id="username" placeholder="Agency name">
                                        <label for="username">Agency Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" name="email" id="email" placeholder=" Agency Email">
                                        <label for="name">Agency Email</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        <input type="password" class="form-control bg-transparent datetimepicker-input" name="password" id="password" placeholder="Password" />
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        
                                        <select id="wilaya" class="form-control bg-transparent datetimepicker-input" name="wilaya">
                                            <option value="">Select a wilaya</option>
                                            <option value="Adrar">Adrar</option>
                                            <option value="Chlef">Chlef</option>
                                            <option value="Laghouat">Laghouat</option>
                                            <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                                            <option value="Batna">Batna</option>
                                            <option value="Béjaïa">Béjaïa</option>
                                            <option value="Biskra">Biskra</option>
                                            <option value="Béchar">Béchar</option>
                                            <option value="Blida">Blida</option>
                                            <option value="Bouira">Bouira</option>
                                            <option value="Tamanrasset">Tamanrasset</option>
                                            <option value="Tébessa">Tébessa</option>
                                            <option value="Tlemcen">Tlemcen</option>
                                            <option value="Tiaret">Tiaret</option>
                                            <option value="Tizi Ouzou">Tizi Ouzou</option>
                                            <option value="Algiers">Algiers</option>
                                            <option value="Djelfa">Djelfa</option>
                                            <option value="Jijel">Jijel</option>
                                            <option value="Sétif">Sétif</option>
                                            <option value="Saïda">Saïda</option>
                                            <option value="Skikda">Skikda</option>
                                            <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                                            <option value="Annaba">Annaba</option>
                                            <option value="Guelma">Guelma</option>
                                            <option value="Constantine">Constantine</option>
                                            <option value="Médéa">Médéa</option>
                                            <option value="Mostaganem">Mostaganem</option>
                                            <option value="M'Sila">M'Sila</option>
                                            <option value="Mascara">Mascara</option>
                                            <option value="Ouargla">Ouargla</option>
                                            <option value="Oran">Oran</option>
                                            <option value="El Bayadh">El Bayadh</option>
                                            <option value="Illizi">Illizi</option>
                                            <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                                            <option value="Boumerdès">Boumerdès</option>
                                            <option value="El Tarf">El Tarf</option>
                                            <option value="Tindouf">Tindouf</option>
                                            <option value="Tissemsilt">Tissemsilt</option>
                                            <option value="El Oued">El Oued</option>
                                            <option value="Khenchela">Khenchela</option>
                                            <option value="Souk Ahras">Souk Ahras</option>
                                            <option value="Tipaza">Tipaza</option>
                                            <option value="Mila">Mila</option>
                                            <option value="Aïn Defla">Aïn Defla</option>
                                            <option value="Naâma">Naâma</option>
                                            <option value="Aïn Témouchent">Aïn Témouchent</option>
                                            <option value="Ghardaïa">Ghardaïa</option>
                                            <option value="Relizane">Relizane</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input" id="phone" name="phonenum" placeholder="Phone Number" />
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        <input type="file" class="form-control bg-transparent datetimepicker-input" id="ProfilePic" name="profile" placeholder="Profile Picture" />
                                        <label for="ProfilePic"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit" name="heredone">Sign Up</button>
                                </div>
                                <p><?php  echo $_SESSION['error']; ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php include "footer.php"; ?>


</body>
</html>