<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="index.css">

</head>

<body>
    <?php

    function loadRegistrations($filename)
    {
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata, true);
        return $arr_data;
    }
    ?>
    <?php
    $registrations = loadRegistrations('product.json');
    ?>

    <div class="topnav">

        <a href="#about">Dịch vụ</a>
        <a href="#contact">Hỗ Trợ </a>
        <a class="active" href="#home">Trang Chủ</a>
        <div class="search-container">
            <form action="" method="post">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="giohang">
            <i class="header__car-icon fas fa-cart-plus"></i>
            <span> <?php if (isset($_SESSION["cart"])) {
                        echo count($_SESSION["cart"]);
                    } else {
                        echo "0";
                    };  ?></span>

        </div>

        <?php
        $resut = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST["search"];
            $registrations = loadRegistrations('product.json');

            foreach ($registrations  as $registrations) {
                if ($registrations['sku'] == $search) {
                    array_push($resut, $registrations);
                }
            }
        }
        ?>
        <div class="products">
            <?php foreach ($resut as $registrations) : ?>

                <div class="sanpham">
                    <div class="anh">
                        <img src="<?= $registrations['image']; ?>">
                    </div>
                    <div class="id">ID : <?= $registrations['id']; ?></div>
                    <div class="id">Tên Sản Phẩm : <?= $registrations['sku']; ?></div>
                    <div class="name">Giá : <?= $registrations['price']; ?></div>
                    <div class="cost">Lượt Xem:<?= $registrations['view'] ?></div>
                    <form action="" method="get">
                        <div class="buy"><a href="thanhtoan.html">Mua</a> </div>
                    </form>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px" font-family:Bookman, Tahoma, Verdana>Cửa Hàng Thực Phẩm</h1>
            <p>Nói Không Với Hoá Chất Độc Hại</p>
            <a class="buton" href="dangky.html"> Đăng Ký</a>
        </div>
    </div>
    <?php
    $arrViewsort = $registrations;
    usort($arrViewsort, function ($a, $b) {
        return $b['view'] - $a['view'];
    });
    $arrViewMax  = array_slice($arrViewsort, 0, 24);
    ?>

    <div class="products">
        <?php foreach ($arrViewMax as $registrations) : ?>
            <form action="cart.php" method="post">
                <input type="text" name="id" value="<?= $registrations['id']; ?>" hidden>
                <input type="text" name="price" value="<?= $registrations['price']; ?>" hidden>
                <input type="text" name="name" value="<?= $registrations['sku']; ?>" hidden>
                <input type="text" name="image" value="<?= $registrations['image']; ?>" hidden>
                <div class="sanpham">
                    <div class="anh">
                        <img src="<?= $registrations['image']; ?>">
                    </div>
                    <div class="id">ID : <?= $registrations['id']; ?></div>
                    <div class="name">Tên Sản Phẩm : <?= $registrations['sku']; ?></div>
                    <div class="cost">Giá : <?= $registrations['price']; ?></div>
                    <div class="cost">Lượt Xem:<?= $registrations['view'] ?></div>

                </div>

                <button type="submit" class="buy">Thêm Vào</button>
            </form>

        <?php endforeach; ?>

    </div>
    <div class="fooder">
        <div>
            <h1>Thông Tin</h1>
            <h4>tel:+123456789</h4>
            <h4>Fax:+987654321</h4>
            <h4>Email:info@yourdomain.com</h4>
            <h4>1600 Amphitheatre</h4>
            <div class="icon">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-facebook-messenger"></i>
            </div>
        </div>


        <div>
            <h1>Thông Tin</h1>
            <h4>tel:+123456789</h4>
            <h4>Fax:+987654321</h4>
            <h4>Email:info@yourdomain.com</h4>
            <h4>1600 Amphitheatre</h4>
        </div>
        <div id="textWidget">
            <h1>Thông Tin</h1>
            <h4>tel:+123456789</h4>
            <h4>Fax:+987654321</h4>
            <h4>Email:info@yourdomain.com</h4>
            <h4>1600 Amphitheatre</h4>

        </div>

    </div>
    <div>

</body>

</html>