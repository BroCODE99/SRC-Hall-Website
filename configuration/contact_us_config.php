<?php

    require_once '../database_connection/connection_instance.php';
    require_once '../functions/functions.php';


    if (isset($_POST['send'])) {
        $name    = validate_text_input($_POST['name']);
        $email   = validate_text_input($_POST['email']);
        $message = validate_text_input($_POST['message']);


        if (empty($name)) {
            header("Location: ../other_pages/contact.php");
            exit();
        }

        if (empty($email)) {
            header("Location: ../other_pages/contact.php");
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../other_pages/contact.php?error=Invalid email.");
            exit();
        }

        if (empty($message)) {
            header("Location: ../other_pages/gallery.php");
            exit();
        }

        $insert_message_query = "INSERT INTO messages (`name`, email,`message`) VALUES(:sender_name, :email, :sender_message);";
        $message_stmt = $connection->prepare($insert_message_query);


        if ($message_stmt->execute(['sender_name' => $name, 'email' => $email, 'sender_message' => $message])) {
            header("Location: ../other_pages/contact.php?success=Message sent");
            exit();
        }

            header("Location: ../other_pages/contact.php?error=Message not sent. Try again");
            exit();








        
    } else {
        header("Location: ../other_pages/gallery.php");
        exit();
    }