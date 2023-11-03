<?php 
    require_once '../database_connection/connection_instance.php';

    if (isset($_POST['delete_notice'])) {
        $news_id = $_POST['news_value_id'];

        $get_image_query = "SELECT `image` FROM notice WHERE news_id = :news_id;";
        $get_image_stmt = $connection->prepare($get_image_query);
        $get_image_stmt->execute(['news_id' => $news_id]);
        $news_image = $get_image_stmt->fetch();


        $del_notice_query = "DELETE FROM notice WHERE news_id = :news_id;";
        $del_notice_stmt = $connection->prepare($del_notice_query);

        if ($del_notice_stmt->execute(['news_id' => $news_id])) {
            $image_path = '../' . dirname('media/pictures') . '/pictures/news_feed/' . $news_image->image;
            unlink( $image_path );
            header("Location: ../admin/notice.php?success=Notice deleted");
            exit();
        } else{
            header("Location: ../admin/notice.php?error=Something went wrong. Please try again.");
            exit();
        }

    }else {
        header("Location: ../admin/notice.php");
        exit();
    }