<?php

ob_start();

session_start();

$timezone = date_default_timezone_set("America/Detroit");
$con = mysqli_connect("localhost", "dougllma_dougg", "gqkR9Qytc", "dougllma_dougifyDB");


if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}



?>