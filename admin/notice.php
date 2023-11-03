<?php
    require 'header.php';
?>

    <div class="notice">
        <div class="add-btn">
            <i class="fas fa-plus"></i>
            <i class="fas fa-bullhorn"></i>
        </div>
        <!--  -->

        <!--  -->
        <div class="confirm-wrapper">
            <h2>Do You Wants To Delete?</h2>
            <div>
                <form action="../configuration/delete_notice_config.php" method="post">
                    <input type="hidden" name="news_value_id" class="value_id"  >
                    <button type="submit"  name="delete_notice" class="yes-btn">YES</button>
                </form>
                <button class="cancel-btn" >CANCEL</button>
            </div>
        </div>
        <!--  -->


        <!-- notification wrapper -->
        <!-- <p class="success-text">
            <?= $success_message; ?>
        </p>

        <p class="error-text">
            <?= $error_message; ?>
        </p> -->

        <!--  -->




        <!--  -->
    <div class="published-notice">
            <h2 class="published-notice-header" >PUBLISHED NOTICE</h2>
            <!--  -->
            
                <!--  -->
            <?php foreach ($notice as $note) { ?> 
            <div class="published-item">
                <img src="../media/pictures/news_feed/<?= $note->image ?>" alt="image">
                <div>
                    <h3><?= $note->headline ?> </h3>
                    <p><?= format_date($note->news_date) ?></p>
                </div>
                <button class="del-btn" value="<?= $note->news_id ?>"> <i class="fas fa-trash"></i> </button>
            </div>
            <?php } ?>
            <!--  -->

            <!--  -->
            <!-- <div class="published-item">
                <span>22</span>
                <img src="../media/pictures/news_feed/oct_aware.jpg" alt="image">
                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, neque. Mollitia illo sit nostrum ratione eius odit, nulla omnis officiis.</h3>
                <button> <i class="fas fa-trash"></i> </button>
            </div> -->
            <!--  -->
        </div>
            <?php 
                    // $all_notice_query ="SELECT * FROM notice;";
                    // $all_notice_stmt = $connection->prepare($all_notice_query);
                    // $all_notice_stmt->execute();
                    // $total_num_notice = $all_notice_stmt->rowCount();



                    $total_page = ceil($num_published_notice/$num_per_page);
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
        <!--  -->

        <!--  -->
        <div class="create-item-wrapper">
            <form enctype="multipart/form-data" action="../configuration/send_notice_config.php" method="post">
                <h2>SEND NOTICE</h2>
                <!--  -->
                <div class="form-item">
                    <i class="fas fa-square"></i>
                    <input type="text" name="headline" autocomplete="off" placeholder="Headline">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-item">
                    <!-- <i class="fas fa-cog"></i> -->
                    <textarea name="body" id="" placeholder="Body of the notice here..."></textarea>
                </div>
                <!--  -->

                <!--  -->
                <div class="form-item upload-btn">
                    <i class="fas fa-upload"></i>
                    <input type="file" name="notice_image" id="">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-publish">
                    <!-- <button type="submit"><i class="fas fa-home"></i> PUBLISH</button> -->
                    <input type="submit" value="PUBLISH" name="publish">
                </div>
            </form>
        </div>


        <!--  -->

    <?php   
        require_once 'footer.php';
    ?>





    