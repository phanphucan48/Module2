<?php
$arr = rand(1, 100);
if (isset($_POST['number'])) {
    $num = $_POST['number'];
    switch ($num) {
        case ($num < $arr):
            echo " Your number is lower! <br />";
            break;
        case ($num > $arr):
            echo " Your number is higher! <br />";
            break;
        case ($num == $arr):
            echo " Congratulations! You guessed the hidden number. <br />";
            break;
        case '':
            echo " You never set a number! <br />";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="number">
        <button type="submit" name="submit">Guess</button>

    </form>
    <?php


    ?>

</body>

</html>