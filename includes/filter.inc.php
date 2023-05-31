<?php

session_start();
include("../php/dbconnect.php");
    if(isset($_POST['request'])){
    $keyword = $_POST['request'];

    
    
    $sql = "SELECT * FROM trips WHERE price <= '$keyword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
                <div class="card">
                    <div class="card-img">
                    <img src="../images/Oran.jpg" alt="dd" height="134px" width="100%">
                     </div>
                    <div class="card-info">
                        <p class="text-title"><?php echo $row['title']?></p>
                        <p class="text-body"><?php echo $row['description']?></p>
                    </div>
                <div class="card-footer">
                    <span class="text-title">$<?php echo $row['price']?></span>
                <div class="card-button">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                    <image xlink:href="../images/Oran.jpg" width="100%" height="100%"/>
                    </svg>
                </div>
            </div>
                </div>
            <?php
        };
    } else {
        echo "No trips found.";
    }
}

else{
    echo 'NOT SET';
}
?>