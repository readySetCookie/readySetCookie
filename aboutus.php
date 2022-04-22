<?php
    include('core/config.php');
    include('core/functions.php');
    include('templates/head.php');
?>
<body>


    <!-- Body Inner -->
    <div class="body-inner">
        <?php include('templates/navbar.php'); ?>

        <section class="halfscreen" data-bg-parallax="images/half.jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="container-fullscreen text-center">
                    <div class="text-middle">
                        <h4 data-animate="fadeInUp" data-animate-delay="700">It's About</h4>
                        <h1 data-animate="fadeIn" data-animate-delay="500" class="text-lg"><span class="text-rotator"
                                data-animation="fadeIn" data-speed="3000">US, COOKIES</span> </h1>
                        <div data-animate="fadeInDown" data-animate-delay="900">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- OUR STORY -->
        <section data-animate="fadeInUp" id="section-about" class="p-t-150 background-image"
            style="background-image:url(images/1.jpg);">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-animate="fadeIn">
                            <div class="col-lg-3">
                                <div class="heading-text heading-section">
                                    <h2>OUR STORY</h2>
                                </div>
                            </div>
                            <p>Founded in 2017, readySetCookie is a home-based cookie bakery that
                                offers delectable handmade, fresh-baked halal and gluten-free cookies for individual
                                consumption, retail, wholesale, and food-made orders.
                                We strive to achieve that delectable flavour that you have come to love all these years.
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- end: OUR STORY -->

    <!-- ABOUT CAFFE 2 -->
    <section class="p-b-150 p-t-20 background-image"
        style="background-image:url(images/2.jpg);">
        <div class="container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6" data-animate="fadeIn">
                        <div class="col-lg-3">
                            <div class="heading-text heading-section">
                                <h2>OUR FOUNDER</h2>
                            </div>
                        </div>
                        <p>Lina started baking when she was 21 as a platform to showcase creativity, boldness and
                            passion.
                            "The secret in doing bakery business is, doing it sincerely and the best we can!", says
                            cheerful
                            Lina.
                            I make sure there is a unique concept with the focus of making consistency and quality
                            of not
                            just the products but also the service.
                            Bake from the heart, serve with passion
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- end: ABOUT CAFFE 2 -->

    <!-- REVIEWS -->
    <section id="section-reviews" class="p-t-150 p-b-100" data-bg-parallax="homepages/caffe/images/parallax/4.jpg">
        <div class="triangle-divider-top"></div>
        <div class="container">
            <!-- Testimonials -->
            <div class="carousel equalize testimonial testimonial-box" data-margin="50" data-arrows="false"
                data-items="3" data-equalize-item=".testimonial-item">

                <!-- Testimonials item -->
                <div class="testimonial-item">
                    <img src="#" alt="">
                    <p>sedap!</p>
                    <span>Cik Rose</span>

                </div>
                <!-- end: Testimonials item-->

                <!-- Testimonials item -->
                <div class="testimonial-item">
                    <img src="images/team/9.jpg" alt="">
                    <p>readySetCookies !</p>
                    <span>Alan Monre</span>
                    <span>CEO, Square Software</span>
                </div>
                <!-- end: Testimonials item-->

                <!-- Testimonials item -->
                <div class="testimonial-item">
                    <img src="images/team/9.jpg" alt="">
                    <p>Crunchy outside but soft inside.</p>
                    <span>Alan Monre</span>
                    <span>CEO, Square Software</span>
                </div>
                <!-- end: Testimonials item-->

                <!-- Testimonials item -->
                <div class="testimonial-item">
                    <img src="images/team/10.jpg" alt="">
                    <p>Art is the only serious thing in the world. And the artist is the only person who is
                        never
                        serious.
                    </p>
                    <span>Resa Smith</span>
                    <span>Developer @Apple</span>
                </div>
                <!-- end: Testimonials item-->

                <!-- Testimonials item -->
                <div class="testimonial-item">
                    <img src="images/team/11.jpg" alt="">
                    <p>The world is a dangerous place to live; not because of the people who are evil, but
                        because of
                        the people who don't do anything about it.</p>
                    <span>Ariol Perry</span>
                    <span>Creative Designer</span>
                </div>
                <!-- end: Testimonials item-->

            </div>
            <!-- end: Testimonials -->
        </div>
        <div class="triangle-divider-bottom"></div>
    </section>
    <!-- end: REVIEWS -->


    </div>
    <?php 
        include('templates/footer.php'); 
        include('templates/script.php'); 
        ?>
</body>

</html>