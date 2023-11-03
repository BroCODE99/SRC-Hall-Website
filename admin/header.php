<?php
    // initializing a session
    session_start();
    
    
    // Checking if the user is already logged in, if no then redirect  to login page
    if(!isset($_SESSION["admin_id"]) && !isset($_SESSION['email'])){
        header("Location: index.php");
        exit();
    }
    

require_once '../database_connection/connection_instance.php';
require_once '../functions/functions.php';

// notice
$count_notice_query = "SELECT * FROM notice;";
$count_notice_stmt = $connection->prepare($count_notice_query);
$count_notice_stmt->execute();
$num_published_notice = $count_notice_stmt->rowCount();

// photos
$count_photos_query = "SELECT * FROM photos;";
$count_photos_stmt = $connection->prepare($count_photos_query);
$count_photos_stmt->execute();
$num_published_photos = $count_photos_stmt->rowCount();





// pagination
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









// getting error and success message

$error_message = '';
$success_message = '';

if (isset($_GET['error'])) {
    $error_message = $_GET['error'];
} elseif (isset($_GET['success'])) {
    $success_message = $_GET['success'];
}





?>
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
                <div class="admin-name-wrapper">
                    <h2>ADMINISTRATOR</h2>
                    <h4 style="color:#ffffff" ><?= ucwords($_SESSION['username']) ?></h4>
                </div>
            </div>
            
            <!--  -->

            <!--  -->
            <div><a href="../configuration/logout_config.php">Logout</a></div>
        </div>
        <!--  -->
        <!--  -->
        <div class="profile-body-wrapper">
            <!-- Side bar -->
            <div class="profile-bottom-bar">
                <!--  -->

                <!--  -->
                <ul class="bottom-bar-nav">
                    <li>
                        <a href="dashboard.php" class="nav-btn">
                            <i class="fas fa-tachometer-alt" ></i> 
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="notice.php" class="nav-btn" >
                            <i class="fas fa-bullhorn" ></i> 
                            <span>Notice</span>
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php" class="nav-btn" >
                            <i class="fas fa-images" ></i> 
                            <span>Gallery</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="settings.php" class="nav-btn" >
                            <i class="fas fa-cog" ></i> 
                            <span>Settings</span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <!--  -->

                 <!-- content-wrapper  -->
     <div class="content-wrapper">
                    <!--  -->
       <!-- notification -->
        <p class="success-text">
            <?= $success_message; ?>
        </p>

        <p class="error-text">
            <?= $error_message; ?>
        </p>
