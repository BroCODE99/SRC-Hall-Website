<?php 
    // include_once 'includes/header.php';
    require_once 'database_connection/connection_instance.php';
    require_once 'functions/functions.php';

    $select_query = "SELECT * FROM notice ORDER BY news_id DESC LIMIT 0,6;";
    $notice_stmt = $connection->prepare($select_query);
    $notice_stmt->execute();
    $notice = $notice_stmt->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="media/logos/srch.png" type="image/x-icon">
    <title>UCC SRC HALL | Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
        <!--  css -->
    <link rel="stylesheet" href="css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="css/home.css?v=<?= time();?>">
  </head>
  <body>


<!-- ---------------------------------------------------------------------------- -->
    <!-- header -->
    <header id="top">
      <nav class = "navbar">
        <div class = "container">
          <div> <a href = "index.php" class = "navbar-brand"><img src="media/logos/srch1.png" alt="logo"></a> </div>
            <div class = "navbar-nav">
              <a id="active-link" href = "index.php">home</a>
              <a href = "other_pages/notice.php">notice</a>
              <!-- <a href = "other_pages/events.php">events</a> -->
              <a href = "other_pages/gallery.php">gallery</a>
              <a href = "other_pages/contact.php">contact</a>
              <a href = "other_pages/about.php">about</a>
              <!-- <a href = "entertainment.html">entertainment</a> -->
            </div>
            <!-- ------------------------------- -->
            <!-- sidebar -->
            <div class="sidebar-btn">
              <i class="fas fa-bars"></i>
            </div>
            <!-- --------- -->
            <div class="sidebar-wrapper">
            <div class="sidebar-close-btn">
              <i class="fas fa-close"></i>
            </div>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="other_pages/notice.php">Notice</a></li>
                <!-- <li><a href="other_pages/events.php">Events</a></li> -->
                <li><a href="other_pages/gallery.php">Gallery</a></li>
                <li><a href="other_pages/contact.php">Contact</a></li>
                <li><a href="other_pages/about.php">About</a></li>
              </ul>
            </div>
            <!--  -------------------->
        </div>
      </nav>
      
      <div class = "banner">
        <div class = "container">
          <h4 class = "welcome-text" >WELCOME TO</h4>
          <h4 class = "banner-title">The home of  the Innovators</h4>
          <p>we exceed expectations...</p>
          <div class="banner-btn">
            <a href="other_pages/gallery.php#ariel_video" class="primary-btn">WATCH THE VIDEO <i class = "fas fa-play-circle" ></i> </a>
            <a href="other_pages/gallery.php" class="secondary-btn">BROWSE GALLERY </i></a>
          </div>
        </div>
      </div>
    </header>
    <!-- end of header -->
<!-- ---------------------------------------------------------------------------- -->






<!--  being-innovator-wrapper -->

      <section class="being-an-innovator-wrapper">
        <h2>Being an Innovator</h2>
        <hr>
        <p>
          At the SRC Hall, we provide the most maintained, decent, attractive and comfortable accommodation facility for our students. We also ensure that students get value for money for services rendered at the Hall. In addition, we provide well maintained community oriented facilities where residents and staff are empowered to learn, innovate and succeed in achieving personal and institutional objectives.
        </p>
        <a href="other_pages/about.php" class="primary-btn"> MORE </a>
      </section>
<!-- ---------------------------------------------------------------------- -->


<!--  being-innovator-wrapper -->

      <section class="core-values-wrapper">
        <h2>Core Values</h2>
        <hr>
        <div class="core-values">
          <div class="item">
            <p><span>S</span> - Service </p>
            <p><span>R</span> - Respect </p>
            <p><span>C</span> - Co-operation </p>
          </div>

          <div class="item">
            <p><span>H</span> - Honesty </p>
            <p><span>A</span> - Accessibility </p>
            <p><span>L</span> - Leadership </p>
            <p><span>L</span> - Loyalty </p>
          </div>
        </div>
      </section>
    
  <!-- ----------------------------------------------------------------------------- -->

      <section class="news-and-events-container">
        <section class="news-and-events-wrapper">
          <hr>
          <h2 class="header-text"> LATEST NOTICE </h2>
          <!-- news -->
          <div class="news-wrapper">
            <!-- <h4> <i class="fas fa-square" ></i> LATEST NEWS </h4> -->
            <section>
              <!--  -->
              <!-- <div class="card">
                <a href="#">
                  <img src="media/pictures/news_feed/congrat.jpg" alt="pic">
                  <h3>Congratulations on your admission to University of Cape Coast (UCC)</h3>
                  <p>Monday, 12th October, 2023</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique nostrum perspiciatis itaque, deserunt </p>
                </a>
              </div> -->

              <!--  -->
              <?php foreach ($notice as $note) { ?> 
                <form action="configuration/notice_view_config.php" method="post" class="card">
                <input type="hidden" name="news_id" value="<?= $note->news_id; ?>">
                <button type="submit">
                  <img src="media/pictures/news_feed/<?= $note->image; ?>" alt="pic">
                  <h3><?= $note->headline; ?></h3>
                  <p><?= format_date($note->news_date); ?></p>
                  <p><?= substr($note->body,0,99); ?> </p>
                  <p class="secondary-btn" >Read more&gt;&gt;</p>
                </button>
                </form>
                <?php } ?>
              <!--  -->

              <!--  -->
              <!-- <form action="" method="post" class="card">
                <input type="hidden" name="news_id" value="1">
                <button type="submit">
                  <img src="media/pictures/news_feed/oct_aware.jpg" alt="pic">
                  <h3>Congratulations on your admission to University of Cape Coast (UCC)</h3>
                  <p>Monday, 12th October, 2023</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique nostrum perspiciatis itaque, deserunt </p>
                </button>
                </form> -->
              <!--  -->

            </section>

            
            <a href="other_pages/notice.php" class="primary-btn" >VIEW MORE STORIES</a>

          </div>
        </section>

      </section>

          <!-- end of notice -->
          <hr class="line-separator">


    <section class="exec-wrapper">
      <div class="hall-admin">
          <h2>Hall Administration</h2>
          <div class="hall-exec-group">
                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>

                <!--  -->

                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>

                <!--  -->

                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>

                <!--  -->

                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
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
          <div class="hall-exec-group">
                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>

                <!--  -->

                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>

                <!--  -->

                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>

                <!--  -->

                <!--  -->
                <div class="executive-item">
                    <img src="media/pictures/4.png" alt="image">
                    <span>PRESIDENT</span>
                    <p>Jude Smith</p>
                    <span>2015 - 2022</span>
                </div>
          </div>

        </div>

    </section>


















        <!-- font awesome js -->
        <script src="fontawesome/js/all.js"></script>
        <script src="js/index.js"></script>


<?php 
    include_once 'includes/footer.php';
?>