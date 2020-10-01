<?php

$dataBaseName = "bootstrap_workshop";

$userName = "root";

$passWord = "";

$host = "localhost";

$link = mysqli_connect($host, $userName, $passWord, $dataBaseName);

mysqli_set_charset($link, "utf8");
if (mysqli_connect_errno()) {
    echo "Connection Error Code: " . mysqli_connect_errno() . " -> " .mysqli_connect_error();
    exit();
}
//else {
//    echo "Connected !!";
//}