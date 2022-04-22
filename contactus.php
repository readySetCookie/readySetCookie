<?php
    include('core/config.php');
    include('core/functions.php');
    include('templates/head.php');
?>

<body>
    <?php include('templates/navbar.php'); ?>
    <!-- Body Inner -->
    <div class="body-inner">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>We're just one click away to help you on your cookies gastronomique journey. Fill in the form
                            to share more details about your concern. Or your favorite cookies flavor. Either way, we’d
                            love to talk. We don't bite.</p>
                    </div>
                    <div class="col-lg-6">
                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                            method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" required
                                        class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" required
                                        class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" required
                                        class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" required rows="5"
                                    class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit" id="form-submit"><i
                                    class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: CONTENT -->
    </div>
    <?php 
        include('templates/footer.php'); 
        include('templates/script.php'); 
        ?>
</body>

</html>