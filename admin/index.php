<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../media/logos/srch.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="../fontawesome/css/all.css?v=<?= time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


        <!-- css -->
    <link rel="stylesheet" href="../css/index.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/admin.css?v=<?= time();?>">
</head>
<body>

    <section class="body-wrapper">
        <div class="login-wrapper">
            <div class="logo"><img src="../media/logos/srchh.png" alt="logo"></div>
            <h3 class="login-text-header"> ADMIN LOGIN</h3>
            <form action="../configuration/login_process.php" method="post">

            <!--  -->
            <?php if (isset($_GET['email_error'])) {?>
                <div class="form-item ">
                    <span><i class = "fas fa-envelope "></i></span>
                    <input type="text" name="email" id="email" value="<?= $_GET['email'] ?>" placeholder="example@example.com" autocomplete="off" />
                </div>
            <p id="error-message"><?= $_GET['email_error'] ?></p>
           <?php } elseif (isset($_GET['email'])) { ?>
                <div class="form-item ">
                    <span><i class = "fas fa-envelope "></i></span>
                    <input type="text" name="email" id="email" value="<?= $_GET['email'] ?>" placeholder="example@example.com" autocomplete="off" />
                </div>
          <?php  }   else{ ?>
            <div class="form-item ">
                <span><i class = "fas fa-envelope "></i></span>
                <input type="text" name="email" id="email" placeholder="example@example.com" autocomplete="off" />
            </div>
            <?php } ?>
            <!--  -->

             <!--  -->
            <?php if (isset($_GET['password_error'])) {?>
               <div class="form-item">
                <span><i class = "fas fa-lock" ></i></span>
                <input type="password" name="password" id="password" placeholder="Password"/> 
            </div>
            <p id="error-message"><?= $_GET['password_error'] ?></p>
           <?php } else{ ?>
             <div class="form-item">
                <span><i class = "fas fa-lock" ></i></span>
                <input type="password" name="password" id="password" placeholder="Password"/> 
            </div>
            <?php } ?>
            <!--  -->
           

            <!-- <div class="remember-me ">
                <input type="checkbox" name="remember_me" /> 
                <span>Remember me</span>
            </div> -->

                <p><a href="#">Forget password</a></p>

             <div class="form-submit">
                <input type="submit" name="submit" value="LOGIN" />
            </div>

            </form>
        </div>
    </section>












    <script src="../fontawesome/js/all.js"></script>
    
</body>
</html>