<?php

require "dbconnect.php";

if (!isset($_POST['submit'])) {
    header("location:" . $_SERVER['HTTP_REFERER']);
} else {

    $contactname = $_POST['cont_name'];
    $contactemail = $_POST['email_address'];
    $contactphone = $_POST['phone_number'];
    $contactcomment = $_POST['comment'];

    $sql = "INSERT INTO contact_betharbel (cont_name,email_address,phone_number,comment) VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $contactname, $contactemail, $contactphone, $contactcomment);

    $execute = mysqli_stmt_execute($stmt);

    if (!$execute) {
        echo "Sent";
    } else {
        header("location:" . $_SERVER['HTTP_REFERER']);
    }
}
