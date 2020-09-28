<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<table align="center" border="2px" style="width: 100%; height: 150px">
    <tbody>
    <tr>
        <td>
            <div style="height: 150px; width: 100%;">
                <img src="./public/image/header.jpg" alt="header image"
                     style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </td>
    </tr>
    <tr>
        <td align="center">
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a href="frm_add_location.php" >Add Location</a>
                <?php
                session_start();
                if(isset($_SESSION['alert_message'])) {
                    $msg = $_SESSION['alert_message'];
                    echo "<h1>$msg</h1>";
                    unset($_SESSION['alert_message']);
                }
                ?>
            </div>
            <!--            Inner Table-->
            <table border="2px" width="80%" style="margin-top: 10px; margin-bottom: 10px">
                <tr>
                    <th width="15%">Image</th>
                    <th width="30%">Name</th>
                    <th width="15%">Province</th>
                    <th width="15%">Rating</th>
                    <th width="25%">Manage</th>
                </tr>

                <?php
                include "conn.php";

                $sql = "select t.id, t.name as location_name,t.rating, p.name as province_name, t.url from travel_location as t left join provinces p on p.id = t.province_id;";
                $result = mysqli_query($link, $sql);

                while ($row = mysqli_fetch_object($result)) {

                ?>

                    <tr>
                        <td align="center">
                            <img src="<?php echo $row->url?>" alt="" height="60px" width="120px">
                        </td>
                        <td><?php echo $row->location_name;?></td>
                        <td><?php echo $row->province_name;?></td>
                        <td align="center">
                            <?php
                               $rating = intval($row->rating);
                               echo str_repeat('⭐', $rating);
                            ?>
                        </td>
                        <td align="center">
                            <a href="#">Edit</a>
                            <a href="delete_location.php?id=<?php echo $row->id;?>">Delete</a>
                        </td>
                    </tr>


                <?php
                }
                ?>


            </table>
            <!--            Inner Table-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <h3> Awesome Footer </h3>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>

<?php
mysqli_close($link);
