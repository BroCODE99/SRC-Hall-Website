<?php
require_once '../database_connection/connection_instance.php';
    require_once '../functions/functions.php';

    if (isset($_POST['add'])) {
        $photo_year = validate_text_input($_POST['year']);


        $picture_name = $_FILES['photo']['name'];
        $picture_temp_name = $_FILES['photo']['tmp_name'];
        $picture_size = $_FILES['photo']['size'];
        $picture_type = $_FILES['photo']['type'];



        // 
        if (empty($photo_year)) {
            header("Location: ../admin/gallery.php?error=Enter a year.");
            exit();
        }


        $allowed_ext = ['jpg', 'jpeg', 'png'];
        $get_file_ext = explode('.', $picture_name);
        $picture_ext = strtolower(end($get_file_ext));

 
    if (!(in_array($picture_ext,$allowed_ext))) {
        header("Location: ../admin/gallery.php?error=Picture type not allowed.");
        exit();
    }

    if (($_FILES['photo']['error'] > 0)) {
        header("Location: ../admin/gallery.php?error=There was an error. please try again.");
        exit();
    }

    if (($picture_size > 2000000)) {
        header("Location: ../admin/gallery.php?error=Picture size is too large.");
        exit();
    }

    $photo_id_query = "SELECT photo_id FROM photos ORDER BY photo_id DESC LIMIT 1;";
    $photo_id_stmt = $connection->prepare($photo_id_query);
    $photo_id_stmt->execute();
    $photo_id = $photo_id_stmt->fetch();
    $photo_id = $photo_id == null? $photo_id = 1 : intval($photo_id->photo_id) + 1;



    $new_picture_name = $photo_id . "." . $picture_ext;
    $picture_folder = '../' . dirname('media/pictures') . '/pictures/gallery/' . $new_picture_name;
    move_uploaded_file($picture_temp_name,$picture_folder);


    // 
    $photo_insert_query = "INSERT INTO photos (`photo_year`, `image`) VALUES (:photo_year, :photo);";
    $photo_insert_stmt = $connection->prepare($photo_insert_query);
    

    if (!($photo_insert_stmt->execute(['photo_year' => $photo_year, 'photo' => $new_picture_name]))) {
        header("Location: ../admin/gallery.php?error=Something went wrong. Please try again.");
        exit();
    }

        header("Location: ../admin/gallery.php?success=Photo added successfully.");
        exit();





    }else {
        header("Location: ../admin/gallery.php");
        exit();
    }