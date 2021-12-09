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
    <title>Catalog - abc</title>
    <link rel="shortcut icon" href="../../assets/img/mountain_icon-icons.com_54385.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
<?php include '../../src/views/header.php'; ?>
    <main class="page catalog-page">
    <section class="clean-block slider dark">
            <div class="container">
                
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
        <section class="clean-block clean-catalog dark">
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3>Categories</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Phones</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Laptops</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">PC</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Tablets</label></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>Brands</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Samsung</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Apple</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">HTC</label></div>
                                    </div>
                                    <div class="filter-item">
                                        <h3>OS</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Android</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">iOS</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse" id="filters">
                                    <div class="filters">
                                        <div class="filter-item">
                                            <h3>Categories</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Phones</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Laptops</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">PC</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Tablets</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Brands</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Samsung</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Apple</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">HTC</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>OS</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Android</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">iOS</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image">
                                                <a href="product/product-page.php"><img class="img-fluid d-block mx-auto" src="../../assets/img/ip/ip11ca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone 11</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image">
                                                <a href="product/product-page.php"><img class="img-fluid d-block mx-auto" src="../../assets/img/ip/ip12ca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone 12</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$200</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image">
                                                <a href="product/product-page.php"><img class="img-fluid d-block mx-auto" src="../../assets/img/ip/ipxca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone X</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$75</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters" style="margin:20px 0;" >
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image">
                                                <a href="product/product-page.php"><img class="img-fluid d-block mx-auto" src="../../assets/img/ip/11poca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone 11 Pro Max</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$150</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image">
                                                <a href="product/product-page.php"><img class="img-fluid d-block mx-auto" src="../../assets/img/ip/12poca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone 12 Pro Max</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$250</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image">
                                                <a href="product/product-page.php"><img class="img-fluid d-block mx-auto" src="../../assets/img/ip/13poca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone 13</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="text-center"><a class="small" href="../../index.php">Back To Home</a></div>
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