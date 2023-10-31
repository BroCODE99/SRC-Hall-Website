<?php

require_once 'header.php';


?>



<div class="gallery">
    <div class="add-btn">
        <i class="fas fa-plus"></i>
        <i class="fas fa-image"></i>
    </div>
    <h2 class="published-notice-header" >PHOTOS IN GALLERY</h2>
    <!-- all photos -->
    <section class="all-photos">
        <!--  -->

        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/3.png" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/4.png" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="photo-item">
            <img src="../media/pictures/news_feed/oct_aware.jpg" alt="photo">
        </div>
        <div class="del-photo-btn">
            <i class="fas fa-trash"></i>
        </div>
        <!--  -->
    </section>


    <!--  -->
</div>

<!--  -->

<div class="create-item-wrapper">
            <form action="../configuration/notice_config.php" method="post">
                <h2>ADD PHOTO TO GALLERY</h2>
                <!--  -->
                <!-- <div class="form-item">
                    <i class="fas fa-square"></i>
                    <input type="text" name="headline" autocomplete="off" placeholder="Headline">
                </div> -->
                <!--  -->

                <!--  -->
                <div class="form-item">
                    <i class="fas fa-calendar"></i>
                    <input type="text" name="year" autocomplete="off" placeholder="Year (ex: 2024)">
                </div>

                <!--  -->
                <!-- <div class="form-item">
                    <textarea name="body" id="" placeholder="Body of the notice here..."></textarea>
                </div> -->
                <!--  -->

                <!--  -->
                <div class="form-item upload-btn">
                    <i class="fas fa-upload"></i>
                    <input type="file" name="image" id="">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-publish">
                    <!-- <button type="submit"><i class="fas fa-home"></i> PUBLISH</button> -->
                    <input type="submit" value="ADD" name="publish">
                </div>
            </form>
        </div>


<!--  -->







<?php

    require_once 'footer.php';
?>

