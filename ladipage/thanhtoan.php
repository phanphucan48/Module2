<?php
session_start();

// var_dump($_SESSION["cart"]);

$b = 0;
foreach ($_SESSION["cart"] as $value) {
  $b += (int)$value["price"];
}
// echo "<pre>";
// print_r($_SESSION["cart"]);
if (isset($_GET['clear'])) {
  $clear = $_GET['clear'];
  for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
    if ($clear == $_SESSION["cart"][$i]["id"]) {
      array_splice($_SESSION["cart"], $i, 1);
    }
  }
}


// var_dump($b);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" href="thanhtoan.css" />
  <title>Document</title>
</head>

<body>
  <h1 class="cart"><i class=" fas fa-shopping-cart"></i>Giỏ hàng</h1>

  <form class="thanhtoan">
    <table class="thanhtoan-table" width=100%>
      <th>ID</th>
      <th>ảnh </th>
      <th>name</th>
      <th>giá</th>

      <?php foreach ($_SESSION["cart"] as $arr) : ?>
        <tr>
          <td><?= $arr["id"] ?></td>
          <td><img src="<?= $arr["image"] ?>" width="100px" height="100px" /></td>
          <td><?= $arr["name"] ?></td>
          <td><?= $arr["price"] ?></td>
          <td> <a href="thanhtoan.php?clear=<?= $arr['id']; ?>">Xoá</a></td>

        </tr>

      <?php endforeach; ?>



    </table>
    <div>tổng : <?php echo $b ?></div>

  </form>
</body>

</html>