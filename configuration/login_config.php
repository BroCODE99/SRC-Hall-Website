<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: ../admin/dashboard.php");
    exit();
    
}

include_once('../database_connection/connection_instance.php');
include_once('../functions/functions.php');

if (isset($_POST['submit'])) {
    $email = validate_text_input($_POST['email']);
    $password = validate_text_input($_POST['password']);




     // Error message variables
    $user_data = 'email=' . $email;

    
    if (empty($email)) {
        header("Location: ../admin/index.php?email_error=Please enter your email.&$user_data");
        exit();
    }

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("Location: ../admin/index.php?email_error=Invalid email.&$user_data");
        exit();
    }


    if (empty($password)) {
       header("Location: ../admin/index.php?password_error=Please enter your password.&$user_data");
       exit();
    }





            ## Making database fetch
            $admin_select_query = "SELECT * FROM administrators WHERE email = :email;";
            
            // Statement 
            $stmt_admin = $connection->prepare($admin_select_query);
            $stmt_admin->execute(['email' => $email]);

            if ($stmt_admin->rowCount() == 0) {
                header("Location: ../admin/index.php?email_error=Wrong email.&$user_data");
                exit();
            } 

            $admin_data = $stmt_admin->fetch(PDO::FETCH_ASSOC);

            if (!password_verify($password,$admin_data['pass_word'])) {
                header("Location: ../admin/index.php?password_error=Wrong password.&$user_data");
                exit();
            }


            session_start();
            $_SESSION['admin_id'] = $admin_data['admin_id'];
            $_SESSION['image'] = $admin_data['image'];
            $_SESSION['email'] = $admin_data['email'];
            $_SESSION['username'] = $admin_data['username'];


            // 

            header("Location: ../admin/dashboard.php");
        



   










} else {
    header("Location: ../admin/index.php");
}