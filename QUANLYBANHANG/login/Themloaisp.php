<?php
include "./connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert_Themloaisp.php" method="post">
        <table>

            <tr>
                <td>Ten Loại</td>
                <td><input type="text" name="tenloai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="ThemloaiSp" value="ThêmLoạiSp"></td>
                <td></td>
            </tr>
        </table>

    </form>



</body>

</html>