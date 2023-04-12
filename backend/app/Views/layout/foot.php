<!--Footer-->
<footer class="footer" id="footer">
            <div class="footer-top">
                <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <div class="newsletter mb-3">
                            <h4 class="title">Our Newsletter</h4>
                            <form action="#" method="post">
                                <p>to stay up-to-date on our promotions, discounts, sales, special offers and more.</p>
                                <div class="input-group">
                                    <input type="email" class="newsletter-input" name="email" value="" placeholder="Enter email address..." required>
                                    <span class="news-btn">
                                        <button type="submit" class="btn" name="commit" id="Subscribe"><i class="cp cp-paper-plane"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="social-col mb-3 clearfix">
                            <a href="#;" target="_blank"><i class="cpb cp-facebook-f"></i></a>
                            <a href="#;" target="_blank"><i class="cpb cp-twitter"></i></a>
                            <a href="#;" target="_blank"><i class="cpb cp-instagram"></i></a>
                            <a href="#;" target="_blank"><i class="cpb cp-google-plus"></i></a>
                            <a href="#;" target="_blank"><i class="cpb cp-linkedin-in"></i></a>
                            <a href="#;" target="_blank"><i class="cpb cp-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <div class="footer-col footer-links clearfix">
                            <h4 class="title">Quick Links</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                            <ul>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="gallery-grid-2column.html">Gallery</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <div class="footer-col footer-links clearfix">
                            <h4 class="title">Other Links</h4>
                            <ul>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                            <ul>
                                <li><a href="compare-product.html">Compare Product</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="term-condition.html">Term &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <div class="footer-col contact-col">
                            <h4 class="title">Contact</h4>
                            <ul>
                                <li><a href="mailto:info@example.com"><i class="cps cp-envelope-open"></i> info@example.com</a></li>
                                <li><a href="tel:309-437-4122"><i class="cps cp-phone"></i> 309-437-4122</a></li>
                                <li><i class="cps cp-map-marker"></i> 343 Coburn Hollow Road<br>Peoria, Illinois - 61602</li>
                                <li><i class="cps cp-clock"></i> 9:30 am - 6:30 pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p>Copyright &copy; 2022 Gacom. All Rights Reserved.</p>
                    </div>    
                </div>
            </div>
        </footer>
        <!--End Footer-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="cps cp-arrow-up"></i></span>
        <!--End Scoll Top-->
        
        <!--MiniCart Drawer-->
        <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div id="cart-drawer" class="block block-cart">
                        <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="cp cp-times"></i></a>
                        <h4>Your cart (3 Items)</h4>
                        <div class="minicart-content">
                            <ul class="clearfix">
                                <li class="item clearfix d-flex align-items-center">
                                    <a class="product-image" href="#">
                                        <img src="<?= base_url('temp_user/') ?>assets/images/products/110x110.jpg" alt="" title="">
                                    </a>
                                    <div class="product-details">
                                        <a href="#" class="remove"><i class="cp cp-times"></i></a>
                                        <a href="#" class="edit-i remove"><i class="cp cp-edit" aria-hidden="true"></i></a>
                                        <a class="product-title" href="shopping-cart-style1.html">Customize Your Ride With Tires</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="cp cp-minus" aria-hidden="true"></i></a>
                                                    <input type="text"  name="quantity" value="1" class="qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="cp cp-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span>$59.00</span>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item clearfix d-flex align-items-center">
                                    <a class="product-image" href="#">
                                        <img src="<?= base_url('temp_user/') ?>assets/images/products/110x110.jpg" alt="" title="">
                                    </a>
                                    <div class="product-details">
                                        <a href="#" class="remove"><i class="cp cp-times"></i></a>
                                        <a href="#" class="edit-i remove"><i class="cp cp-edit" aria-hidden="true"></i></a>
                                        <a class="product-title" href="shopping-cart-style1.html">MagnaFlow Exhaust Products</a>
                                        <div class="variant-cart">Red / S</div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="cp cp-minus" aria-hidden="true"></i></a>
                                                    <input type="text"  name="quantity" value="1" class="qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="cp cp-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span>$89.00</span>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item clearfix d-flex align-items-center">
                                    <a class="product-image" href="#">
                                        <img src="<?= base_url('temp_user/') ?>assets/images/products/110x110.jpg" alt="" title="">
                                    </a>
                                    <div class="product-details">
                                        <a href="#" class="remove"><i class="cp cp-times"></i></a>
                                        <a href="#" class="edit-i remove"><i class="cp cp-edit" aria-hidden="true"></i></a>
                                        <a class="product-title" href="shopping-cart-style1.html">Shock & Strut Set</a>
                                        <div class="variant-cart">Red / S</div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="cp cp-minus" aria-hidden="true"></i></a>
                                                    <input type="text"  name="quantity" value="1" class="qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="cp cp-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span>$89.00</span>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="minicart-bottom">
                            <div class="subtotal list">
                                <span>Shipping:</span>
                                <span class="product-price">$10.00</span>
                            </div>
                            <div class="subtotal list">
                                <span>Tax:</span>
                                <span class="product-price">$05.00</span>
                            </div>
                            <div class="subtotal">
                                <span>Total:</span>
                                <span class="product-price">$93.13</span>
                            </div>
                            <button type="button" class="btn proceed-to-checkout rounded">Checkout</button>
                            <button type="button" class="btn btn-secondary cart-btn rounded">View Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End MiniCart Drawer-->
        
        <!--Newsletter Popup-->
        <div id="newsletter-modal" class="style1 mfp-with-anim mfp-hide rounded-3">
            <div class="newsletter-popup d-flex flex-column">
                <div class="newsltr-text text-start">
                    <div class="wraptext">
                        <h3 class="mb-0 text-uppercase text-white">GET UP TO 25% OFF <span class="lbl nm_label3">Popular</span></h3>
                        <p class="sub-text text-white">Motherboard gaming yang sangat powerfull dikalangan para gaming sejati.</p>
                        <form action="#" class="mcNewsletter" method="post">
                            <div class="input-group rounded-3 d-flex">
                                <input type="email" class="newsletter__input border-0" name="EMAIL" value="" placeholder="Your Email address" required>
                                <button type="submit" class="btn btn-primary rounded" name="commit"><span>Subscribe</span></button>
                            </div>
                        </form>
                        <p class="checkboxlink mt-4 text-uppercase">
                            <input type="checkbox" id="dontshow" class="form-check-input m-0">
                            <label for="dontshow" class="mx-2 align-middle">Don't show this popup again</label>
                        </p>
                  </div>
                </div>
            </div>
                <button title="Close (Esc)" type="button" class="mfp-close"></button>
        </div>
	    <!--End Newsletter Popup-->

        <div class="modalOverly"></div>

        <!-- Including Jquery -->
        <script src="<?= base_url('temp_user/') ?>assets/js/vendor/jquery-min.js"></script>
        <script src="<?= base_url('temp_user/') ?>assets/js/vendor/js.cookie.js"></script>
        <!--Including Javascript-->
        <script src="<?= base_url('temp_user/') ?>assets/js/plugins.js"></script>
        <script src="<?= base_url('temp_user/') ?>assets/js/main.js"></script>
        
        <!--Newsletter Popup Cookies-->
        <script>
            function newsletter_popup(){
                var cookieSignup="cookieSignup", date=new Date();
                if($.cookie(cookieSignup) !='true' && window.location.href.indexOf("challenge#newsletter-modal") <=-1) {
                    setTimeout( function() {
                        $.magnificPopup.open( {
                            items: {
                                src: '#newsletter-modal'
                            }
                            , type:'inline', removalDelay:300, mainClass: 'mfp-zoom-in'
                        }
                        );
                    }
                    , 5000);
                }
                $.magnificPopup.instance.close=function () {
                    if($("#dontshow").prop("checked")==true) {
                        $.cookie(cookieSignup, 'true', {
                            expires: 1, path: '/'
                        }
                    );
                }
                    $.magnificPopup.proto.close.call(this);
                }
            }
            newsletter_popup();
        </script>
        <!--End Newsletter Popup Cookies-->
   
  	</div><!--page-wrapper-->
</body>
</html>
