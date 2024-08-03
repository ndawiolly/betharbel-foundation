<?php 

require "dbconnect.php";
require "../includes/session.php";

if (isset($_GET['del']) ) {
    $del = $_GET['del'];
    

    $sql = "DELETE  FROM uploaded_books WHERE id = '$del' ";
    $query = mysqli_query($conn, $sql);
   
    if ($query) {
        $_SESSION['success_msg'] =  "Deleted Successful";
        header("location: ".$_SERVER['HTTP_REFERER']);
        exit();
        
    }else{
        $_SESSION['error_msg'] =  "Something went wrong.";
        header("location: ".$_SERVER['HTTP_REFERER']);
        exit();
}
}else{
    $_SESSION['error_msg'] =  "Something went wrong.";
    header("location: ../portal/author");
    exit();
}