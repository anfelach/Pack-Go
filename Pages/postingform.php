<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/postingform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <title>Posting Form</title>
</head>

<body>
    <?php include "header.php" ?>
    <div class="bodyframe">
        <p>Add Your trip To Pack&Go:</p>
<div class="form">
<form method="post" action="../includes/postform.inc.php" >
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required><br>

    <label for="destination">Destination:</label>
    <input type="text" id="destination" name="destination" required><br>

    <label for="departure_date">Departure Date:</label>
    <input type="date" id="departure_date" name="departure_date" required><br>

    <label for="departure_place">Departure Place:</label>
    <input type="text" id="departure_place" name="departure_place" required><br>

    <label for="duration">Duration:</label>
    <input type="number" id="duration" name="duration" required><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required><br>

    <label for="available_places">Available Places:</label>
    <input type="number" id="available_places" name="available_places" required><br>

    <label for="agency_id">Agency ID:</label>
    <input type="number" id="agency_id" name="agency_id" required><br>
    <label for="image_url">Image_url:</label>
    <input type="text" id="image_url" name="image_url" required><br>

    <input type="submit" value="Submit">
  </form>
        <button type="submit">Post</button>
    </form>
    </div>
    </div>
</body>

</html>