<?php
    include('core/config.php');
    include('core/functions.php');
    include('templates/head.php');
?>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <?php include('templates/navbar.php'); ?>
        
        <!-- Slider with Particles -->
        <section class="fullscreen background-colored">
            <!-- Particles Scripts -->
            <div id="particles-snow" class="particles"></div>
            <div class="container">
                <div class="container-fullscreen">
                    <div class="text-middle text-center text-dark">
                        <!-- Captions -->
                        <h1 data-animate="fadeIn">BAKED FRESH ALWAYS!</h1>
                        <a data-animate="fadeIn" data-animate-delay="500" href="shop.php" class="btn btn-primary"><font color="white">SHOP
                            NOW</a></font>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end:  Slider with Particles -->
        <!-- end: Body Inner -->
        <?php 
        include('templates/footer.php'); 
        include('templates/script.php'); 
        ?>
</body>

</html>