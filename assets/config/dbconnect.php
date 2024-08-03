<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "betharbel";

$conn = mysqli_connect($server,$username,$password,$dbname);

if (!$conn) {
    die ("Failed to Connect").mysqli_connect_error();
}
