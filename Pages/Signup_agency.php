
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
    <link rel="stylesheet" href="../css/Agency_signup.css">
    
</head>

<body>
    <div class="label">
        <p class="label-1">Sign up</p>
    </div>
    <form  method="post" action="../Signup_agency.php" class="Login">
        <div class="input-box">
            <label for="name" class="namel">Name:</label>
            <input type="text" class="name" name="name"  placeholder="Name" required>
            <label for="email" class="emaill">Email:</label>
            <input type="text" class="email" name="email"  placeholder="Email" required>
            <label for="password" class="passwl">Password:</label>
            <input type="password" class="passw" name="password" placeholder="Password" required>
            <label for="wil" class="will">Wilaya:</label>
            <select id="wilaya" class="wil" name="wilaya">
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
            <label for="phone" class="phonel">Phone Number:</label>
            <input type="text" class="phone" name="phonenum" placeholder="Phone Number" >
            <label for="profile" class="prof">Profile photo</label>
            <input type="file" class="profile" name="profile" id="profile">
            <input id="signup" type="submit" value="Register" name="heredone">
    </form>
    <div class="signclient">
        <a href="Signup_user.php" class="link">Sign up as a client ?</a>
    </div>
    <div class="errors"></div>
</body>
</html>