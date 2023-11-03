<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>UCC SRC HALL | Contact </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/index.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../css/contact.css?v=<?= time(); ?>">
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="../index.php" class="navbar-brand"><img src="../media/logos/srch1.png" alt="logo"></a>
                <div class="navbar-nav">
                    <a href="../index.php">home</a>
                    <a href="news_feed.php">news feed</a>
                    <a href="events.php">events</a>
                    <a href="gallery.php">gallery</a>
                    <a id="active-link" href="contact.php">contact</a>
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
                <h1 class="banner-title">CONTACT</h1>
                <p>...exceeding expectations.</p>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- contact us content section -->
    <section class="contactUsSection">

        <!-- header -->
        <h1 class="header contactUsSectionHeader">
            <div class="wrapper">We are here to listen and support</div>
        </h1>

        <div class="contactAdminSection">
            <div class="overlay"></div>
            <div class="wrapContent">
                <section class="txtSection">
                    <h2 class="txtHeader">Let's get <span>this started</span></h2>
                    <p>We'd love to get to know you and find out what you have in mind. Looking to answer some questions first? Feel free to email us at uccsrc@gmail.com</p>
                    <ul class="socialMediaHandles">
                        <li class="handle">
                            <a href="#"><i class="fab fa-facebook"></i>
                            </a>
                        </li>

                        <li class="handle">
                            <a href="#"><i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li class="handle">
                            <a href="#"><i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li class="handle">
                            <a href="#"><i class="fab fa-linkedin"></i>
                            </a>
                        </li>

                        <li class="handle">
                            <a href="#"><i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="imageCard">
                        <img src="../media/pictures/people/hallmanagement/36481-034a3751.jpg" alt="">
                        <div class="cardTExt">
                            <p>
                                At UCC SRC Hall, we believe in the power of connection. We understand that every interaction is an opportunity to make a difference and create a positive impact. That's why our Contact Us page is more than just a form-it's a gateway to a world of support, understanding, and collaboration
                            </p>
                        </div>
                    </div>
                </section>
                <section class="contactFormSection">
                    <form action="../functions/contactUs.php" method="post" class="contactusForm" id="form-section">
                        <?php if (isset($_GET['error'])) { ?>
                            <h4 class="formMessages"><?php echo $_GET['error']; ?></h4>
                        <?php } ?>
                        <h2 class="formHeader">Contact Us</h2>
                        <div class="inputField">
                            <label for="name">Name: </label>
                            <input type="text" name="name" id="userName">
                        </div>
                        <div class="inputField">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="userEmail">
                        </div>
                        <label for="message" class="textareaLabel">Message</label>
                        <textarea name="message" id="userMessage" cols="20" rows="5"></textarea>

                        <div class="infoAndSubmit">
                            <div class="address">
                                <p>uccsrc@gmail.com</p>
                                <p>1508-423-5687</p>
                                <p>32, main street, CC</p>
                            </div>
                            <input type="submit" value="Submit" name="submitUserMessage">
                        </div>
                    </form>
                </section>
            </div>
        </div>

    </section>
























    <!-- ----------------------------------------------------------------------- -->



    <!-- font awesome js -->
    <script src="../fontawesome/js/all.js"></script>
    <script src="../js/index.js"></script>



    <?php
    include_once '../includes/footer.php';
    ?>