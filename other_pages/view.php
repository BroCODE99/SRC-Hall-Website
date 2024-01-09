<?php 
   require_once '../database_connection/connection_instance.php';
   require_once '../functions/functions.php';
   session_start();



   if (isset($_SESSION['news_id'])) {
       $news_id = $_SESSION['news_id'];
   
       $select_query = "SELECT * FROM notice WHERE news_id = :news_id;";
       $notice_stmt = $connection->prepare($select_query);
       $notice_stmt->execute(['news_id' => $news_id]);
       $notice = $notice_stmt->fetch();


    //    ###############

        $select_all_query = "SELECT * FROM notice ORDER BY news_id DESC LIMIT 0,6;";
        $notice_all_stmt = $connection->prepare($select_all_query);
        $notice_all_stmt->execute();
        $notice_all = $notice_all_stmt->fetchAll();
   
   
   } else {
       header("Location: ../index.php");
       exit();
   }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>UCC SRC HALL </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <!-- css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/view.css?v=<?= time();?>">
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
            <a href="../index.php" class="navbar-brand"><img src="../media/logos/srch1.png" alt="logo"></a>
                <div class="navbar-nav">
                    <a  href="../index.php">home</a>
                    <a href="notice.php">notice</a>
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
        <!-- <div class="banner">
            <div class="container">
                <h1 class="banner-title"> HALL EVENTS  </h1>
                <p>...exceeding expectations.</p>
            </div>
        </div> -->
    </header>
    <!-- end of header -->


<!-- ------------------------------------------------------ -->


<section class="view-wrapper">
    <div class="main-story">
        <img src="../media/pictures/news_feed/<?= $notice->image ?>" alt="">
        <div class="story-body">
            <h3><?= $notice->headline ?></h3>
            <span><?= format_date($notice->news_date); ?></span>
            
            <?= create_paragraph($notice->body) ?>
            
            <!-- <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis ut quisquam omnis neque at ipsam nostrum vel tempore distinctio. Neque tempore ducimus amet possimus quibusdam aliquid laboriosam corporis quia omnis saepe quod ullam, mollitia, veniam asperiores nemo? Ex recusandae, non commodi dolores provident consequuntur, earum ullam in laboriosam maxime quis fugit quia? Repellendus ut, necessitatibus facilis porro vitae esse maxime molestias laborum minus nam, nobis neque cumque vel eveniet! Ullam, aliquam quidem pariatur voluptatibus totam, dolorum iusto harum quisquam corrupti voluptas quia sit 
            </p>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique cum, officiis assumenda, saepe fugit debitis provident illum porro vel at aspernatur necessitatibus repudiandae facere soluta facilis distinctio inventore quo, aliquid sequi labore exercitationem ipsam. Sint saepe voluptate itaque rerum tempora, repellat eveniet facere tenetur libero. Obcaecati deserunt temporibus id et! Placeat facilis fugiat eveniet eum quaerat soluta ipsam ullam reprehenderit quibusdam similique autem commodi, vero recusandae aspernatur nemo tempore molestias quam hic aut libero mollitia totam praesentium. Cupiditate velit alias neque laudantium asperiores mollitia, dicta reiciendis architecto molestiae sed quidem eius impedit nostrum maiores praesentium sint explicabo. Culpa, repellendus deserunt.
            </p> -->
        </div>
    </div>
   
        <!--  -->
</section>

<!-- end -->


<!-- more stories -->
<div class="section view-wrapper">
<h2 class="more-head-text">More Stories</h2>

    <div class="more-stories">
        <!--  -->
        
        <?php foreach ($notice_all as $note) { ?> 
            <div class="more-stories-item">
                <form action="../configuration/notice_view_config.php" method="post">
                <input type="hidden" name="news_id" value="<?= $note->news_id; ?>">
                  <img src="../media/pictures/news_feed/<?= $note->image; ?>" alt="pic">
                  <button type="submit">
                  <h3><?= $note->headline; ?></h3>
                  <span><?= format_date($note->news_date); ?></span>
                </button>
                </form>
            </div>
        <?php } ?>
       

        <!--  -->
<!--         
        <div class="more-stories-item">

            <a href="">
                <img src="../media/pictures/about-us.jpg" alt="">
                <div>
                    <h3>Hello everyone.</h3>
                    <span>Sunday, 13th May, 2020</span>
                    <p>
                    Obcaecati deserunt temporibus id et! Placeat facilis fugiat eveniet eum quaerat soluta ipsam ullam reprehenderit
                    </p>
                </div>
            </a>
        </div> -->
        <!--  -->

        
    </div>

</div>














    <!-- font awesome js -->
    <script src="../fontawesome/js/all.js"></script>
        <script src="../js/index.js"></script>



    <?php 
        include_once '../includes/footer.php';
    ?>