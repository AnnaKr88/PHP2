<?php include_once "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main">
        <div class="content">
            <?php foreach ($imgs as $img):?>

                    <div class="img-item">
                        <a href="full.php?id=<?=$img['id']?>" target="_blank"><img src="images/small/<?= $img['name']?>" alt="image" ></a>
                    </div>

                    <?php
                         endforeach; ?>
        </div>
        
    </div>
    
</body>
</html>
