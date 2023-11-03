<?php 
    require_once '../database_connection/connection_instance.php';

    if (isset($_POST['delete_photo'])) {
        $photo_id = $_POST['photo_value_id'];

        $get_image_query = "SELECT `image` FROM photos WHERE photo_id = :photo_id;";
        $get_image_stmt = $connection->prepare($get_image_query);
        $get_image_stmt->execute(['photo_id' => $photo_id]);
        $photo_image = $get_image_stmt->fetch();


        $del_photo_query = "DELETE FROM photos WHERE photo_id = :photo_id;";
        $del_photo_stmt = $connection->prepare($del_photo_query);

        if ($del_photo_stmt->execute(['photo_id' => $photo_id])) {
            $image_path = '../' . dirname('media/pictures') . '/pictures/gallery/' . $photo_image->image;
            unlink( $image_path );
            header("Location: ../admin/gallery.php?success=Photo deleted");
            exit();
        } else{
            header("Location: ../admin/gallery.php?error=Something went wrong. Please try again.");
            exit();
        }

    }else {
        header("Location: ../admin/gallery.php");
        exit();
    }