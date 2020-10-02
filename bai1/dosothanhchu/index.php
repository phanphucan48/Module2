<?php
if ($_SERVER["REQUEST_METHOD" == "POST"]) {
    $number = $_POST["name"];
    if ($number >= 0 and $number < 10) {
        switch ($number) {

            case "1":
                return "once";
            case "2":
                return "two";
            case "3":
                return "three";
            case "4":
                return "for";
            case "5":
                return "five";
            case "6":
                return "six";
            case "7":
                return "sevent";
            case "8":
                return "eight";
            case "9":
                return "nine";
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>Doc so thanh chu</h2>
        <input type="text" name="number" placeholder="nhap so">\
        <input type="submit" id="submit" value="Result">
    </form>
</body>

</html>