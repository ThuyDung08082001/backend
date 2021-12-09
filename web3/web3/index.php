<?php
include_once './config/config.php';
spl_autoload_register(function ($className) {
    include_once './models/' . $className . '.php';
});
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - abc</title>
    <link rel="shortcut icon" href="./assets/img/mountain_icon-icons.com_54385.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">ABC SHOP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
            
                <div class="box">
                    <input type="text" placeholder="Search here">
                    <a><i class="fas fa-search-location"></i></a>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./src/views/catalog-page.php">Catalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="./src/views/shopping-cart.php">Shopping Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="./src/views/contact-us.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./src/views/log/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
    <section class="clean-block slider dark">
            <div class="container">
                
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="assets/img/ip/11de2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="assets/img/ip/12de2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="assets/img/ip/13de2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="assets/img/ip/14de2.jpg" alt="Slide Image">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Thông Tin Sản Phẩm Sắp Được Ra Mắt</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/ip/ip14.jpg"></div>
                    <div class="col-md-6" style="margin-top: 3rem;">
                        <h3 >Iphone 14</h3>
                        <div class="getting-started-info">
                            <p>Nếu đúng như dự kiến thì rất có thể rằng iPhone 14 Pro Max sẽ được cho ra mắt bởi Apple vào năm 2022 nếu các thử nghiệm về chip mới cũng như các công nghệ mới được đề cập ở trên hoàn thành trong cuối năm 2021. Tuy nhiên vẫn chưa có thông tin hoàn toàn chính xác nào về ngày ra mắt trên thị trường nên chúng ta chỉ có thể tiếp tục chờ đợi tin tức từ Apple..</p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button">Pre-Order Now</button>
                    </div>

                </div>

            </div>
            </div>
        </section>
        
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">More</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card">
                            <img class="card-img-top w-100 d-block" src="assets/img/ip/11de1.jpg">
                            <div class="card-body info">
                                <p class="card-text">iPhone 11 sở hữu kích thước và ngôn ngữ thiết kế giống với iPhone XR, gồm hai mặt kính kết hợp với khung nhôm. Chiếc máy có sáu tùy chọn màu sắc, bao gồm Purple, Yellow, Green, Black, White và Product Red...</p>
                                <a href="./src/views/shopping-cart.php">
                                    <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/ip/12de3.jpg">
                            <div class="card-body info">
                                <p class="card-text">iPhone 12 mỏng hơn 11%, nhỏ hơn 15% và nhẹ hơn 16% so với phiên bản tiền nhiệm. Chiếc iPhone 12 vẫn tiếp tục sở hữu màn hình kích thước 6.1 inch, trong khi đó iPhone 12 Mini có kích thước màn hình nhỏ hơn với chỉ 5.4 inch...</p>
                                <a href="./src/views/shopping-cart.php">
                                    <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card">
                            <img class="card-img-top w-100 d-block" src="assets/img/ip/13de.jpg">
                            <div class="card-body info">

                                <p class="card-text">Cụm camera của iPhone được đặt chéo, thay vì đặt dọc như trên thế hệ trước. Phần khoét màn hình chứa cụm cảm biến được thiết kế ngắn lại, phần loa thoại được đặt lên phía trên cùng và dày hơn khoảng 0,25mm  ...</p>
                                <a href="./src/views/shopping-cart.php">
                                    <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './src/views/footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>