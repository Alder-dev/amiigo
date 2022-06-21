<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Home</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800',] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

     <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart.ttf?png09e" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo8.min.css">
</head>
<body class="home">
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Wolmart Store</p>
                    </div>
                    <div class="header-right">
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                    height="8" class="dropdown-image" /> EN</a>
                            <div class="dropdown-box">
                                <a href="<?php echo base_url(); ?>">
                                    <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    EN
                                </a>
                                <a href="<?php echo base_url().'es'; ?>">
                                    <img src="assets/images/flags/es.png" alt="ES Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    ES
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="blog.html" class="d-lg-show">Blog</a>
                        <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                        <a href="my-account.html" class="d-lg-show">My Account</a>
                        <a href="<?php echo base_url().'login_en' ;?>" class="d-lg-show"><i
                                class="w-icon-account"></i>Sign In</a>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle text-white w-icon-hamburger">
                        </a>
                        <a href="<?php echo base_url(); ?>" class="logo ml-lg-0">
                            <img src="assets/images/demos/demo8/header-logo.png" alt="lo\go" width="144" height="45" />
                        </a>
                        <form method="get" action="#" class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                            <div class="select-box bg-white">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Furniture</option>
                                    <option value="6">Shoes</option>
                                    <option value="7">Sports</option>
                                    <option value="8">Games</option>
                                    <option value="9">Computers</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Kitchen</option>
                                    <option value="12">Clothing</option>
                                </select>
                            </div>
                            <input type="text" class="form-control bg-white" name="search" id="search"
                                placeholder="Search in..." required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call text-white"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-white mb-0">
                                    <a href="mailto:#" class="text-capitalize text-white">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder text-white ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="compare.html">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link text-white">
                                <i class="w-icon-cart">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Beige knitted
                                                elas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
    </body>
            <!-- End of Header Middle -->