<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


        <!-- css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/admin.css?v=<?= time();?>">
</head>
<body>
    <section class="profile-wrapper">
        <div class="profile-container">
            <div class="top-bar">
                <!--  -->
                <div class="profile-pic">
                    <img src="../media/logos/srch.jpg" alt="picture">
                    <h2>ADMIN PROFILE</h2>
                </div>
                
                <!--  -->

                <!--  -->
                <div><a href="">Logout</a></div>
            </div>
            <!--  -->
            <!--  -->
            <div class="profile-body-wrapper">
                <!-- Side bar -->
                <div class="profile-bottom-bar">
                    <!--  -->

                    <!--  -->
                    <ul class="bottom-bar-nav">
                        <li class="dashboard-btn active-btn">
                                <i class="fas fa-tachometer-alt" ></i> 
                                <span>Dashboard</span>
                        </li>
                        <li class="notice-btn" >
                                <i class="fas fa-bullhorn" ></i> 
                                <span>Notice</span>
                        </li>
                        <li class="gallery-btn" >
                                <i class="fas fa-image" ></i> 
                                <span>Gallery</span>
                        </li>
                        <li class="settings-btn" >
                                <i class="fas fa-cog" ></i> 
                                <span>Settings</span>
                        </li>
                    </ul>
                </div>

                <!--  -->

                <!-- content-wrapper  -->
                <div class="content-wrapper">
                    <!--  -->
                    <div class="dashboard">
                        <!--  -->
                       <div class="dashboard-summary">
                        <span>
                            <h3>452</h3>
                            <p>Notice Published</p>
                        </span>
                        <!--  -->
                        <span>
                            <h3>500</h3>
                            <p>Photos In Gallery</p>
                        </span>
                        <!--  -->
                       </div>
                       <!-- end of summary -->

                       <!-- Published notice -->
                       <div class="published-notice">
                            <h2 class="published-notice-header" >PUBLISHED NOTICE</h2>
                            <!--  -->
                            <div class="published-item">
                                <!--  -->
                                <span>23</span>
                                <img src="../media/pictures/news_feed/congrat.jpg" alt="image">
                                <h3>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, neque. Mollitia illo sit 
                                </h3>
                                <button> <i class="fas fa-trash"></i> </button>
                                <!-- <button> <i class="fas fa-square"></i> </button> -->
                            </div>
                            <!--  -->

                            <!--  -->
                            <div class="published-item">
                                <span>22</span>
                                <img src="../media/pictures/news_feed/oct_aware.jpg" alt="image">
                                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, neque. Mollitia illo sit nostrum ratione eius odit, nulla omnis officiis.</h3>
                                <button> <i class="fas fa-trash"></i> </button>
                            </div>
                            <!--  -->

                            <!--  -->
                            <div class="published-item">
                                <span>21</span>
                                <img src="../media/pictures/events/happy_sept.jpg" alt="image">
                                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, neque. Mollitia illo sit nostrum ratione eius odit, nulla omnis officiis.</h3>
                                <button> <i class="fas fa-trash"></i> </button>
                            </div>
                            <!--  -->

                            <!--  -->
                            <div class="published-item">
                                <span>20</span>
                                <img src="../media/pictures/events/presidential_debate.jpg" alt="image">
                                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, neque. Mollitia illo sit nostrum ratione eius odit, nulla omnis officiis.</h3>
                                <button> <i class="fas fa-trash"></i> </button>
                            </div>
                            <!--  -->
                       </div>
                    </div>

                    <!--  -->


                    <!--  -->

                    <div class="notice">
                        I am Notice
                    </div>
                    <!--  -->

                    <!--  -->

                    <!--  -->

                    <div class="gallery">
                        I am gallery
                    </div>
                    <!--  -->


                    <!--  -->
                    <div class="settings">
                        I am settings
                    </div>
                </div>

                <!--  -->



            </div>
            <!--  -->
            <!--  -->
        

        </div>
    </section>

    



    <script src="../js/profile.js"></script>
    <script src="../fontawesome/js/all.js"></script>
</body>
</html>