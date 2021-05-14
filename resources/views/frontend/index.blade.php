@extends('frontend.layouts.master')
@section('content')

    <!-- Welcome Slides Area -->
    <section class="welcome_area">
        <div class="welSlideTwo owl-carousel">
            <!-- Single Slide -->
            <div class="single_slide home-3 bg-img" style="background-image: url(img/bg-img/9.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text text-center">
                                <p data-animation="fadeInUp" data-delay="100ms">Shoes Collection</p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Fancy Shoes</h2>
                                <a href="index-2.html#" class="btn btn-primary" data-animation="fadeInUp" data-delay="500ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide home-3 bg-img" style="background-image: url(img/bg-img/13.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text text-center">
                                <p data-animation="fadeInUp" data-delay="100ms">Latest Trends</p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Tree pot</h2>
                                <a href="index-2.html#" class="btn btn-primary" data-animation="fadeInUp" data-delay="500ms">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide home-3 bg-img" style="background-image: url(img/bg-img/14.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text text-center">
                                <p data-animation="fadeInUp" data-delay="100ms">Todays Deals <i class="ico-heart"></i></p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Sunglass 20% OFF</h2>
                                <a href="index-2.html#" class="btn btn-primary" data-animation="fadeInUp" data-delay="500ms">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide home-3 bg-img" style="background-image: url(img/bg-img/15.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text text-center">
                                <p data-animation="fadeInUp" data-delay="100ms">Todays Deals</p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Woden Chair</h2>
                                <a href="index-2.html#" class="btn btn-primary" data-animation="fadeInUp" data-delay="500ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Slides Area -->

    <!-- Shop Catagory Area -->
    <div class="shop_by_catagory_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading mb-50">
                        <h5>Shop By Catagory</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="shop_by_catagory_slides owl-carousel">
                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/best-1.png" alt="">
                            </a>
                            <p>Sports Bra</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/best-2.png" alt="">
                            </a>
                            <p>Sunglasses</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/best-3.png" alt="">
                            </a>
                            <p>Watch</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/top-2.png" alt="">
                            </a>
                            <p>Hat</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/onsale-4.png" alt="">
                            </a>
                            <p>Bottle</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/onsale-5.png" alt="">
                            </a>
                            <p>Shoes</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/onsale-1.png" alt="">
                            </a>
                            <p>Speaker</p>
                        </div>

                        <!-- Single Slide -->
                        <div class="single_catagory_slide">
                            <a href="index-2.html#">
                                <img src="img/product-img/onsale-2.png" alt="">
                            </a>
                            <p>Lamp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Catagory Area -->

    <!-- Quick View Modal Area -->
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        <img class="first_img" src="img/product-img/new-1-back.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-1.png" alt="">
                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview_pro_des">
                                        <h4 class="title">Boutique Silk Dress</h4>
                                        <div class="top_seller_product_rating mb-15">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="price">$120.99 <span>$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                        <a href="index-2.html#">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                        </div>
                                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html"><i class="icofont-exchange"></i></a>
                                        </div>
                                    </form>
                                    <!-- Share -->
                                    <div class="share_wf mt-30">
                                        <p>Share with friends</p>
                                        <div class="_icon">
                                            <a href="index-2.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="index-2.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="index-2.html#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="index-2.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            <a href="index-2.html#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            <a href="index-2.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Area -->

    <!-- On Sale Products -->
    <section class="on-sale-products-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading mb-50">
                        <h5>On Sale Products</h5>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/21.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Boutique Silk Dress</a>
                            <h6 class="product-price">$69.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/20.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Flower Textured Dress</a>
                            <h6 class="product-price">$39.99 <span>$49.99</span></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/23.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Ballerina Dress</a>
                            <h6 class="product-price">$89.99 <span>$107.99</span></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/12.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Gracia Plaid Dress</a>
                            <h6 class="product-price">$139.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/13.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Boutique Silk Dress</a>
                            <h6 class="product-price">$69.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/14.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Flower Textured Dress</a>
                            <h6 class="product-price">$39.99 <span>$49.99</span></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/15.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Ballerina Dress</a>
                            <h6 class="product-price">$89.99 <span>$107.99</span></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="img/product-img/16.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Sale</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="index-2.html#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="index-2.html#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a href="index-2.html#">Gracia Plaid Dress</a>
                            <h6 class="product-price">$139.99</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- On Sale Products -->

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-ship"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Free Shipping</h6>
                            <p>For orders above $100</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-box"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Happy Returns</h6>
                            <p>7 Days free Returns</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-money"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>100% Money Back</h6>
                            <p>If product is damaged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-live-support"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Dedicated Support</h6>
                            <p>We provide support 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Featured Area -->

@endsection
