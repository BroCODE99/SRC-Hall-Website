<?php

require_once 'header.php';



// pagination
    if (isset($_GET['gallery_page'])) {
        $gallery_page = $_GET['gallery_page'];
    } else {
        $gallery_page = 1;
    }

    $num_on_page = 12;
    $page_start = ($gallery_page - 1) * $num_on_page;

    $gallery_select_query = "SELECT * FROM photos ORDER BY photo_id DESC LIMIT $page_start, $num_on_page;";
    $gallery_stmt = $connection->prepare($gallery_select_query);
    $gallery_stmt->execute();
    $photos = $gallery_stmt->fetchAll();


?>







<div class="gallery">
    <!--  -->
    <div class="add-btn">
        <i class="fas fa-plus"></i>
        <i class="fas fa-image"></i>
    </div>



    <!--  -->
    <div class="confirm-wrapper">
            <h2>Do You Wants To Delete?</h2>
            <div>
                <form action="../configuration/delete_photo_config.php" method="post">
                    <input type="hidden" name="photo_value_id" class="value_id"  >
                    <button type="submit"  name="delete_photo" class="yes-btn">YES</button>
                </form>
                <button class="cancel-btn" >CANCEL</button>
            </div>
        </div>
        <!--  -->

    <!--  -->
    <h2 class="published-notice-header" >PHOTOS IN GALLERY</h2>
    <!-- all photos -->
    <section class="all-photos">
        <!--  -->
        
        <?php foreach ($photos as $photo) { ?>
            <div class="photo-item">
                <img src="../media/pictures/gallery/<?= $photo->image ?>" alt="photo">
            </div>
            <div class="">
            <button class="del-btn del-photo-btn" value="<?= $photo->photo_id ?>"> <i class="fas fa-trash"></i> </button>
            </div>

        <?php } ?>
        <!--  -->

        <?php 
                    // $all_notice_query ="SELECT * FROM notice;";
                    // $all_notice_stmt = $connection->prepare($all_notice_query);
                    // $all_notice_stmt->execute();
                    // $total_num_notice = $all_notice_stmt->rowCount();



                    $total_page = ceil($num_published_photos/$num_on_page);
        ?>
                    
    <div class="pagination-wrapper">
        <?php

            if ($gallery_page > 1) { 
        ?>
                <a href="notice.php?notice_page=<?=$gallery_page-1?>" class="previous-btn"><i class="fas fa-step-backward" ></i></a>

        <?php }
                for ($i=1; $i < $total_page; $i++) { 
        ?>
                    <a href="notice.php?notice_page=<?=$i?>" class="pagination-btn"><?=$i?></a>
        <?php } 
            
                if ($i > $gallery_page) {
        ?>
                    <a href="notice.php?notice_page=<?=$gallery_page+1?>" class="next-btn"><i class="fas fa-step-forward" ></i></a>
                
        <?php
                    }
        ?>
    </div>








        <!--  -->
        <!-- <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div> -->
        <!--  -->
    </section>


    <!--  -->
</div>

<!--  -->

<div class="create-item-wrapper">
            <form enctype="multipart/form-data" action="../configuration/photo_config.php" method="post">
                <h2>ADD PHOTO TO GALLERY</h2>
            
                <!--  -->
                <div class="form-item">
                    <i class="fas fa-calendar"></i>
                    <input type="text" name="year" id="photo_year" autocomplete="off" placeholder="Year (ex: 2024)">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-item upload-btn">
                    <i class="fas fa-upload"></i>
                    <input type="file" name="photo" id="">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-publish">
                    <!-- <button type="submit"><i class="fas fa-home"></i> PUBLISH</button> -->
                    <input type="submit" value="ADD" name="add">
                </div>
            </form>
        </div>


<!--  -->







<?php

    require_once 'footer.php';
?>

