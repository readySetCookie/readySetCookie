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
                <h1>Order Completed</h1>
                <span>Congratulations! Your order is completed!</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- SHOP CHECKOUT COMPLETED -->
    <section id="shop-checkout-completed">
        <div class="container">
            <div class="p-t-10 m-b-20 text-center">
                <div class="text-center">
                    <h3>Congratulations! Your order is completed!</h3>
                    <p>Your order is number #123456. You can
                        <a href="loginsignup.php" class="text-underline">
                            <mark>view your order</mark>
                        </a> on your account page, when you are logged in.
                    </p>
                </div>
                <a href="loginsignup.php" class="btn icon-left m-r-10"><span>Go to login page</span></a><a
                    class="btn icon-left" href="shop.php"><span>Return To Shop</span></a>
            </div>
        </div>
    </section>
    <!-- end: SHOP CHECKOUT COMPLETED -->
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