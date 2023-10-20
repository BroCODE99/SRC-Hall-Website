<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>NewsFlash | About Us </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/about.css?v=<?= time();?>">
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
                    <a href="contact.php">contact</a>
                    <a id = "active-link" href="about.php">about</a>
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
                <h1 class="banner-title">
                    ABOUT  US 
                </h1>
                <p>...exceeding expectations.</p>
            </div>
        </div>
    </header>
    <!-- end of header -->


<!-- ------------------------------------------------ -->


    <!-- ------------------------------------------------ -->
    <!-- About page content section -->

    <!-- why UCC SRC HALL -->
    <section class="uccsrchall">
        <div class="wrapper fadeIn">

            <!-- header -->
            <h2 class="uccsrcHeader">why UCC SRC hall?</h2>
            <div class="littleBar"></div>
            <p class="littleInfo">UCC SRC Hall is more than just a place to live. It is a community where you can make lifelong friends and memories. The hall has a diverse community of students from all over Ghana and the world, and a strong sense of community where students are encouraged to get involved in hall activities and to support each other. UCC SRC Hall also offers affordable accommodation to its students, with a number of financial aid options available to help students afford to live in the hall.
            </p>
            <div class="hidden">
                <p>
                    The mission of the University of Cape Coast Student Representative Council Hall is to provide a welcoming and supportive residential community that enhances the holistic student experience. We are dedicated to creating a safe and comfortable living environment that fosters academic success, personal growth, and social connections. Our hall aims to facilitate a diverse and inclusive community where students can thrive intellectually, culturally, and socially.
                </p>
                <p>
                    We are committed to ensuring high-quality housing and accommodation services that meet the needs of our residents. Through effective communication, advocacy, and collaboration with university administration, we strive to address issues related to housing, facilities, and amenities. Our goal is to continuously improve the living conditions and overall well-being of our residents, promoting a conducive environment for learning and personal development.
                </p>
                <p>
                    The SRC Hall is driven by the principles of transparency, accountability, and student-centeredness. We actively engage with residents, seeking their input and feedback in decision-making processes, and we work diligently to represent their interests in matters pertaining to housing and accommodation. By providing a supportive community and promoting a positive living experience, we aim to contribute to the academic success and well-rounded development of all our residents.
                </p>
            </div>
            <div class="toggleDisplayMissionBtnClass">
                <div class="missionStatement">Read More</div>
                <div class=" readLess">Read Less</div>
            </div>
        </div>
    </section>


    <!-- quick fact about ucc src hall -->
    <section class="quickFact">
        <!-- water mark -->
        <div class="watermark">
            <img src="../media/logos/logos-companies-src-white.png" alt="Watermark" class="watermarkImage">
        </div>
        <div class="wrapper">

            <div class="quickFactContent">
                <div class="header quickFactHeader">
                    <p class="bar"></p>
                    <p class="txt">Quick Facts</p>
                    <p class="bar"></p>
                </div>

                <!-- quick tab -->
                <ul class="quickTabs">
                    <li class="tab">
                        <div class="icon">
                            <i class="fa-solid fa-house-user fontawesomeIcon"></i>
                        </div>
                        <div class="number">
                            Over 1,000
                        </div>
                        <p class="quickFactTxt">modern amenities, rooms, kitchen, laundry, recreational centers.</p>
                    </li>

                    <li class="tab">
                        <div class="icon">
                            <i class="fa-solid fa-person fontawesomeIcon"></i>
                        </div>
                        <div class="number">
                            Over 2,000
                        </div>
                        <p class="quickFactTxt">accommodation available for both local and foreign student.</p>
                    </li>

                    <li class="tab">
                        <div class="icon">
                            <i class="fa-solid fa-users fontawesomeIcon"></i>
                        </div>
                        <div class="number">
                            Supports
                        </div>
                        <p class="quickFactTxt"> diverse community of students from all over Ghana and the world. </p>
                    </li>

                    <li class="tab">
                        <div class="icon">
                            <i class="fa-solid fa-check fontawesomeIcon"></i>
                        </div>
                        <div class="number">
                            Over 25,000
                        </div>
                        <p class="quickFactTxt">Students graduated for over 50 years of operation as an SRC Hall</p>
                    </li>

                    <li class="tab">
                        <div class="icon">
                            <i class="fa-solid fa-cedi-sign fontawesomeIcon"></i>
                        </div>
                        <div class="number">
                            Affordable
                        </div>
                        <p class="quickFactTxt">rooms at SRC Hall with varying cost depending on the chosen room.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!--  -->
    <section class="showImageAndYearsOfOperation">
        <div class="wrapper">
            <div class="yearOfOperation">
                <div class="text">
                    Years of operation <span class="operatingYears"></span>
                </div>
                <div class="years">
                    1971 <p class="dash"></p>
                    <p class="currentYearSec"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- cross the calling message -->
    <section class="message">
        <div class="closeCalling">
            <i class="fa fa-close"></i>
        </div>
        <div>
            <p>
                The UCC SRC Hall is a place where students can come together to learn, grow, and make a difference in the world. The hall is committed to providing students with the resources and support they need to succeed in their studies and to become agents of positive change in their communities.
            </p>
            <p>
                The UCC SRC Hall is also a place where students can come to experience the love of God and to learn more about his plan for their lives. The hall is committed to helping students develop their Christian faith and to live their lives in a way that is pleasing to God.
            </p>
            <p>
                Here are some ways that the UCC SRC Hall is helping students to make a difference in the world:
            </p>
            <ul class="list">
                <li>
                    The hall provides students with opportunities to volunteer in their communities and to get involved in social justice initiatives.
                </li>
                <li>
                    The hall offers students leadership development programs and helps them to develop their skills and talents.
                </li>
                <li>
                    The hall provides students with a supportive community where they can grow in their faith and learn more about how to live their lives in a way that is pleasing to God.
                </li>
            </ul>
            <p>
                The UCC SRC Hall is a place where students can come to prepare for their future and to make a difference in the world. The hall is committed to helping students to become agents of positive change in their communities and in the world.
            </p>
            <p>
                Here is a message for the UCC SRC Hall:
            </p>
            <div class='pMessage'>
                <p>
                    UCC SRC Hall students, you are the next generation of leaders. You have the power to make a difference in the world. I encourage you to use your skills and talents to make a positive impact on your communities and on the world.
                </p>
                <p>
                    Remember that you are not alone in this journey. The UCC SRC Hall is here to support you and to help you succeed. Take advantage of the resources and opportunities that the hall has to offer. Get involved in social justice initiatives, develop your leadership skills, and grow in your faith.
                </p>
            </div>
        </div>
    </section>




    <!--  cross and our calling (positive message) -->
    <section class="positiveMessage">
        <div class="wrapper">
            <div class="bar"></div>
            <h3 class="header question">What defines UCC SRC HALL?</h3>
            <div class="positiveMessageBtn">Read The Cross And Our Calling</div>
        </div>
    </section>


    <!-- brief history -->
    <section class="briefHistory">
        <div class="bgImageContainer">
            <img src="../media/pictures/3.png" alt="" class="bgImage">
        </div>
        <div class="wrapper">
            <!--  -->
            <h1 class="historyheader">A Brief history Of UCC SRC Hall</h1>
            <p class="hallFormation">It was established in 1971, the same year that UCC attained the status of a full and independent university. The hall is located in the heart of the campus, close to the SRC offices and other important facilities.</p>
            <ul class="imagesContainer">
                <li>
                    <figure>
                        <img src="../media/pictures/2a.png" alt="">
                        <figcaption>1999</figcaption>
                    </figure>
                </li>

                <li>
                    <figure>
                        <img src="../media/pictures/2022-10-09.jpg" alt="">
                        <figcaption>1999</figcaption>
                    </figure>
                </li>

                <li>
                    <figure>
                        <img src="../media/pictures/3.png" alt="">
                        <figcaption>1999</figcaption>
                    </figure>
                </li>

                <li>
                    <figure>
                        <img src="../media/pictures/frontview.jpeg" alt="">
                        <figcaption>1999</figcaption>
                    </figure>
                </li>

                <li>
                    <figure>
                        <img src="../media/pictures/4.png" alt="">
                        <figcaption>1999</figcaption>
                    </figure>
                </li>
            </ul>
            <div class="showMoreHistory">Read the full history</div>
        </div>
    </section>


    <!-- history section -->
    <section class="hallHistory">
        <div class="closeHistory">
            <i class="fa fa-close"></i>
        </div>
        <div class="wrapper">
            <div>
                <p>
                    The Student Representative Council (SRC) Hall of the University of Cape Coast (UCC) is a non-residential hall for students who are actively involved in the SRC. It was established in 1971, the same year that UCC attained the status of a full and independent university. The hall is located in the heart of the campus, close to the SRC offices and other important facilities.
                </p>
                <p>
                    The SRC Hall is home to about 100 students, who are selected based on their academic excellence, leadership potential, and commitment to student service. The hall is known for its vibrant and diverse community, which includes students from all over Ghana and other African countries.
                </p>
                <p>
                    The SRC Hall has played a significant role in the history of UCC. It has been a breeding ground for future leaders in Ghana and Africa. Many notable alumni of the hall have gone on to hold high-level positions in government, business, and academia.
                </p>
                <p>
                    Here is a brief history of the SRC Hall, from its inception to the present day:
                </p>
                <ul class="listYears">
                    <li class="list">
                        1971: The SRC Hall is established as a non-residential hall for students who are actively involved in the SRC.
                    </li>

                    <li class="list">
                        1973: The hall is inaugurated by the then Chancellor of UCC, Mr. Justice E.C.J. Korsah.
                    </li>

                    <li class="list">
                        1975: The SRC Hall hosts its first annual SRC Ball.
                    </li>

                    <li class="list">
                        1977: The hall wins the UCC Inter-Hall Sports Competition for the first time.
                    </li>

                    <li class="list">
                        1980: The SRC Hall establishes a scholarship scheme for students from disadvantaged backgrounds.
                    </li>

                    <li class="list">
                        1985: The hall celebrates its 10th anniversary with a series of events, including a public lecture by former President Jerry John Rawlings.

                    </li>

                    <li class="list">
                        1990: The SRC Hall introduces a mentorship program for new students.
                    </li>

                    <li class="list">
                        1995: The hall celebrates its 25th anniversary with a grand ceremony.
                    </li>

                    <li class="list">
                        2000: The SRC Hall establishes a community service program, which organizes regular outreach activities to benefit the surrounding community.
                    </li>

                    <li class="list">
                        2005: The hall launches a website to provide information and updates to students and alumni.
                    </li>

                    <li class="list">
                        2010: The SRC Hall celebrates its 40th anniversary with a series of events, including a homecoming ceremony for alumni.
                    </li>

                    <li class="list">
                        2015: The hall undergoes a major renovation, which includes the refurbishment of its common rooms and bedrooms.
                    </li>

                    <li class="list">
                        2020: The SRC Hall celebrates its 50th anniversary with a series of virtual events, due to the COVID-19 pandemic.
                    </li>

                    <li class="list">
                        2023: The SRC Hall remains a vibrant and active community, home to students who are passionate about making a difference in the world.
                    </li>
                </ul>
                <p>
                    The SRC Hall is an important part of the UCC community. It has a long and rich history, and it continues to play a vital role in the development of students and leaders.
                </p>
            </div>
        </div>
    </section>

    <!--  cross and our calling (positive message) -->
    <section class="pagesContainer">
        <div class="wrapper">
            <div class="pBar"></div>
            <h3 class="pageSectionHeader">Related Pages</h3>

            <!-- page cards -->
            <div class="pageCards">
                <a href="#" class="card">Home</a>
                <a href="#" class="card">News Feed</a>
                <a href="#" class="card">Events</a>
                <a href="#" class="card">Gallary</a>
                <a href="#" class="card">Contact</a>
            </div>
        </div>
    </section>


    <!-- hall alumni -->
    <section class="pagesContainer">
        <div class="wrapper">
            <div class="pBar"></div>
            <h3 class="pageSectionHeader">notable alumni over the years</h3>

            <!-- page cards -->
            <ul class="alumnis">
                <li class="alumni">
                    <figure>
                        <div>
                            <img src="../media/pictures/people/36481-034a3751.jpg" alt="">
                        </div>
                        <figcaption>Hon. Kwesi Quartey</figcaption>
                    </figure>
                </li>

                <li class="alumni">
                    <figure>
                        <div>
                            <img src="../media/pictures/people/GIJ.jpg" alt="">
                        </div>
                        <figcaption>Prof. George Kwaku Opoku</figcaption>
                    </figure>
                </li>

                <li class="alumni">
                    <figure>
                        <div>
                            <img src="../media/pictures/people/36481-034a3751.jpg" alt="">
                        </div>
                        <figcaption>Hon. Kwesi Quartey</figcaption>
                    </figure>
                </li>

                <li class="alumni">
                    <figure>
                        <div>
                            <img src="../media/pictures/people/GIJ.jpg" alt="">
                        </div>
                        <figcaption>Prof. George Kwaku Opoku</figcaption>
                    </figure>
                </li>

                <li class="alumni">
                    <figure>
                        <div>
                            <img src="../media/pictures/people/36481-034a3751.jpg" alt="">
                        </div>
                        <figcaption>Hon. Kwesi Quartey</figcaption>
                    </figure>
                </li>

                <li class="alumni">
                    <figure>
                        <div>
                            <img src="../media/pictures/people/GIJ.jpg" alt="">
                        </div>
                        <figcaption>Prof. George Kwaku Opoku</figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>



    <!-- font awesome js -->
    <script src="../fontawesome/js/all.js"></script>
    <script src="../js/index.js"></script>

    <!-- fade elements in on scroll js link -->
    <script src="../js/fadeElementsIn.js"></script>

    <!-- about page js link -->
    <script src="../js/aboutPage.js"></script>






















        <!-- font awesome js -->
        <script src="../fontawesome/js/all.js"></script>
        <script src="../js/index.js"></script>

    

<?php 
    include_once '../includes/footer.php';
?>
