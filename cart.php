<?php
    include('core/config.php');
    include('core/functions.php');
    include('templates/head.php');
?>

<body>
<?php include('templates/navbar.php'); ?>
    <!-- Body Inner -->
    <div class="body-inner">        
        <!-- Page title -->
        <section id="page-title">
            <div class="container">
                <div class="page-title">
                    <h1>Shopping Cart</h1>
                    <span>Shopping details</span>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- SHOP CART -->
        <section id="shop-cart">
            <div class="container">
                <div class="shop-cart">
                    <div class="table table-sm table-striped table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-remove"></th>
                                    <th class="cart-product-thumbnail">Product</th>
                                    <th class="cart-product-name">Description</th>
                                    <th class="cart-product-price">Unit Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td class="cart-product-thumbnail">
                                        <a href="#">
                                            <img src="images/shop/products/1.jpg" alt="Bolt Sweatshirt">
                                        </a>
                                        <div class="cart-product-thumbnail-name">Bolt Sweatshirt</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p><span>Bolt Sweatshirt</span>
                                            <span>Size: M</span>
                                            <span>Color: Blue</span>
                                            <span>Gender: Women</span>
                                        </p>
                                    </td>
                                    <td class="cart-product-price">
                                        <span class="amount">$20.00</span>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" class="minus" value="-">
                                            <input type="text" class="qty" value="1" name="quantity">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount">$20.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td class="cart-product-thumbnail">
                                        <a href="#">
                                            <img alt="Consume Tshirt" src="images/shop/products/2.jpg">
                                        </a>
                                        <div class="cart-product-thumbnail-name">Consume Tshirt</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p><span>Consume Tshirt</span>
                                            <span>Size: S</span>
                                            <span>Color: Blue</span>
                                            <span>Gender: Women</span>
                                        </p>
                                    </td>
                                    <td class="cart-product-price">
                                        <span class="amount">$18.99</span>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" class="minus" value="-">
                                            <input type="text" class="qty" value="1" name="quantity">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount">$18.99</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td class="cart-product-thumbnail">
                                        <a href="#">
                                            <img src="images/shop/products/3.jpg" alt="Logo Tshirt">
                                        </a>
                                        <div class="cart-product-thumbnail-name">Logo Tshirt</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p><span>Logo Tshirt</span>
                                            <span>Size: L</span>
                                            <span>Color: Grey</span>
                                            <span>Gender: Man</span>
                                        </p>
                                    </td>
                                    <td class="cart-product-price">
                                        <span class="amount">$9.00</span>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" class="minus" value="-">
                                            <input type="text" class="qty" value="2" name="quantity">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount">$18.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td class="cart-product-thumbnail">
                                        <a href="#">
                                            <img src="images/shop/products/5.jpg" alt="Grey Sweatshirt">
                                        </a>
                                        <div class="cart-product-thumbnail-name">Grey Sweatshirt</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p><span>Grey Sweatshirt</span>
                                            <span>Size: L</span>
                                            <span>Color: Grey</span>
                                            <span>Gender: Man</span>
                                        </p>
                                    </td>
                                    <td class="cart-product-price">
                                        <span class="amount">$22.99</span>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" class="minus" value="-">
                                            <input type="text" class="qty" value="3" name="quantity">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount">$68.97</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input type="text" placeholder="Coupon Code" id="CouponCode" class="form-control">
                                    <button type="submit" id="widget-subscribe-submit-button"
                                        class="btn btn-primary">Apply</button>

                                </div>
                                <p class="small">Enter any valid coupon or promo code here to redeem your discount.</p>
                            </form>
                        </div>
                        <div class="col-lg-8 text-end">
                            <button type="button" class="btn btn-primary">Update Card</button>
                        </div>
                    </div>
                    <div class="row">
                        <hr class="space">
                        <div class="col-lg-6">
                            <h4>Calculate Shipping</h4>
                            <form class="row">
                                <div class="col-lg-12 m-b-20">
                                    <select class="form-select">
                                        <option value="AX">Åland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="PW">Belau</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="VG">British Virgin Islands</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo (Brazzaville)</option>
                                        <option value="CD">Congo (Kinshasa)</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">CuraÇao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="CI">Ivory Coast</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao S.A.R., China</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="KP">North Korea</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PS">Palestinian Territory</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="QA">Qatar</option>
                                        <option value="IE">Republic of Ireland</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="ST">São Tomé and Príncipe</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="SX">Saint Martin (Dutch part)</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="SM">San Marino</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option selected="selected" value="GB">United Kingdom (UK)</option>
                                        <option value="US">United States (US)</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="WS">Western Samoa</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" placeholder="State / County" class="form-control">
                                </div>
                                <div class="col-lg-6  form-group">
                                    <input type="text" class="form-control" placeholder="Post Code / Zip">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 p-r-10 ">
                            <div class="table-responsive">
                                <h4>Cart Subtotal</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Cart Subtotal</strong>
                                            </td>
                                            <td class="cart-product-name text-end">
                                                <span class="amount">$125.96</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Shipping</strong>
                                            </td>
                                            <td class="cart-product-name  text-end">
                                                <span class="amount">Free Shipping</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Coupon</strong>
                                            </td>
                                            <td class="cart-product-name  text-end">
                                                <span class="amount">-20%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Total</strong>
                                            </td>
                                            <td class="cart-product-name text-end">
                                                <span class="amount color lead"><strong>$100.76</strong></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="checkout.php" class="btn icon-left float-right"><span>Proceed to Checkout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SHOP CART -->
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
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br> All rights reserved.
                                    Copyright © 2021. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923"
                                    class="btn btn-inverted" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2021 POLO - Responsive Multi-Purpose HTML5 Template.
                        All Rights Reserved.<a href="https://www.inspiro-media.com" target="_blank" rel="noopener">
                            INSPIRO</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <?php 
        include('templates/footer.php'); 
        include('templates/script.php'); 
        ?>
</body>

</html>