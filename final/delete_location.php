<?php
include "conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM travel_location WHERE id = '$id'";

mysqli_query($link, $sql);

mysqli_close($link);

echo $id;

session_start();
$_SESSION['alert_message'] = "Delete user success";

header("LOCATION: index.php");