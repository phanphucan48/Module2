<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="nhap ky tu">
        <input type="submit" value="submit">
    </form>
    <?php

    function demKytu($str, $x)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($x == $str[$i]) {
                $count += 1;
            }
        }
        return $count; 
    }

    if (isset($_POST["name"])) {
        $str = " phan phuc an";
        $x = $_POST["name"];

        echo demKytu($str, $x);
    }


    ?>
</body>

</html>