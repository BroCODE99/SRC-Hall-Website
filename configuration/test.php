<?php
// include 'database_connection/connection_instance.php';

$image = dirname('media/pictures');
echo $image;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
    <img src="<?= '../' . $image . '/pictures/news_feed/presidential_debate.jpg' ?>" alt="">
</body>
</html>