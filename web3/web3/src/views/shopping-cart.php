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
    <title>Shopping Cart - abc</title>
    <link rel="shortcut icon" href="../../assets/img/mountain_icon-icons.com_54385.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../../assets/css/smoothproducts.css">
    <link rel="stylesheet" href="../../assets/bootstrap/css/lastfix.css">
</head>

<body>
<?php include '../../src/views/header.php'; ?>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="../../assets/img/ip/ip12sh.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Iphone 12</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">6.1 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">64GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$200</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="../../assets/img/ip/ip13sh.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Iphone 13</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">7.4inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">128GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="2"></div>
                                        <div class="col-6 col-md-2 price"><span>$300</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="../../assets/img/ip/ip12sh.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Iphone 12</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">6.1 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">64GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$200</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <h4><span class="text">Subtotal</span><span class="price">$1000</span></h4>
                                <h4><span class="text">Discount</span><span class="price">$0</span></h4>
                                <h4><span class="text">Shipping</span><span class="price">$2</span></h4>
                                <h4><span class="text">Total</span><span class="price">$1002</span></h4>
                                <a href="./payment-page.php">
                                <button class="btn-g12" type="button">Payment</button> 
                                </a>
                                <div class="text-center"><a class="small" href="../../index.php">Back To Home</a></div>

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