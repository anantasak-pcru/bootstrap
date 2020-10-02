<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <?php
    session_start();
    include "script.php";
    ?>
</head>
<body>
<?php
include "nav.php";
?>
<table align="center" style="width: 100%; height: 150px">
    <tbody>
    <tr>
        <td align="center">
            <div style="width: 80%; text-align: right; margin-top: 10px;">

                <a href="frm_add_location.php" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Add Location
                </a>
                <?php
                if (isset($_SESSION['alert_message'])) {
                    $msg = $_SESSION['alert_message'];
                    echo '<div class="alert alert-success" role="alert" style="margin-top: 10px; margin-right: 10px;">' . $msg . '</div>';
                    unset($_SESSION['alert_message']);
                }
                if(isset($_SESSION['err_message'])) {
                    $msg = $_SESSION['err_message'];
                    echo '<div class="alert alert-danger" role="alert" style="margin-top: 10px; margin-right: 10px;">' . $msg . '</div>';
                    unset($_SESSION['err_message']);
                }
                ?>
            </div>
            <!--            Inner Table-->
            <table style="width: 80%; margin-top: 10px" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="15%">Image</th>
                    <th width="30%">Name</th>
                    <th width="15%">Province</th>
                    <th width="15%">Rating</th>
                    <th width="25%">Manage</th>
                </tr>
                </thead>

                <tbody>
                <?php
                include "conn.php";

                $sql = "select t.id, t.name as location_name,t.rating, p.name as province_name, t.url from travel_location as t left join provinces p on p.id = t.province_id;";
                $result = mysqli_query($link, $sql);

                while ($row = mysqli_fetch_object($result)) {

                    ?>

                    <tr>
                        <td align="center">
                            <img src="<?php echo $row->url ?>" alt="" height="60px" width="120px">
                        </td>
                        <td><?php echo $row->location_name; ?></td>
                        <td><?php echo $row->province_name; ?></td>
                        <td align="center">
                            <?php
                            $rating = intval($row->rating);
                            echo str_repeat('⭐', $rating);
                            ?>
                        </td>
                        <td align="center">

                            <button class="btn btn-warning" href="#">
                                <i class="fas fa-pen"></i> Edit
                            </button>

                            <button class="btn btn-danger" onclick="deleteLocation(<?php echo $row->id; ?>)">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>

                        </td>
                    </tr>


                    <?php
                }
                ?>
                </tbody>


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
<script>
    function deleteLocation(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete location",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "delete_location.php?id=" + id;
            }
        })
    }
</script>
</body>
</html>

<?php
mysqli_close($link);
