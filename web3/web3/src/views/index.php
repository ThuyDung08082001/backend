<?php
include_once '../../config/config.php';
spl_autoload_register(function ($className) {
    include_once '../../models/' . $className . '.php';
});
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - abc</title>
    <link rel="shortcut icon" href="./../../assets/img/mountain_icon-icons.com_54385.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../../assets/css/smoothproducts.css">
</head>

<body>
<?php include '../../src/views/header.php'; ?>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;../../assets/img/ip/ip131.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-light btn-lg" type="button">Order Now</button>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="../../assets/img/ip/ip14.jpg"></div>
                    <div class="col-md-6">
                        <h3>Lorem impsum dolor sit amet</h3>
                        <div class="getting-started-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button">Order Now</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Slider</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="../../assets/img/ip/11de2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="../../assets/img/ip/12de2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="../../assets/img/ip/13de2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="../../assets/img/ip/14de2.jpg" alt="Slide Image">
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
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Blog Post List</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="block-content">
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="../../assets/img/ip/ip12pro.jpg"></div>
                            <div class="col-lg-7">
                                <h3>Lorem Ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.
                                </p>
                                <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="../../assets/img/ip/ip13.jpg"></div>
                            <div class="col-lg-7">
                                <h3>Lorem Ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.
                                </p>
                                <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="../../assets/img/ip/11.jpg"></div>
                            <div class="col-lg-7">
                                <h3>Lorem Ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.
                                </p>
                                <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="../../assets/img/ip/ipx.jpg"></div>
                            <div class="col-lg-7">
                                <h3>Lorem Ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.
                                </p>
                                <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">More</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card">
                            <img class="card-img-top w-100 d-block" src="../../assets/img/ip/11de1.jpg">
                            <div class="card-body info">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="../../assets/img/ip/12de3.jpg">
                            <div class="card-body info">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card">
                            <img class="card-img-top w-100 d-block" src="../../assets/img/ip/13de.jpg">
                            <div class="card-body info">
                                
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include '../../src/views/footer.php'; ?>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../../assets/js/smoothproducts.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
</body>

</html>