
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>UCC SRC HALL | Notice </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


        <!-- css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/notice.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/gallery.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/contact.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/about.css?v=<?= time();?>">
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="../index.php" class="navbar-brand"><img src="../media/logos/srch1.png" alt="logo"></a>
                <div class="navbar-nav">
                    <a  href="../index.php">home</a>
                    <a id="active-notice" href="notice.php">Notice</a>
                    <!-- <a href="events.php">events</a> -->
                    <a id="active-gallery" href="gallery.php">gallery</a>
                    <a id="active-contact" href="contact.php">contact</a>
                    <a id="active-about" href="about.php">about</a>
                    <!-- <a href="entertainment.html">entertainment</a> -->
                </div>
                <!-- ------------------------------- -->
                <!-- sidebar -->
                <?php 
                    include '../includes/sidebar.html';      
                ?>
                <!--  -->
            </div>
     

