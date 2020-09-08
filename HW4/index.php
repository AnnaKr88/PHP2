<?php include_once "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
</head>
<body>
    <div id="main">
        <div class="content">
            <?php foreach ($res as $img):?>

                    <div class="img-item" data-id="<?= $img['id']?>">
                        <img src="img/small/<?= $img['img']?>" alt="image">
                    </div>

                    <?php
                         endforeach; ?>
        </div>
        <form method="post"><input type="button" value="More" name="LM" onclick="loadMore()"></form>
    </div>
<script src="js/my.js" defer></script>

</body>
</html>
