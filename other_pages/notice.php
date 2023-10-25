<?php 
    include '../database_connection/connection_instance.php';

    $select_query = "SELECT * FROM news ORDER BY news_id DESC;";
    $news_stmt = $connection->prepare($select_query);
    $news_stmt->execute();
    $news = $news_stmt->fetchAll();

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
              <?php foreach ($news as $new) { ?> 
                <form action="" method="post" class="card">
                <input type="hidden" name="news_id" value="<?= $new->news_id; ?>">
                <button type="submit">
                  <img src="../media/pictures/news_feed/<?= $new->image; ?>" alt="pic">
                  <h3><?= $new->headline; ?></h3>
                  <p><?= $new->news_date; ?></p>
                  <p><?= $new->body; ?> </p>
                  <p class="secondary-btn" >Read more&gt;&gt;</p>
                </button>
                </form>
                <?php } ?>
              <!--  -->

                </section>
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

