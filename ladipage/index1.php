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
    function saveDataJSON($filename, $sku, $alias, $image)
    {
        $customerlist = array(
            "1" => array(
                "id" => 1,
                "sku" => "NOKA01",
                "alias" => "noka",
                "image" => "",
                "brand_id" => 4,
                "vendor_id" > 3,
                "price" => 7050,
                "cost" => 6650,
                "stock" => 98992,
                "sold" > 10,
                "type" => 2,
                "kind" => 0,
                "virtual" => 0,
                "status" => 1,
                "sort" => 0,
                "view" => 353,
                "date_lastview" => "2020-06-09 16:05:34",
                "date_available" => null,
                "created_at" => null,
                "updated_at" => "2020-06-09 16:05:34"

            )
        );
        $arr_data = loadRegistrations($filename);
        array_push($arr_data, $customerlist);
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        echo "Lưu dữ liệu thành công!";
    }
    $sku = NULL;
    $alias = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sku = $_POST["sku"];
        $alias = $_POST["alias"];
        $image = $_POST["image"];
    }


    ?>
    <?php
    $registrations = loadRegistrations('product.json');
    ?>

    <div class="navbar">

        <a href="#"><i class="fa fa-fw fa-search"></i> Tìm kiếm </a>
        <a href="#"><i class="fa fa-fw fa-envelope"></i> Dich vụ</a>
        <a href="#"><i class="fa fa-fw fa-user"></i> Hỗ Trợ</a>
        <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Trang chủ</a>
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

            <div class="sanpham">
                <div class="anh">
                    <img src="<?= $registrations['image']; ?>">
                </div>
                <div class="id">Tên Sản Phẩm : <?= $registrations['sku']; ?></div>
                <div class="name">Giá : <?= $registrations['price']; ?></div>
                <div class="cost">Lượt Xem:<?= $registrations['view'] ?></div>
                <div class="buy"><a href="thanhtoan.html">Mua</a> </div>
            </div>
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