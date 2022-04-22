<?php
    include('core/config.php');
    include('core/functions.php');
    include('templates/head.php');
?>

<body>
    <?php include('templates/navbar.php'); ?>
    <div class="master-box">
        <div class="faq-header">
            <br>
            <h1 data-animate="fadeIn">Frequently Asked Questions</h1>
            <div class="filter-search">
                <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search">
                <div id="myBtnContainer">
                    <button class="btnA active" onclick="filterSelection('all')">Show all</button>
                    <button class="btnA" onclick="filterSelection('General')">General</button>
                    <button class="btnA" onclick="filterSelection('orders')">Ordering</button>
                    <button class="btnA" onclick="filterSelection('pickup')">Pick Up</button>
                    <button class="btnA" onclick="filterSelection('delivery')">Delivery</button>
                </div>
            </div>
        </div>

        <ul id="myUL">
            <li class="filterDiv General">
                <span class="accordion-thumb">Are you halal-certified?</span>
                <p class="accordion-panel">Yes, all of our facilities and products are halal-certified by MUIS.</p>
            </li>
            <li class="filterDiv General">
                <span class="accordion-thumb">Where are you located?</span>
                <p class="accordion-panel">readySetCookie is a home-based business setting. For self-collection, please
                    head down to 123 Tampines Road #01-01 Singapore (888123).</p>
            </li>
            <li class="filterDiv General">
                <span class="accordion-thumb">What are the payment methods?</span>
                <p class="accordion-panel">Our online store accepts debit card payments via Paynow. </p>
            </li>
            <li class="filterDiv General">
                <span class="accordion-thumb">Do you do delivery?</span>
                <p class="accordion-panel">Yes, we do! Place your order on this site and choose your delivery date and
                    time upon CHECKOUT.</p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">How long in advance do I need to place my order?</span>
                <p class="accordion-panel">Do order at least 3 days in advance.</p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">Are your prices inclusive of 7% GST?</span>
                <p class="accordion-panel">We absorb 7% GST on all the products listed on this site.</p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">Are your prices inclusive of delivery fees?</span>
                <p class="accordion-panel">No, the prices do not include delivery fees. You may choose either
                    1) Self-Collection
                    2) Island wide delivery (+$15).
                    Order more than >$80 will enjoy free delivery
                </p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">How do I track my order?</span>
                <p class="accordion-panel">You can call us at 8123 8888 with your order number RSC-XXXX and we can check
                    for you and let you know.</p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">Can I order through the phone?</span>
                <p class="accordion-panel">We do not recommend ordering over the phone.</p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">There’s an issue with my order, who can I contact regarding this
                    matter?</span>
                <p class="accordion-panel">Please <a href='mailto:readysetcookies@gmail.com'>email us.</a>
                    Alternatively, you may call us at 8123 8888 and please quote your order number RSC-XXXX.</p>
            </li>
            <li class="filterDiv orders">
                <span class="accordion-thumb">Can I cancel my order and get a refund?</span>
                <p class="accordion-panel">No cancellations are allowed if we are notified less than three days from the
                    pick-up/delivery date. All other cancellations will be considered case-by-case. </p>
            </li>
            <li class="filterDiv pickup">
                <span class="accordion-thumb">Where do I self-collect/pick up from?</span>
                <p class="accordion-panel">Self-collection: 123 Tampines Road #01-01 Singapore (888123)
                    Operating days: Monday to Sunday
                    Operating hours: 11 am to 7 pm
                </p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">How much is delivery and what are the options?</span>
                <p class="accordion-panel">You may choose either
                    1) Self-Collection
                    2) Island wide delivery (+$15).
                    Kindly note that each delivery carries a certain amount of risk, and we're not responsible for them.
                    We appreciate it if you self collect as much as possible.
                </p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">How much do I spend to qualify for free delivery?</span>
                <p class="accordion-panel">You qualify for free delivery with a minimum spend of $80.</p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">What is the earliest delivery time?</span>
                <p class="accordion-panel">9 am-11 am is the earliest delivery slot.</p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">How do I know when my order is ready for collection or on its way?</span>
                <p class="accordion-panel">Do login to your account to check. Alternatively, you may call us at 8123
                    8888 to follow up on the status of your order.</p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">Can I request a specific time for my delivery to arrive?</span>
                <p class="accordion-panel">Our team will try our very best to meet a specific time request. However do
                    note that deliveries may be subject to delays due to traffic conditions, etc. We work with
                    third-party delivery vendors who may have other deliveries to fulfil, hence we provide a two-hour
                    delivery window.</p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">What happens if I am not around during delivery?</span>
                <p class="accordion-panel">Should no-one answer the door at the time of delivery, our delivery man will
                    call or text you. If you are unable to receive the item yourself, please arrange for someone to
                    receive it. There will be a 15-minute waiting period.
                    In the event that the driver is instructed to leave the items outside the premises, such as on a
                    door handle or a cabinet, we are not responsible for the condition of the items after delivery.
                </p>
            </li>
            <li class="filterDiv delivery">
                <span class="accordion-thumb">There’s been a change of plans! Can I change my delivery date and/or time?</span>
                <p class="accordion-panel">Please<a href='mailto:readysetcookies@gmail.com'>email us.</a> and type in your order number. Our order number looks like this: RSC-XXXX. We may not be able to make changes if we receive very short notice, i.e. less than 3 working days. Alternatively, you may call us at 8123 8888 and please quote your order number RSC-XXXX.
                </p>
            </li>
        </ul>


    </div>
    <!--container-->
    <?php 
include('templates/footer.php'); 
?>

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <!--Plugins-->
    <!-- jQuery 3.6.0 script -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- Bootstrap 5.1.3 script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Tether 1.4.7 script -->
    <script src="https://cdn.jsdelivr.net/npm/tether@2.0.0-beta.5/js/tether.min.js"></script>

    <!-- Font Awsome script -->
    <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"
        integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.js"
        integrity="sha512-0hV9FhQc44B5NIfBhQFNBTXrrasLwG6SVxbRiaO7g6962sZV/As4btFdLxXn+brwH7feEg3+AoyQxZQaArEjVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="images/icons/feather.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>

    <script src="js/custom.js"></script>

</body>

</html>