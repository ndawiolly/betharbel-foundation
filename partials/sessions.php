<?php
session_start();


function success_msg()
{
    if (isset($_SESSION['success_msg'])) {
        $output = "<div class='alert bg-success w-75 text-center text-white alert-dismissible animate__animated animate__fadeOutDown animate__delay-5s' role='alert'><strong>";
        $output .= htmlentities($_SESSION['success_msg']);
        $output .= "</strong></div>";

        $_SESSION['success_msg'] = null;

        return $output;
    }
}

function error_msg()
{
    if (isset($_SESSION['error_msg'])) {
        $output = "<div class='alert bg-danger text-center text-white alert-dismissible fade show animate__animated animate__fadeOutDown animate__delay-5s' role='alert'><strong>";
        $output .= htmlentities($_SESSION['error_msg']);
        $output .= "</strong></div>";

        $_SESSION['error_msg'] = null;

        return $output;
    }
}
function success_like_msg()
{
    if (isset($_SESSION['success_like_msg'])) {
        $output = "<div class='alert bg-info text-center text-white alert-dismissible animate__animated animate__fadeOutDown animate__delay-5s'><strong>";
        $output .= htmlentities($_SESSION['success_like_msg']);
        $output .= "</strong></div>";

        $_SESSION['success_like_msg'] = null;

        return $output;
    }
}
function pass_incorrect()
{
    if (isset($_SESSION['pass_incorrect'])) {
        $output = "<div class='alert bg-danger text-center text-white alert-dismissible fade show' role='alert'><strong>";
        $output .= htmlentities($_SESSION['error_msg']);
        $output .= "</strong></div>";

        $_SESSION['pass_incorrect'] = null;

        return $output;
    }
}

function auth()
{
    if (!isset($_SESSION['user'])) {
        header('Location: ../../signin');
    }
}
function adminAuth(){
    if (!isset($_SESSION['author'])) {
        header('Location: ../../signin');
    }
}
