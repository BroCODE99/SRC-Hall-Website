<?php 
    require_once '../database_connection/connection_instance.php';
    require_once '../functions/functions.php';

    if (isset($_GET['notice_page'])) {
        $notice_page = $_GET['notice_page'];
    } else {
        $notice_page = 1;
    }

    $num_per_page = 6;
    $start_page = ($notice_page - 1) * $num_per_page;

    $select_query = "SELECT * FROM notice ORDER BY news_id DESC LIMIT $start_page, $num_per_page;";
    $notice_stmt = $connection->prepare($select_query);
    $notice_stmt->execute();
    $notice = $notice_stmt->fetchAll();



?>


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
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="../index.php" class="navbar-brand"><img src="../media/logos/srch1.png" alt="logo"></a>
                <div class="navbar-nav">
                    <a  href="../index.php">home</a>
                    <a id="active-link" href="notice.php">Notice</a>
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
                <h1 class="banner-title"> HALL NOTICE</h1>
                <p>... exceeding expectations.</p>
            </div>
        </div>
    </header>
    <!-- end of header -->


    <!-- -------------------------------------------------------------- -->
    <section class="news-and-events-container">
        <section class="news-and-events-wrapper">
          <hr>
          <!-- <h2 class="header-text"> Hall News </h2> -->
          <!-- news -->
          <div class="news-wrapper">
                <!-- <h4> <i class="fas fa-square" ></i> LATEST NOTICE </h4> -->
                <section>
                    <!--  -->
                    <!-- <div class="card">
                        <a href="#">
                            <img src="../media/pictures/4.png" alt="pic">
                            <h3>Collection of books at the hall and on campus</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique nostrum perspiciatis itaque, deserunt </p>
                        </a>
                    </div> -->
                    <!--  -->

                    <!--  -->
              <?php foreach ($notice as $note) { ?> 
                <form action="../configuration/notice_view_config.php" method="post" class="card">
                <input type="hidden" name="news_id" value="<?= $note->news_id; ?>">
                <button type="submit">
                  <img src="../media/pictures/news_feed/<?= $note->image; ?>" alt="pic">
                  <h3><?= $note->headline; ?></h3>
                  <p><?= format_date($note->news_date); ?></p>
                  <p><?= substr($note->body,0,99); ?> </p>
                  <p class="secondary-btn" >Read more&gt;&gt;</p>
                </button>
                </form>
                <?php } ?>
              <!--  -->

                </section>
                
                <?php 

                    $all_notice_query ="SELECT * FROM notice;";
                    $all_notice_stmt = $connection->prepare($all_notice_query);
                    $all_notice_stmt->execute();
                    $total_num_notice = $all_notice_stmt->rowCount();


                    $total_page = ceil($total_num_notice/$num_per_page);
                ?>
                    <div class="pagination-wrapper">
                <?php

                    if ($notice_page > 1) { 
                ?>
                        <a href="notice.php?notice_page=<?=$notice_page-1?>" class="previous-btn"><i class="fas fa-step-backward" ></i></a>

                <?php }
                    for ($i=1; $i < $total_page; $i++) { 
                ?>
                        <a href="notice.php?notice_page=<?=$i?>" class="pagination-btn"><?=$i?></a>
                <?php } 
                
                    if ($i > $notice_page) {
                ?>
                        <a href="notice.php?notice_page=<?=$notice_page+1?>" class="next-btn"><i class="fas fa-step-forward" ></i></a>
                  
                <?php
                        }
                ?>

                </div>



                



            </div>   
        </section>
    </section>    

          <!-- end latest of notice -->
          <!-- -------------------------------------------------------------------- -->
          <hr class="line-separator">


     



















<!-- font awesome js -->
<script src="../fontawesome/js/all.js"></script>
<script src="../js/index.js"></script>

    

<?php 
    include_once '../includes/footer.php';
?>

