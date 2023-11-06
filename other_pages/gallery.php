<?php
        require_once '../database_connection/connection_instance.php';
        require_once '../functions/functions.php';
    
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
    
        $num_per_page = 6;
        $start_page = ($page - 1) * $num_per_page;
    
        $select_query = "SELECT * FROM photos ORDER BY photo_id DESC LIMIT $start_page, $num_per_page;";
        $photo_stmt = $connection->prepare($select_query);
        $photo_stmt->execute();
        $photos = $photo_stmt->fetchAll();


?>

<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>UCC SRC HALL | Gallery </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/gallery.css?v=<?= time();?>">
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="../index.php" class="navbar-brand"><img src="../media/logos/srch1.png" alt="logo"></a>
                <div class="navbar-nav">
                    <a href="../index.php">home</a>
                    <a href="notice.php">notice</a>
                    <!-- <a href="events.php">events</a> -->
                    <a id = "active-link" href="gallery.php">gallery</a>
                    <a  href="contact.php">contact</a>
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
                <h1 class="banner-title">
                    HALL GALLERY
                </h1>
                <p>exceeding expectations.</p>
            </div>
        </div>
    </header>
    <!-- end of header -->




    <section class="gallery-container">
        <div class="gallery-wrapper container">
            <!-- <h2 class="photo-year">2023 PHOTOS</h2> -->
              <!--  -->

              <?php foreach ($photos as  $photo) { ?>
                    <div class="photo-card">
                        <img src="../media/pictures/gallery/<?= $photo->image ?>" alt="" id="<?= $photo->image ?>">
                    </div>
                <?php } ?>

            <!-- <div class="photo-card">
                <img src="../media/pictures/2a.png" alt="">
            </div> -->

        </div>


        

   

                <?php 

                    $all_photo_query ="SELECT * FROM photos;";
                    $all_photo_stmt = $connection->prepare($all_photo_query);
                    $all_photo_stmt->execute();
                    $total_num_photo = $all_photo_stmt->rowCount();


                    $total_page = ceil($total_num_photo/$num_per_page);
                ?>
                    <div class="pagination-wrapper">
                <?php

                    if ($page > 1) { 
                ?>
                        <a href="gallery.php?page=<?=$page-1?>" class="previous-btn"><i class="fas fa-step-backward" ></i></a>

                <?php }
                    for ($i=1; $i < $total_page; $i++) { 
                ?>
                        <a href="gallery.php?page=<?=$i?>" class="pagination-btn"><?=$i?></a>
                <?php } 
                
                    if ($i > $page) {
                ?>
                        <a href="gallery.php?page=<?=$page+1?>" class="next-btn"><i class="fas fa-step-forward" ></i></a>
                  
                <?php
                        }
                ?>

                </div>
        </section>

        <section class="hall-ariel-video" id="ariel_video">
            <div>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5IEUB4DuRRE?si=HXmP7EJkH3kchy2a&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;" allowfullscreen ></iframe>
            </div>
        </section>







    <div class="close-photo-btn">
        <i class="fas fa-close"></i>
    </div>
<!-- <section class="view-photo">
   
    <img src="../media/pictures/gallery/" alt="">
</section> -->















    

<!-- ----------------------------------------------------------------------- -->



        <!-- font awesome js -->
        <script src="../fontawesome/js/all.js"></script>
        <script src="../js/index.js"></script>

    

<?php 
    include_once '../includes/footer.php';
?>
