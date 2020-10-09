<?php
include "conn.php";

$province_id = $_POST['province_id'];
$location_name = $_POST['name'];
$rating = $_POST['rating'];
$url = $_POST['url'];

$sql = "INSERT INTO travel_location (name, province_id, rating, url) value ('$location_name', '$province_id', '$rating', '$url')";

mysqli_query($link, $sql);

mysqli_close($link);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "script.php";
    ?>
</head>
<body>
<script>
    Swal.fire({
        title: 'Success',
        text: "😀😀😀😀😀😀😀😀",
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        window.location = "index.php";
    })
</script>
</body>
</html>
