<?php
    require_once 'header.php';
?>

    <div class="settings-btn add-btn">
        <i class="fas fa-cog"></i>
    </div>
           
    <div class="dashboard">
                        <!--  -->
                       <div class="dashboard-summary">
                        <span>
                            <h3><?= $num_published_notice ?></h3>
                            <p>Notice Published</p>
                        </span>
                        <!--  -->
                        <span>
                            <h3><?= $num_published_photos ?></h3>
                            <p>Photos In Gallery</p>
                        </span>
                        <!--  -->
                       </div>
                       <!-- end of summary -->

                       <!-- Published notice -->
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
                        <a href="dashboard.php?notice_page=<?=$notice_page-1?>" class="previous-btn"><i class="fas fa-step-backward" ></i></a>

                <?php }
                    for ($i=1; $i < $total_page; $i++) { 
                ?>
                        <a href="dashboard.php?notice_page=<?=$i?>" class="pagination-btn"><?=$i?></a>
                <?php } 
                
                    if ($i > $notice_page) {
                ?>
                        <a href="dashboard.php?notice_page=<?=$notice_page+1?>" class="next-btn"><i class="fas fa-step-forward" ></i></a>
                  
                <?php
                        }
                ?>
            </div>

    </div>

    <!-- settings -->
    <section class="create-item-wrapper settings-wrapper">
        <!--  -->
        <div class="change-password-wrapper">
        <form action="../configuration/change_password_config.php" method="post">
                <h2>CHANGE PASSWORD</h2>
                <input type="hidden" name="admin_id" value="<?= $_SESSION['admin_id'] ?>">
                <!--  -->
                <div class="form-item">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="old_password" autocomplete="off" placeholder="Old Password">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-item">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="new_password" autocomplete="off" placeholder="New Password">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-item">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" autocomplete="off" placeholder="Confirm New Password">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-publish">
                    <!-- <button type="submit"><i class="fas fa-home"></i> PUBLISH</button> -->
                    <input type="submit" value="CHANGE" name="change">
                </div>
            </form>
        </div>
        <!--  -->
        <hr class="line-separator">
        <hr class="line-separator">
        <!--  -->
        <div class="make-admin-wrapper">
        <form action="../configuration/add_admin_config.php" method="post">
                <h2>ADD ADMIN</h2>

                <!--  -->
                <div class="form-item">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" autocomplete="off" placeholder="Username">
                </div>
                <!--  -->

                <!--  -->
                <div class="form-item">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" autocomplete="off" placeholder="Email">
                </div>
                <!--  -->

                <div class="form-item">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" autocomplete="off" placeholder="Password">
                </div>
                <!--  -->

                 <!--  -->

                 <div class="form-item">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" autocomplete="off" placeholder="Confirm Password">
                </div>
                <!--  -->

                
                <!--  -->
                <!-- <div class="form-item upload-btn">
                    <i class="fas fa-upload"></i>
                    <input type="file" name="profile_pic" id="">
                </div> -->
                <!--  -->

                <!--  -->
                <div class="form-publish">
                    <!-- <button type="submit"><i class="fas fa-home"></i> PUBLISH</button> -->
                    <input type="submit" value="ADD" name="add">
                </div>
            </form>
        </div>
        <!--  -->
    </section>

                  
                    <!--  -->


             
        

        




    <?php
        require_once 'footer.php';
    ?>