<?php
    require_once '../database_connection/connection_instance.php';

if (isset($_POST['change'])) {
    $admin_id = $_POST['admin_id'];
    $old_password = trim($_POST['old_password']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($old_password)) {
        header("Location: ../admin/dashboard.php?error=Enter your old password.");
        exit();
    }

    if (empty($new_password)) {
        header("Location: ../admin/dashboard.php?error=Enter a new password.");
        exit();
    }

    if (strlen($new_password) < 8) {
        header("Location: ../admin/dashboard.php?error=Password must be 8 characters and more.");
        exit();
    }

    if (empty($confirm_password)) {
        header("Location: ../admin/dashboard.php?error=Confirm your new password.");
        exit();
    }


    ## Making database fetch
    $admin_select_query = "SELECT pass_word FROM administrators WHERE admin_id = :admin_id;";
            
    // Statement 
    $stmt_admin = $connection->prepare($admin_select_query);
    $stmt_admin->execute(['admin_id' => $admin_id]);

    $admin_data = $stmt_admin->fetch(PDO::FETCH_ASSOC);

    if (password_verify($new_password,$admin_data['pass_word'])) {
        header("Location: ../admin/dashboard.php?error=You Cannot use old password again.");
        exit();
    }


    $hashed_password = password_hash($new_password,PASSWORD_DEFAULT);

    $update_query = "UPDATE administrators SET pass_word = :pass_word WHERE admin_id = :admin_id;";
    $update_stmt = $connection->prepare($update_query);


    if (!($update_stmt->execute(['pass_word' => $hashed_password, 'admin_id' => $admin_id]))) {
        header("Location: ../admin/dashboard.php?error=Something went wrong. Please try again.");
        exit();
    }

    header("Location: ../admin/dashboard.php?success=Password changed.");
    exit();


}