<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content {
        display: flex;
        flex-wrap: wrap;
        border: 1px solid;
        background-color: yellowgreen;

    }

    .head {
        flex: 20%;
        border: 1px solid;
        width: 126px;
        text-align: center;
        border-radius: 10px;
        background-color: green;
        margin: 30px 32px;
        font-weight: bold;
    }
</style>

<body>
    <?php
    $color = [
        2 => 'blue',
        3 => 'yellow',
        4 => 'red',
        5 => 'white',
        6 => 'green',
        7 => 'blue',
        8 => 'yellow',
        9 => 'yellow'
    ];

    $arr = [2, 3, 4, 5, 6, 7, 8, 9];

    ?>
    <div class="content">
        <?php for ($i = 2; $i < 10; $i++) : ?>

            <?php if ($i ==  $arr[$i - 2]) : ?>
                <div class="head" id="color<?php echo $i ?>" style="background-color: <?php echo $color[$i] ?>;">
                    <?php for ($j = 1; $j < 10; $j++) : ?>
                        <p><span><?= $i ?></span> x <span><?= $j ?></span> = <?= $i * $j ?></p>
                    <?php endfor; ?>
                </div>
            <?php endif ?>
        <?php endfor; ?>
    </div>











</body>

</html>