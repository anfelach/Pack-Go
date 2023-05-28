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
    <form method="" action="" >
        <label for="Title" class="Titlel">Title:</label>
        <input type="text" class="Title" name="title" placeholder="Title" required>
        <label for="Destination" class="Destinationl">Destination:</label>
        <input type="text" class="Destination" name="name" placeholder="Destination" required>
        <label for="Description" class="Descriptionl">Description:</label>
        <textarea class="Description" name="description" placeholder="Description" required></textarea>
        <label for="Price" class="Pricel">Price:</label>
        <input type="text" class="Price" name="price" placeholder="price" required>
        <label for="AvailPlac" class="AvailPlacl">Available Places:</label>
        <input type="number" class="AvailPlac" name="AvailPlac" placeholder="Available Places" required>
        <label for="Departure_Date" class="DepartureDatel">Departure Date: </label>
        <input type="date" class="Departure_Date" name="Departure_date" required>
        <label for="Departure_Place" class="DeparturePlacel">Departure Place: </label>
        <input type="text" class="Departure_Place" name="Departure_place" placeholder="Departure Place" required>
        <label for="Duration" class="Durationl">Duration: </label>
        <input type= "number" class="Duration" name="Duration" placeholder="Duration" required>
        <button type="submit">Post</button>
    </form>
    </div>
    </div>
</body>

</html>