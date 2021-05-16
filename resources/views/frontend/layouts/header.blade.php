<!-- Header Area -->
    <header class="header_area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-6">
                        <div class="welcome-note">
                            <span class="popover--text" data-toggle="popover" data-content="Welcome to Bigshop ecommerce template."><i class="icofont-info-square"></i></span>
                            <span class="text">Welcome to MOBshop.</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="language-currency-dropdown d-flex align-items-center justify-content-end">
                            <div>
                                <a href="{{ route('login') }}">Login / </a><a href="{{ route('register') }}"> Register </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Menu -->
        <div class="bigshop-main-menu">
            <div class="container">
                <div class="classy-nav-container breakpoint-off">
                    <nav class="classy-navbar" id="bigshopNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt="logo"></a>

                        <!-- Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li><a href="#">Shop</a>
                                    </li>
                                    <li><a href="#">Pages</a>
                                    </li>
                                    <li><a href="#">Blog</a>
                                    </li>
                                    <li><a href="#">About Us</a>
                                    </li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Hero Meta -->
                        <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                            <!-- Search -->
                            <div class="search-area">
                                <div class="search-btn"><i class="icofont-search"></i></div>
                                <!-- Form -->
                                <div class="search-form">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <input type="submit" class="d-none" value="Send">
                                </div>
                            </div>

                            <!-- Wishlist -->
                            <div class="wishlist-area">
                                <a href="wishlist.html" class="wishlist-btn"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Cart -->
                            <div class="cart-area">
                                <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity">2</span></div>

                                <!-- Cart Dropdown Content -->
                                <div class="cart-dropdown-content">
                                    <ul class="cart-list">
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="index-2.html#" class="image">
                                                    <img src="img/product-img/top-1.png" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="index-2.html#">Kid's Fashion</a>
                                                    <p>1 x - <span class="price">$32.99</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                        </li>
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="index-2.html#" class="image">
                                                    <img src="img/product-img/best-4.png" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="index-2.html#">Headphone</a>
                                                    <p>2x - <span class="price">$49.99</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                        </li>
                                    </ul>
                                    <div class="cart-pricing my-4">
                                        <ul>
                                            <li>
                                                <span>Sub Total:</span>
                                                <span>$822.96</span>
                                            </li>
                                            <li>
                                                <span>Shipping:</span>
                                                <span>$30.00</span>
                                            </li>
                                            <li>
                                                <span>Total:</span>
                                                <span>$856.63</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-box">
                                        <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Account -->
                            <div class="account-area">
                                <div class="user-thumbnail">
                                    <img src="img/bg-img/user.jpg" alt="">
                                </div>
                                <ul class="user-meta-dropdown">
                                    <li class="user-title"><span>Hello,</span> Lim Sarah</li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="order-list.html">Orders List</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="login.html"><i class="icofont-logout"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->