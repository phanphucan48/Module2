<?php
include "/Users/Admin/Desktop/chung-chi/module2/castudy2/ketnoi/connect.php";
$query = 'SELECT * FROM cuahangdienthoai.user;';






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <div class="row text-center">
            <div class="col-md-8 text-center">
                <h1 class="text-center ">Đăng Ký</h1>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center thongbaoloi">
                        <?php
                        if (isset($_POST['submit'])) {
                            if (empty($_POST['UserName']) or empty($_POST['Password'])) {
                                echo '<p style="color:red">Vui Lòng Không Để Trống</p>';
                            } else {
                                $userName = $_POST['UserName'];
                                $password = $_POST['Password'];
                                $password2 = $_POST['Password2'];
                                // echo $userName . '' . $password . '' . $password2;
                                if (strlen($userName) < 6 or strlen($password) < 6) {
                                    echo '<p style="color:red">UserName hoặc Password phải nhiều hơn 6 ký tự</p>';
                                } else {
                                    if ($password2 != $password) {
                                        echo '<p style="color:red"> Password không trùng nhau</p>';
                                    }
                                    $query = "INSERT INTO `cuahangdienthoai`.`user` (`username`, `password`) VALUES ('$userName', '$password');";
                                    $stmt = $pdo->query($query);
                                    echo '<p style="color:blue"> đăng ký thàng công</p>';
                                }
                            }
                        }

                        ?>

                    </div>
                </div>

                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">UserName</label>
                        <input type="text" class="form-control" name="UserName" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="Password" class="form-control" name="Password" id="">
                    </div>
                    <div class="form-group">
                        <label for="">EnterPassword</label>
                        <input type="Password" class="form-control" name="Password2" id="">
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="remaber-me">
                        <label for="remember-me" class="form-check-label"> remeber me</label>
                    </div> -->


                    <button type="submit" name="submit" class="btn btn-primary btn-block">Đăng ký</button>


                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>