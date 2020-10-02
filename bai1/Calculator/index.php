<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Simple Calculator</h1>
        <h3>Calculator</h3>
        <p>first peranf:</p>
        <input type="text" placeholder="nhap so" name="first">
        <p>first peranf:</p>
        <select name="Operator" id="">
            <option value="cong">+</option>
            <option value="tru">-</option>
            <option value="nhan">X</option>
            <option value="chia">/</option>
        </select>
        <p>first peranf:</p>
        <input type="text" placeholder="nhap so" name="last">
        <input type="submit" id="submit" value="Calculate">
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Number1 = $_POST["first"];
    $Number2 = $_POST["last"];
    $oPerator = $_POST["Operator"];
}
if ($Number1 == 0 || $Number2 == 0) {
    throw new Exception("Divison by zero");
}
if ($oPerator == "cong") {
    echo $Number1 + $Number2;
} else if ($oPerator == "tru") {
    echo $Number1 - $Number2;
} elseif ($oPerator == "nhan") {
    echo $Number1 * $Number2;
} elseif ($oPerator == "chia") {
    echo  $Number1 / $Number2;
}
?>

</html>