<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <title>NewsFlash | About Us </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/index.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../css/about.css?v=<?= time(); ?>">
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
                    <a id="active-link" href="about.php">about</a>
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
                    ABOUT US
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




    <!-- src hall management -->
    <section class="srcHallManagement">
        <div class="wrapper">

            <div class="pBar"></div>
            <h1 class="header hallManagementHeader">
                SRC Hall Management
            </h1>
            <div class="srcHallManagementCardsConatainer">
                <div class="leader">
                    <a href="#">
                        <div class="hMcard">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/36481-034a3751.jpg" alt="SRC Hall Master" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Prof. Charles Adabo Oppong</h2>
                                <p class="title">Hall master / Warden</p>
                            </div>
                        </div>
                    </a>
                </div>
                <h2 class="otherCategory">Staff</h2>
                <div class="staff">
                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/charityabraham" alt="Asistant Registrar" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mrs. Charity Abraham</h2>
                                <p class="title">Asistant Registrar</p>
                            </div>
                        </a>
                    </div>


                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">UE</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Urel Ewusi</h2>
                                <p class="title">Principal Hall Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/thelma" alt="Principal Technician" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Thelma Nana Dasoberi</h2>
                                <p class="title">Principal Technician</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">AKB</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Albert K Baidoo</h2>
                                <p class="title">Senior Administrative Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">NAK</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mrs. Nana Ama Anhwere-Kuffour</h2>
                                <p class="title">Senior Hall Asistant</p>
                            </div>
                        </a>
                    </div>


                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">HO</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Henry Ofori</h2>
                                <p class="title">Accounting Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">EY</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Ellen Yeboah</h2>
                                <p class="title">Administrative Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">KVD</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Kennedy V. K. Dogbatsey</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">JE</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Jonathan Esuong</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">VA</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Vincent Ansah</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">CB</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Comfort Baidoo</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">ET</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Elizabeth Taylor</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- src hall management -->
    <section class="srcHallJCRCManagement">
        <div class="wrapper">

            <div class="pBar"></div>
            <h1 class="header JCRCManagementHeader">
                SRC Hall JCRC leadership
            </h1>
            <div class="srcHallManagementCardsConatainer">
                <div class="leaders">
                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/36481-034a3751.jpg" alt="SRC Hall Master" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Prof. Charles Adabo Oppong</h2>
                                <p class="title">Hall master / Warden</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/36481-034a3751.jpg" alt="SRC Hall Master" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Prof. Charles Adabo Oppong</h2>
                                <p class="title">Hall master / Warden</p>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="otherCategory">Other Leaders</h2>
                <div class="staff">
                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/charityabraham" alt="Asistant Registrar" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mrs. Charity Abraham</h2>
                                <p class="title">Asistant Registrar</p>
                            </div>
                        </a>
                    </div>


                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">UE</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Urel Ewusi</h2>
                                <p class="title">Principal Hall Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <img src="../media/pictures/people/hallmanagement/thelma" alt="Principal Technician" class="cardImage">
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Thelma Nana Dasoberi</h2>
                                <p class="title">Principal Technician</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">AKB</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Albert K Baidoo</h2>
                                <p class="title">Senior Administrative Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">NAK</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mrs. Nana Ama Anhwere-Kuffour</h2>
                                <p class="title">Senior Hall Asistant</p>
                            </div>
                        </a>
                    </div>


                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">HO</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Henry Ofori</h2>
                                <p class="title">Accounting Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">EY</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Ellen Yeboah</h2>
                                <p class="title">Administrative Assistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">KVD</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Kennedy V. K. Dogbatsey</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">JE</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Jonathan Esuong</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">VA</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Mr. Vincent Ansah</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">CB</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Comfort Baidoo</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>

                    <div class="hMcard">
                        <a href="#">
                            <div class="cardImageContainer">
                                <h1 class="acronym">ET</h1>
                            </div>
                            <div class="cardTxt">
                                <h2 class="name">Miss. Elizabeth Taylor</h2>
                                <p class="title">Hall Asistant</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- hall alumni -->
    <section class="alumniContainer pagesContainer">
        <div class="wrapper">
            <div class="pBar"></div>
            <h3 class="pageSectionHeader alumniHeader">notable alumni over the years</h3>

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


    <!-- related pages -->

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