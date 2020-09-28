<?php
include "conn.php";

$province_id = $_POST['province_id'];
$location_name = $_POST['name'];
$rating = $_POST['rating'];
$url = $_POST['url'];

$sql = "INSERT INTO travel_location (name, province_id, rating, url) value ('$location_name', '$province_id', '$rating', '$url')";

mysqli_query($link, $sql);

mysqli_close($link);

header("LOCATION: index.php");
//echo $province_id . ' ' . $location_name . ' ' . $rating . ' ' . $url;