<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];
    if ($username === "admin" && $password === "admin") {
        echo "<h2> Welcome <span style:'color:red'>" . $username . "</span> to website</h2>";
    } else {
        echo "<h2><span style:'color:red'>Login Error</span> </h2>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .login {
            height: 180px;
            width: 230px;
            margin: 0;
            padding: 10px;
            border: 1px solid black;
            box-shadow: 2px 2px 3px cadetblue;

        }

        .login input {
            padding: 5px;
            margin: 5px;
        }
    </style>

</head>

<body>
    <form action="" method="get">
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="username" size="20" required>
            <input type="password" name="password" placeholder="password" size="20" required>
            <input type="submit" value="sign in">
        </div>
    </form>
</body>

</html>