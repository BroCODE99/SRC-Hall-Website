<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("../database_connection/connection_instance.php");

session_start();

if (isset($_POST['submitUserMessage'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (empty($name)) {
        header("Location: ../other_pages/contact.php?error=" . urlencode("Enter your name"));
        exit;
    }
    if (empty($email)) {
        header("Location: ../other_pages/contact.php?error=" . urlencode("Enter your email"));
        exit;
    }
    if (empty($message)) {
        header("Location: ../other_pages/contact.php?error=" . urlencode("Enter your message"));
        exit;
    }

    $insert_query = "INSERT INTO contactUs (`name`, `email`, `message`) VALUES (:name, :email, :message)";

    $insert_stmt = $connection->prepare($insert_query);
    $execute_query = $insert_stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

    if (!$execute_query) {
        header("Location: ../other_pages/contact.php?error=" . urlencode("Error while sending your message."));
        exit;
    }

    header("Location: ../other_pages/contact.php?error=" . urlencode("Successfully sent. Results will be sent to your email"));
    exit;
}
?>