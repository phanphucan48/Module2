<?php
include "./connect.php";
// if ($_SERVER['REQUEST_METHOD '] == 'POST') {
// }
$query = 'SELECT * FROM cuahangdienthoai.user;';

$stmt = $pdo->query($query);
$stmt = $stmt->fetchAll();
// die(var_dump($stmt));

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication " class="image">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 thongbaoloi">


                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">UserName</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="text" name="userName" placeholder="User Name..." />
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                if (empty($_POST['userName'])) {
                                                    echo '<p style="color:red">***Vui Lòng Không Để Trống</p>';
                                                } else {
                                                    $userName = $_POST['userName'];

                                                    // die(var_dump($userName));

                                                }
                                            }

                                            ?>
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password...</label>

                                            <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="password" />
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                if (empty($_POST['password'])) {
                                                    echo '<p style="color:red">***Vui Lòng Không Để Trống</p>';
                                                } else {

                                                    $password = $_POST['password'];
                                                    // die(var_dump($userName));

                                                }
                                                // if ($_POST['UserName'] === 'SELECT username FROM cuahangdienthoai.user' && $_POST['password'] === 'SELECT password FROM cuahangdienthoai.user') {
                                                //     echo "thanh công";
                                                // }
                                                foreach ($stmt as $user) {
                                                    if ($user['username'] == $_POST['userName'] && $user['password'] == $_POST['password']) {

                                                        // die(var_dump('aaaaaaa'));
                                                        header("location:./Dashboard.php ");
                                                    }
                                                }
                                            }


                                            ?>
                                        </div>


                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <!-- <a class="btn btn-primary" href="Dashboard.php">Login</a> -->
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Đăng ký</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>