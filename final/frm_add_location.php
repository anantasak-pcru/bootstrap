<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add location</title>
    <?php
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
            <!--            Inner Table-->
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="btn btn-primary" href="index.php" >
                 <i class="fas fa-arrow-left"></i> Back to Index
                </a>

            </div>
            <div class="card" style="width: 25rem; padding: 20px">
            <form action="add_location.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table>
                    <tr>
<!--                        <td>Location Name:</td>-->
<!--                        <td><input type="text" name="name"></td>-->
                        <td colspan="2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                        </td>
                    </tr>
                    <tr>
<!--                       <td>Province: </td>-->
                       <td colspan="2">
                           <select name="province_id" id="" style="width: 100%" class="form-control form-control-sm">
                               <option value="">จังหวัด</option>
                            <?php
                                include "conn.php";
                                $sql = "SELECT * FROM provinces;";
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_object($result)) {
                            ?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                            <?php
                                }
                            ?>
                           </select>
                       </td>
                    </tr>
                    <tr>
                        <td>Rating: </td>
                        <td style="padding-left: 10px">
                            <input type="radio" name="rating" value="1"><label for="price1">⭐</label><br>
                            <input type="radio" name="rating" value="2"><label for="price1">⭐⭐</label><br>
                            <input type="radio" name="rating" value="3"><label for="price1">⭐⭐⭐</label><br>
                            <input type="radio" name="rating" value="4"><label for="price1">⭐⭐⭐⭐</label><br>
                            <input type="radio" name="rating" value="5"><label for="price1">⭐⭐⭐⭐⭐</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Image Url</span>
                                </div>
                                <input type="text" class="form-control" name="url" placeholder="Image Url" aria-label="Image Url" aria-describedby="basic-addon1">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 10px">
                            <input class="btn btn-success" style="width: 100%" type="submit" value="Save">
                        </td>
                    </tr>
                </table>

            </form>
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
</body>
</html>

<?php
mysqli_close($link);
