<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $id = $_POST['id'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $image = $_POST['image'];

    $arr =  array(
        "id" => $id,
        "name" => $name,
        "image" => $image,
        "price" => $price

    );
    // session_destroy();
    // die();


    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    } else {
        $_SESSION["cart"] = $_SESSION["cart"];
    }




    array_push($_SESSION["cart"], $arr);


    header('Location: thanhtoan.php');
}
