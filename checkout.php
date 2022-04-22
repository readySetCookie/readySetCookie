<?php
    include('core/config.php');
    include('core/functions.php');
    include('templates/head.php');
?>

<body>
<?php include('templates/navbar.php'); ?>
    <!-- Page title -->
    <section id="page-title">
            <div class="container">
                <div class="page-title">
                    <h1>Checkout</h1>
                    <span>Checkout details</span>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- SHOP CHECKOUT -->
        <section id="shop-checkout">
            <div class="container">

                <div class="row">
                    <div class="col-8">
                        <!-- Step 1 - Shipping details -->
                        <div class="card">
                            <div class="card-body p-4">
                                <form id="form-checkout" class="form-validate">
                                    <span class="text-muted text-sm font-italic">Step 1 of 3</span>
                                    <h4 class="mb-4">Shipping details</h4>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="form-control" name="surname" placeholder="Enter your Surname" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="telephone">Telephone</label>
                                            <input class="form-control" type="tel" name="telephone" placeholder="Enter your Telephone number" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter your Street Address" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="address-2">Apt, suite, etc.</label>
                                            <input type="text" class="form-control" name="address-2" placeholder="Enter your Street Address" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="Enter your City" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="zip">Zip Code:</label>
                                            <input type="number" class="form-control" name="zip" placeholder="Enter Zip Code" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="state">State</label>
                                            <select name="state" class="form-select" required>
                                                <option value="">Select country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-1 mt-5">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" name="reminders" id="reminders" class="form-check-input" value="1" required>
                                            <label class="form-check-label" for="reminders">Send me occasional
                                                reminders
                                                about these settings</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" name="terms_conditions" id="terms_conditions" class="form-check-input" value="1" required>
                                            <label class="form-check-label" for="terms_conditions">By checking
                                                this
                                                option, you agree to acceot with the <a href="#">Terms and
                                                    Conditions</a>.</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end: Step 1 - Shipping details -->

                        <!-- Step 2 - Shipping method -->
                        <div class="card">
                            <div class="card-body p-4">
                                <span class="text-muted text-sm font-italic">Step 3 of 4</span>
                                <h4 class="mb-4">Shipping method</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="mb-3">
                                            <div class="form-check custom-radio d-flex align-items-center small">
                                                <input type="radio" class="form-check-input" id="shippingRadio1" name="shippingRadio" checked="">
                                                <label class="form-check-label" for="shippingRadio1">
                                                    <span class="d-block font-weight-bold">Free - Regular
                                                        shipping</span>
                                                    <span class="d-block text-muted"><i class="icon-truck"></i>
                                                        5-7 business days</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="mb-3">
                                            <div class="form-check custom-radio d-flex align-items-center small">
                                                <input type="radio" class="form-check-input" id="shippingRadio2" name="shippingRadio">
                                                <label class="form-check-label" for="shippingRadio2">
                                                    <span class="d-block font-weight-bold">$19.99 - Express
                                                        shipping</span>
                                                    <span class="d-block text-muted"><i class="icon-zap"></i>
                                                        1-3 business days</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Step 2 - Shipping method -->

                        <!-- Step 3 - Payment method -->
                        <div class="card">
                            <div class="card-body p-4">
                                <span class="text-muted text-sm font-italic">Step 3 of 4</span>
                                <h4 class="mb-4">Payment method</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check image-checkbox p-2 border rounded">
                                            <input id="option-1" type="radio" class="form-check-input" name="payment_method">
                                            <label class="form-check-label d-block text-center p-3" for="option-1">
                                                <img src="images/logos/mastercard-logo.png" alt="#" height="44">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check image-checkbox p-2 border rounded">
                                            <input id="option-2" type="radio" class="form-check-input" name="payment_method">
                                            <label class="form-check-label d-block text-center p-3" for="option-2">
                                                <img src="images/logos/paypal.png" alt="#" height="44">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check image-checkbox p-2 border rounded">
                                            <input id="option-3" type="radio" class="form-check-input" name="payment_method">
                                            <label class="form-check-label d-block text-center p-3" for="option-3">
                                                <i class="fas fa-university"></i>
                                                <span class="d-block font-weight-bold">Bank Transfer</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- end: Step 3 - Payment method -->

                        <!-- Step 4 - Order review -->
                        <div class="card">
                            <div class="card-body p-4">
                                <span class="text-muted text-sm font-italic">Step 4 of 4</span>
                                <h4 class="mb-4">Order Overview</h4>


                                <!-- Product item -->
                                <div class="d-flex align-items-start">
                                    <div class="col-4 px-0 mr-3 text-dark">
                                        <img src="images/shop/products/2.jpg" alt="Image Description" class="rounded img-fluid p-1">
                                    </div>
                                    <div class="flex-fill">
                                        <h4 class="h6 mb-0">T-shirt yellow</h4>
                                        <small class="d-block">Size: 9</small>
                                        <small class="d-block">Quantity: 1</small>
                                        <small class="d-block">Color: Red</small>
                                        <small class="d-block mt-2 font-weight-bold">Price: $19.99</small>
                                    </div>
                                    <div class="col-auto">
                                        <a class="d-block text-body text-sm mb-1" href="javascript:;">
                                            <i class="far fa-trash-alt mr-1"></i> Remove
                                        </a>
                                    </div>
                                </div>
                                <!-- end: Product item -->
                                <hr class="my-4">
                                <!-- Product item -->
                                <div class="d-flex align-items-start">
                                    <div class="col-4 px-0 mr-3 text-dark">
                                        <img src="images/shop/products/3.jpg" alt="Image Description" class="rounded img-fluid p-1">
                                    </div>
                                    <div class="flex-fill">
                                        <h4 class="h6 mb-0">T-shirt blue</h4>
                                        <small class="d-block">Size: 9</small>
                                        <small class="d-block">Quantity: 1</small>
                                        <small class="d-block">Color: Red</small>
                                        <small class="d-block mt-2 font-weight-bold">Price: $19.99</small>
                                    </div>
                                    <div class="col-auto">
                                        <a class="d-block text-body text-sm mb-1" href="javascript:;">
                                            <i class="far fa-trash-alt mr-1"></i> Remove
                                        </a>
                                    </div>
                                </div>
                                <!-- end: Product item -->


                            </div>
                        </div>
                        <!-- end: Step 4 - Order review -->
                    </div>

                    <div class="col-md-4">
                        <!-- Order Summary -->
                        <div class="card">
                            <div class="card-body p-4">
                                <!-- Title -->
                                <h2 class="h4 mb-0">Order summary</h2>
                                <!-- end: Title -->

                                <!-- Total Pice-->
                                <div class="media align-items-center mb-2">
                                    <div class="mr-3">
                                        <h4 class="h6 text-muted font-weight-normal mb-0">Item subtotal (2)</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span>$39.98</span>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-2">
                                    <div class="mr-3">
                                        <h4 class="h6 text-muted font-weight-normal mb-0">Shipping</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span>$0</span>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <h4 class="h6 text-muted font-weight-normal mb-0">Tax (8%)</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span>$6.78</span>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <h4 class="h4">Total</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-dark h4">$46.76</span>
                                    </div>
                                </div>
                                <!-- end: Total -->
                                <button type="submit" class="btn btn-primary btn-block mt-4" onclick="window.location.href='checkoutcompleted.php';">Place Order</button> 
                              
                            </div>
                        </div>
                        <!--  Order Summary -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SHOP CHECKOUT -->
        <!-- DELIVERY INFO -->
        <section class="background-grey p-t-40 p-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-gift"></i></a>
                            </div>
                            <h3>Free shipping on orders $60+</h3>
                            <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plane"></i></a>
                            </div>
                            <h3>Worldwide delivery</h3>
                            <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-history"></i></a>
                            </div>
                            <h3>60 days money back guranty!</h3>
                            <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: DELIVERY INFO -->
        <?php 
        include('templates/footer.php'); 
        include('templates/script.php'); 
        ?>
</body>

</html>