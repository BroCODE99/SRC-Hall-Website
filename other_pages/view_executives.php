<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>UCC SRC HALL | Executives </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <!-- css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/view_executives.css?v=<?= time();?>">
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
            <a href="../index.php" class="navbar-brand"><img src="../media/logos/srch1.png" alt="logo"></a>
                <div class="navbar-nav">
                    <a  href="../index.php">home</a>
                    <a href="news_feed.php">notice</a>
                    <!-- <a href="events.php">events</a> -->
                    <a href="gallery.php">gallery</a>
                    <a href="contact.php">contact</a>
                    <a href="about.php">about</a>
                    <!-- <a href="entertainment.html">entertainment</a> -->
                </div>
                <!-- ------------------------------- -->
                <!-- sidebar -->
                <?php 
                include '../includes/sidebar.html';      
                ?>
                <!--  -->
            </div>
        </nav>
        <div class="banner">
            <div class="container">
                <h2 class="banner-title"> HALL ADMINISTRATORS AND JCR EXECUTIVES  </h2>
                <p>...exceeding expectations.</p>
            </div>
        </div>
    </header>
    <!-- end of header -->


<!-- ------------------------------------------------------ -->


<section class="view-wrapper">
    <div class="hall-admin">
        <h2>Hall Administration</h2>
        <div class="hall-exec-group">
            <!--  -->
            <div class="executive-item">
                <img src="../media/pictures/4.png" alt="image">
                <span>PRESIDENT</span>
                <p>Jude Smith</p>
                <span>2015 - 2022</span>
            </div>

            <!--  -->

            <!--  -->
            <div class="executive-item">
                <img src="../media/pictures/4.png" alt="image">
                <span>PRESIDENT</span>
                <p>Jude Smith</p>
                <span>2015 - 2022</span>
            </div>

            <!--  -->

            <!--  -->
            <div class="executive-item">
                <img src="../media/pictures/4.png" alt="image">
                <span>PRESIDENT</span>
                <p>Jude Smith</p>
                <span>2015 - 2022</span>
            </div>

            <!--  -->

            <!--  -->
            <div class="executive-item">
                <img src="../media/pictures/4.png" alt="image">
                <span>PRESIDENT</span>
                <p>Jude Smith</p>
                <span>2015 - 2022</span>
            </div>
        </div>

    </div>
    <!-- ----------------- -->



    <!-- ----------------- -->
    <div class="jcr-executives">
    <h2>Junior Common Room (JCR) Executives</h2>

    </div>

</section>

<!-- end -->












    <!-- font awesome js -->
    <script src="../fontawesome/js/all.js"></script>
        <script src="../js/index.js"></script>



    <?php 
        include_once '../includes/footer.php';
    ?>