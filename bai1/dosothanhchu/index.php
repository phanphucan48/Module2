<?php
if ($_SERVER["REQUEST_METHOD" == "POST"]) {
    $number = $_POST["name"];
    if ($number >= 0 and $number < 10) {
        switch ($number) {

            case "1":
                return "ten";
            case "2":
                return "twenty";
            case "3":
                return "thirty";
            case "4":
                return "forty";
            case "5":
                return "fifty";
            case "6":
                return "sixty";
            case "7":
                return "seventy";
            case "8":
                return "eighty";
            case "9":
                return "ninety";
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