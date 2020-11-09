<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stype.css">
    <link href="./fontawesome-free-5.15.1-web/css/all.min.css" rel="stylesheet" />
    <title>Shop</title>
</head>

<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning navbar-light">
        <div class="container ">
            <div class="heder__logo">
                <img src="LogoSample_ByTailorBrands.jpg" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i>Trang chủ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-bell"></i>Thông báo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-hands-helping"></i>Trợ Giúp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown">
                            <i class="fas fa-user-lock"></i> Đăng Nhập
                        </a>
                        <div class="dropdown-content" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Đangky/Đangky.php">Đăng ký</a>
                            <a class="dropdown-item" href="#">Đăng Nhập</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-cart-plus"></i>Giỏ Hàng</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <input class="form-control mr-sm-2" type="search" placeholder="Bạn muốn tìm.." aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>Search</button>
                </form>
            </div>
        </div>


    </nav>
    <!-- end menu -->
    <div class="container ">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="fas fa-mobile-alt"></i>Điên thoại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-laptop"></i>LapTop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-tablet"></i>Tablet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-keyboard"></i></i>Phụ Kiện</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-clock"></i>Đồng Hồ Thời Trang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-laptop-code"></i>Máy Cũ Giá Rẽ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-sim-card"></i>Sim , Thẻ cào</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-desktop"></i>PC, Máy in</a>
            </li>

        </ul>
    </div>
    <!-- slide -->
    <div id="carouselExampleIndicators" class="carousel slide mt-1  " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/10/banner/iphone-12-800-300-800x300-3.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/M51-800-300-800x300.png  " alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/Normal-Note20-800-300-800x300-1.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end slide -->
    <!-- show product -->
    <div class="container">
        <div class="row mt-5">
            <h2 class="list-product-title">New Product</h2>
            <div class="list-product-subtitle">
                <p>List product description</p>
            </div>
            <div class="product-group">
                <div class="row">
                    <div class="col-md-3 col-ms-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-6 col-12 mb-3">
                        <div class="card card-product">
                            <img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>

    <!-- end show -->

    <div class="footer">

    </div>




    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>