<?php

require_once '../database_connection/connection_instance.php';
require_once '../functions/functions.php';

if (isset($_POST['add'])) {
    $email = validate_text_input(strtolower($_POST['email']));
    $username = validate_text_input(strtolower($_POST['username']));
    $pass_word = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $profile_image = 'srch.jpg';

    // $picture_name = $_FILES['profile_pic']['name'];
    // $picture_temp_name = $_FILES['profile_pic']['tmp_name'];
    // $picture_size = $_FILES['profile_pic']['size'];
    // $picture_type = $_FILES['profile_pic']['type'];




    // 

    if (empty($username)) {
        header("Location: ../admin/dashboard.php?error=Enter a username.");
        exit();
    }

    if (empty($email)) {
        header("Location: ../admin/dashboard.php?error=Enter an email.");
        exit();
    }

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("Location: ../admin/dashboard.php?error=Invalid email.");
        exit();
    }

    if (empty($pass_word)) {
        header("Location: ../admin/dashboard.php?error=Password is empty.");
        exit();
    }

    if (strlen($pass_word) < 8) {
        header("Location: ../admin/dashboard.php?error=Password must be 8 characters and more.");
        exit();
    }

    if ($pass_word != $confirm_password) {
        header("Location: ../admin/dashboard.php?error=Passwords do not match");
        exit();
    }


    $email_query = "SELECT * FROM administrators WHERE email = :email;";
    $email_stmt = $connection->prepare($email_query);
    $email_stmt->execute(['email' => $email]);

    if ($email_stmt->rowCount() > 0) {
        
        header("Location: ../admin/dashboard.php?error=Email is taken");
        exit();
    }


    // $allowed_ext = ['jpeg','jpg','png'];
    // $picture_ext = explode('.',$picture_name);
    // $picture_ext = strtolower(end($picture_ext));

 
    // if (!(in_array($picture_ext,$allowed_ext))) {
    //     header("Location: ../admin/dashboard.php?picture_error=Picture type not allowed.");
    //     exit();
    // }

    // if (($_POST['profile_pic']['size'] > 0)) {
    //     header("Location: ../portal/instructors.php?picture_error=Picture error. please try again.");
    //     exit();
    // }





    // $new_picture_name = $instructor_id . "." . $picture_ext;
    // $picture_folder = '../media/logos/' . $new_picture_name;
    // move_uploaded_file($picture_temp_name,$picture_folder);

    $hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);



    // 
    $admin_insert_query = "INSERT INTO administrators (`username`,`email`,`pass_word`,`image`) VALUES (:username, :email, :pass_word, :profile_image);";
    $admin_insert_stmt = $connection->prepare($admin_insert_query);
    

    if (!($admin_insert_stmt->execute(['username' => $username, 'email' => $email, 'pass_word' => $hashed_password, 'profile_image' => $profile_image]))) {
        header("Location: ../admin/dashboard.php?error=Something went wrong. Please try again.");
        exit();
    }

        header("Location: ../admin/dashboard.php?success=Admin added successfully.");
        exit();











} else {
    header("Location: ../admin/dashboard.php");
    exit();
}