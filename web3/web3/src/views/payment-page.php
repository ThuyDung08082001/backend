<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Payment - abc</title>
    <link rel="shortcut icon" href="../../assets/img/mountain_icon-icons.com_54385.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../../assets/css/smoothproducts.css">
</head>

<body>
<?php include '../../src/views/header.php'; ?>
    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Payment</h2>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        <div class="item"><span class="price price-img ">$200</span>
                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="../../assets/img/ip/ip12sh.jpg" style="padding:20px 0;" ></div>
                            <p class="item-name">Product 1</p>
                            <p class="item-description">Iphone 12 Màu Hồng cánh sen</p>
                        </div>
                        <div class="item"><span class="price price-img">$300</span>
                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="../../assets/img/ip/ip13sh.jpg" style="padding:20px 0;" ></div>
                            <p class="item-name">Product 2</p>
                            <p class="item-description">Iphone 13 128Gb</p>
                        </div>
                        <div class="item"><span class="price price-img ">$200</span>
                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="../../assets/img/ip/ip12ca.jpg" style="padding:20px 0;" ></div>
                            <p class="item-name">Product 1</p>
                            <p class="item-description">Iphone 12 cho bồ xếp </p>
                        </div>
                        <div class="total"><span>Total</span><span class="price">$1000</span></div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Credit Card Details</h3>
                        <div class="form-row">
                            <div class="col-sm-7">
                                <div class="form-group"><label for="card_holder">Card Holder</label><input class="form-control" type="text" id="card_holder" placeholder="Card Holder" name="card_holder"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group"><label>Expiration date</label>
                                    <div class="input-group expiration-date"><input class="form-control" type="text" placeholder="MM" name="expiration_month"><input class="form-control" type="text" placeholder="YY" name="expiration_year"></div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group"><label for="card_number">Card Number</label><input class="form-control" type="text" id="card_number" placeholder="Card Number" name="card_number"></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group"><label for="cvc">CVC</label><input class="form-control" type="text" id="cvc" placeholder="CVC" name="cvc"></div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Proceed</button></div>
                                <div class="text-center"><a class="small" href="../../index.php">Back To Home</a></div>

                            </div>
                        </div>
                    </div>
                </form>
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