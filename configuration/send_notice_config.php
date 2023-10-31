<?php
    require_once '../database_connection/connection_instance.php';
    require_once '../functions/functions.php';

    if (isset($_POST['publish'])) {
        $headline = validate_text_input($_POST['headline']);
        $body     = validate_text_input($_POST['body']);


        $picture_name = $_FILES['notice_image']['name'];
        $picture_temp_name = $_FILES['notice_image']['tmp_name'];
        $picture_size = $_FILES['notice_image']['size'];
        $picture_type = $_FILES['notice_image']['type'];




        // 
        if (empty($headline)) {
            header("Location: ../admin/notice.php?error=Enter a headline.");
            exit();
        }

        if (empty($body)) {
            header("Location: ../admin/notice.php?error=Notice body is empty.");
            exit();
        }


        $allowed_ext = ['jpg', 'jpeg', 'png'];
        $get_file_ext = explode('.', $picture_name);
        $picture_ext = strtolower(end($get_file_ext));

 
    if (!(in_array($picture_ext,$allowed_ext))) {
        header("Location: ../admin/notice.php?error=Picture type not allowed $picture_ext.");
        exit();
    }

    if (($_FILES['notice_image']['error'] > 0)) {
        header("Location: ../admin/notice.php?error=There was an error uploading picture. please try again.");
        exit();
    }

    if (($picture_size > 2000000)) {
        header("Location: ../admin/notice.php?error=Picture size is too large.");
        exit();
    }


    $notice_id_query = "SELECT news_id FROM notice ORDER BY news_id DESC LIMIT 1;";
    $notice_id_stmt = $connection->prepare($notice_id_query);
    $notice_id_stmt->execute();
    $notice_id = $notice_id_stmt->fetch();
    $notice_id = intval($notice_id->news_id) + 1;





    $new_picture_name = $notice_id . "." . $picture_ext;
    $picture_folder = '../' . dirname('media/pictures') . '/pictures/news_feed/' . $new_picture_name;
    move_uploaded_file($picture_temp_name,$picture_folder);


    // 
    $notice_insert_query = "INSERT INTO notice (`headline`,`body`,`image`) VALUES (:headline, :body, :notice_image);";
    $notice_insert_stmt = $connection->prepare($notice_insert_query);
    

    if (!($notice_insert_stmt->execute(['headline' => $headline, 'body' => $body, 'notice_image' => $new_picture_name]))) {
        header("Location: ../admin/notice.php?error=Something went wrong. Please try again.");
        exit();
    }

        header("Location: ../admin/notice.php?success=Notice send successfully.");
        exit();










    }