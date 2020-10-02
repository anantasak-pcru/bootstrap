
<?php
session_start();
include "conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM travel_location WHERE id = '$id'";

mysqli_query($link, $sql);

mysqli_close($link);

echo $id;


$_SESSION['alert_message'] = "🎉🎉 Delete location success.";
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
        title: 'Delete Complete',
        text: '😀',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then(() => {
            window.location = "index.php";
    })
</script>
</body>
</html>