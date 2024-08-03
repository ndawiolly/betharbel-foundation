<?php  
include "dbconnect.php";
include "../includes/session.php";



if (!isset($_POST['update'])) {
    header("location: ".$_SERVER['HTTP_REFERER']);
}
else{
    $id = $_POST['myid'];
    $cat = $_POST['cat'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];
   
    
    $sql = "UPDATE uploaded_books SET book_description = '$cat', book_title = ?, book_description = ? WHERE id = $id";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    // var_dump($stmt);
    mysqli_stmt_bind_param($stmt,'ss',$title,$descr);
    $execute = mysqli_stmt_execute($stmt);
    
    if ($execute) {
        $_SESSION['success_msg'] = "Updated Successfully";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['error_msg'] = "Not Updated ";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
}