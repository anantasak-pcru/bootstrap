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
<table class="table table-dark" align="center" style="width: 100%; height: 100vh;">
    <tbody>
    <tr>
        <td align="center">
            <!--            Inner Table-->
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="btn btn-success" href="index.php" >
                   <i class="fas fa-backspace"></i> Back to Index
                </a>
                <h1></h1>
            </div>
            <form action="add_location.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                        <td>Location Name:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                       <td>Province: </td>
                       <td>
                           <select name="province_id" id="" style="width: 100%">
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
                        <td>
                            <input type="radio" name="rating" value="1"><label for="price1">⭐</label><br>
                            <input type="radio" name="rating" value="2"><label for="price1">⭐⭐</label><br>
                            <input type="radio" name="rating" value="3"><label for="price1">⭐⭐⭐</label><br>
                            <input type="radio" name="rating" value="4"><label for="price1">⭐⭐⭐⭐</label><br>
                            <input type="radio" name="rating" value="5"><label for="price1">⭐⭐⭐⭐⭐</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Image Url:</td>
                        <td><input type="text" name="url"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input style="width: 100%" type="submit" value="Save">
                        </td>
                    </tr>
                </table>

            </form>
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
