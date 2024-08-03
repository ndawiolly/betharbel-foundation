<?php
include "dbconnect.php";
session_start();

if (isset($_POST['upload'])) {

    $title = $_POST['title'];
    $description = $_POST['descr'];
    $amount = $_POST['amount'];
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    $allowed = array("png", "jpg", "jpeg", "gif");

    //  Get File Extension
    $ext = explode(".", $file_name);
    $ext = end($ext);
    $ext = strtolower($ext);

    if (!in_array($ext, $allowed)) {
        echo "file format not allowed";
    } else {
        if ($file_size > 5000000) {
            echo "file too large";
        } else {
            if ($file_error > 0) {
                echo "file is corrupted";
            } else {
                $fileNewName = time() . '.' . $ext;
                if (!move_uploaded_file($file_tmp, "../images/book_images/" . $fileNewName)) {
                    echo "Failed to upload image";
                } else {
                    $sql = "INSERT INTO projects(project_title,project_description,project_amount,project_image) VALUES(?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    // var_dump($stmt);
                    mysqli_stmt_bind_param($stmt, "ssss", $title, $description, $amount, $fileNewName);


                    $execute = mysqli_stmt_execute($stmt);
                    if (!$execute) {
                        echo "Uploading project failed";
                    } else {
                        $_SESSION['success_msg'] = "Project Upload was successful!!!";
                        header("Location: " . $_SERVER['HTTP_REFERER']);
                    }
                }
            }
        }
    }
} else {
    $_SESSION['error_msg'] = "Fill in the forms!!!";
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
