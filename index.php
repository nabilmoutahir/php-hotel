<?php 
    require_once "./main.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>
<body>

    
    <?php foreach ($hotels as $hotel): ?>

        <div>
            <?= $hotel['name'] ?>
        </div>

        <div>
            <?= $hotel['description'] ?>
        </div>

        <div>
            <?= $hotel['parking'] ?>
        </div>

        <div>
            <?= $hotel['vote'] ?>
        </div>
        
        <div>
            <?= $hotel['distance_to_center'] ?>
        </div>


    <?php endforeach ?>    




    
</body>
</html>