<?php
// require_once '../database_connection/connection_instance.php';



if (isset($_POST['news_id'])) {
    $news_id = $_POST['news_id'];

    // $select_query = "SELECT * FROM notice WHERE news_id = :news_id;";
    // $notice_stmt = $connection->prepare($select_query);
    // $notice_stmt->execute(['news_id' => $news_id]);
    // $notice = $notice_stmt->fetch();

    session_start();
    $_SESSION['news_id'] = $news_id;
    header("Location: ../other_pages/view.php");
    exit();


} else {
    header("Location: ../index.php");
    exit();
}


