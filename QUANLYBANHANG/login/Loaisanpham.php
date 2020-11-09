<?php
include "./connect.php";
$query = "SELECT * FROM quanlybanhang.loaisanpham";
$stmt = $pdo->query($query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="Loaisanpham">
        <h2>Loại San PHẩm</h2>
        <table>
            <th>ID</th>
            <th>Name</th>

            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $row['maloai'] ?></td>
                    <td><?= $row['TenLoai'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div>
        <a href="Themloaisp.php">Add</a>
    </div>
</body>

</html>