<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <?php
    include "script.php";
    ?>
    <style>
        #example_length {
            float: left;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Travel Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<table class="table table-striped" align="center"  style="width: 100%; height: 150px">
    <tbody>
    <tr>
        <td align="center">
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="btn btn-success" href="frm_add_location.php" >
                    <i class="fas fa-plus-square"></i> Add Location
                </a>
                <?php
                if(isset($_SESSION['alert_message'])) {
                    $msg = $_SESSION['alert_message'];
                    echo "<h1>$msg</h1>";
                    unset($_SESSION['alert_message']);
                }
                ?>
            </div>
            <!--            Inner Table-->
            <div align="center" style="width: 80%">
                <table id="example" width="100%" style="margin-top: 10px; margin-bottom: 10px">
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
                                <a class="btn btn-warning" href="#">
                                    <i class="fas fa-pen"></i> Edit
                                </a>
                                <a class="btn btn-danger" href="delete_location.php?id=<?php echo $row->id;?>">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>


                        <?php
                    }
                    ?>
                    </tbody>





                </table>
            </div>

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
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>

<?php
mysqli_close($link);
