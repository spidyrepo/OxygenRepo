 @extends('app_template')
 @section('title','Vendor Eight')
 @section('content')
 <!-- Start of Main -->
 <main class="main">
     <div class="container pb-2">
         <div class="intro-wrapper mt-4">
             <div class="swiper-container swiper-theme pg-inner animation-slider row cols-1 gutter-no" data-swiper-options="{
                        'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                    }">
                 <div class="swiper-wrapper">
                     <?php if (isset($mainslider)) {
                            foreach ($mainslider as $val) { ?>
                             <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                                 style="background-image: url(<?= asset('assets/images/banners/mainslider/' . $val->image) ?>); background-color: #E8EAEF;">
                                 <div class="banner-content y-50 text-right">
                                     <div class="slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">
                                         <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2"><?= $val->title ?></h5>
                                         <h3 class="banner-title text-capitalize ls-25">
                                             <span class="text-primary"><?= $val->sub_title ?></span><br>
                                             Fashion Lifestyle<br>Collection
                                         </h3>
                                         <a href="demo8-shop.html"
                                             class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                             Shop Now<i class="w-icon-long-arrow-right"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                     <?php }
                        } ?>

                 </div>
                 <div class="swiper-pagination"></div>
             </div>
             <!-- End of Swiper Container -->
         </div>
         <!-- End of Intro Wrapper -->

         <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10"
             data-swiper-options="{
                    'loop': true,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
             <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                 <div class="swiper-slide icon-box icon-box-side text-dark">
                     <span class="icon-box-icon icon-shipping">
                         <i class="w-icon-truck"></i>
                     </span>
                     <div class="icon-box-content">
                         <h4 class="icon-box-title">Free Shipping & Returns</h4>
                         <p class="text-default">For all orders over $99</p>
                     </div>
                 </div>
                 <div class="swiper-slide icon-box icon-box-side text-dark">
                     <span class="icon-box-icon icon-payment">
                         <i class="w-icon-bag"></i>
                     </span>
                     <div class="icon-box-content">
                         <h4 class="icon-box-title">Secure Payment</h4>
                         <p class="text-default">We ensure secure payment</p>
                     </div>
                 </div>
                 <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                     <span class="icon-box-icon icon-money">
                         <i class="w-icon-money"></i>
                     </span>
                     <div class="icon-box-content">
                         <h4 class="icon-box-title">Money Back Guarantee</h4>
                         <p class="text-default">Any back within 30 days</p>
                     </div>
                 </div>
                 <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                     <span class="icon-box-icon icon-chat">
                         <i class="w-icon-chat"></i>
                     </span>
                     <div class="icon-box-content">
                         <h4 class="icon-box-title">Customer Support</h4>
                         <p class="text-default">Call or email us 24/7</p>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End of Icon Box Wrapper -->

         <div class="swiper-container swiper-theme category-banner-3cols pt-2 pb-10"
             data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        }
                    }
                }">
             <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                 <div class="swiper-slide banner banner-fixed category-banner br-sm">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/category/1-1.jpg" alt="Category Banner" width="447"
                             height="230" style="background-color: #cfd1cf;" />
                     </figure>
                     <div class="banner-content y-50">
                         <h3 class="banner-title text-capitalize ls-25 mb-0">For Men's</h3>
                         <div class="banner-price-info text-uppercase text-default ls-25 font-weight-bold">Starting
                             at <span class="text-secondary">$29.00</span></div>
                         <hr class="banner-divider bg-dark">
                         <a href="demo8-shop.html"
                             class="btn btn-dark btn-link btn-outline btn-icon-right btn-slide-right">
                             Shop Now<i class="w-icon-long-arrow-right"></i>
                         </a>
                     </div>
                 </div>
                 <!-- End of Category Banner -->
                 <div class="swiper-slide banner banner-fixed category-banner br-sm">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/category/1-2.jpg" alt="Category Banner" width="447"
                             height="230" style="background-color: #333" />
                     </figure>
                     <div class="banner-content text-center x-50 y-50 w-100 pl-2 pr-2">
                         <h5 class="banner-subtitle text-primary text-capitalize ls-25 font-weight-bold">Get 30% Off
                             Your Entire Order!</h5>
                         <h3 class="banner-title text-white text-uppercase ls-25">Black Friday Sale</h3>
                         <p>Use code <strong class="text-uppercase text-white">Blkfri40</strong> at checkout.</p>
                         <a href="demo8-shop.html"
                             class="btn btn-primary btn-outline btn-rounded btn-icon-right text-white btn-slide-right">
                             Shop Now<i class="w-icon-long-arrow-right"></i>
                         </a>
                     </div>
                 </div>
                 <!-- End of Category Banner -->
                 <div class="swiper-slide banner banner-fixed category-banner br-sm">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/category/1-3.jpg" alt="Category Banner" width="447"
                             height="230" style="background-color: #e0dddd;" />
                     </figure>
                     <div class="banner-content y-50">
                         <h3 class="banner-title text-capitalize ls-25 mb-0">For Women's</h3>
                         <div class="banner-price-info text-uppercase text-default ls-25 font-weight-bold">From Only
                             <span class="text-secondary">$29.00</span>
                         </div>
                         <hr class="banner-divider bg-dark">
                         <a href="demo8-shop.html"
                             class="btn btn-dark btn-link btn-outline btn-icon-right btn-slide-right">
                             Shop Now<i class="w-icon-long-arrow-right"></i>
                         </a>
                     </div>
                 </div>
                 <!-- End of Category Banner -->
             </div>
             <div class="swiper-pagination"></div>
         </div>
         <!-- End of Swiper Container -->

         <h2 class="title title-center mb-5">Top Categories Of The Month</h2>
         <div class="swiper-container swiper-theme shadow-swiper pb-10"
             data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
             <div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">

                 <?php if (isset($topCategories)) {
                        foreach ($topCategories as $val) { ?>
                         <div class="swiper-slide category-wrap">
                             <div class="category category-classic category-absolute overlay-zoom br-sm">
                                 <a href="demo8-shop.html">
                                     <figure class="category-media">
                                         <img src="<?= asset('assets/images/categoryMain/' . $val->category_main_image) ?>" alt="Category" width="213"
                                             height="213" />
                                     </figure>
                                 </a>
                                 <div class="category-content">
                                     <h4 class="category-name ls-normal"><?= $val->category_main_name ?></h4>
                                     <a href="<?= $val->id ?>" class="btn btn-primary btn-link btn-underline">Shop Now</a>
                                 </div>
                             </div>
                         </div>
                 <?php }
                    } ?>
             </div>
             <div class="swiper-pagination"></div>
         </div>
         <!-- End of Swiper -->

         <div class="notification-wrapper bg-dark br-sm mb-10 appear-animate justify-content-center fadeIn appear-animation-visible"
             style="animation-duration: 1.2s;">
             <i class="w-icon-mobile"></i>
             <p>Download our new app today! Don't Miss our mobile-only offers and shop with Android Play.</p>
             <a href="#"
                 class="btn btn-white btn-outline btn-rounded btn-sm btn-icon-right font-weight-normal text-capitalize">
                 Download<i class="w-icon-long-arrow-down"></i></a>
         </div>
     </div>
     <!-- End of Container -->

     <section class="grey-section appear-animate">
         <div class="container mb-2">
             <div class="title-link-wrapper mb-2">
                 <h2 class="title">Featured Products</h2>
                 <a href="#">More Products<i class="w-icon-long-arrow-right"></i></a>
             </div>
             <div class="row grid grid-type">
                 <div class="grid-item grid-item-single">
                     <div class="product product-single">
                         <div class="row align-items-center">
                             <div class="col-md-6">
                                 <div class="product-gallery mb-0">
                                     <figure class="product-image">
                                         <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-1.jpg"
                                             data-zoom-image="<?= asset('frontend') ?>/images/demos/demo8/product/2-1-800x900.jpg"
                                             alt="Product Image" width="800" height="900">
                                     </figure>
                                 </div>
                             </div>
                             <div class="col-md-6 mt-4 mt-md-0">
                                 <div class="product-details scrollable pl-0">
                                     <h2 class="product-title mb-1"><a href="product-default.html">Men's Season
                                             Blue Clothes</a></h2>

                                     <hr class="product-divider">

                                     <div class="product-price">
                                         <del class="old-price">$284.35</del><ins
                                             class="new-price ls-50">$235.35</ins>
                                     </div>

                                     <div class="ratings-container">
                                         <div class="ratings-full">
                                             <span class="ratings" style="width: 80%;"></span>
                                             <span class="tooltiptext tooltip-top"></span>
                                         </div>
                                         <a href="#" class="rating-reviews">(3 Reviews)</a>
                                     </div>

                                     <div class="product-form product-variation-form product-size-swatch mb-3">
                                         <label class="mb-1">Size:</label>
                                         <div class="flex-wrap d-flex align-items-center product-variations">
                                             <a href="#" class="size">Small</a>
                                             <a href="#" class="size">Medium</a>
                                             <a href="#" class="size">Large</a>
                                             <a href="#" class="size">Extra Large</a>
                                         </div>
                                         <a href="#" class="product-variation-clean">Clean All</a>
                                     </div>

                                     <div class="product-variation-price">
                                         <span></span>
                                     </div>

                                     <div class="product-form pt-4">
                                         <div class="product-qty-form mr-2">
                                             <div class="input-group">
                                                 <input class="quantity form-control pl-4" type="number" min="1"
                                                     max="10000000">
                                                 <button class="quantity-minus w-icon-minus"></button>
                                                 <button class="quantity-plus w-icon-plus"></button>
                                             </div>
                                         </div>
                                         <button class="btn btn-primary btn-cart">
                                             <i class="w-icon-cart"></i>
                                             <span>Add to Cart</span>
                                         </button>
                                     </div>

                                     <div class="social-links-wrapper mt-1">
                                         <div class="social-links">
                                             <div class="social-icons social-no-color border-thin">
                                                 <a href="#"
                                                     class="social-icon social-facebook w-icon-facebook"></a>
                                                 <a href="#"
                                                     class="social-icon social-twitter w-icon-twitter"></a>
                                                 <a href="#"
                                                     class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                 <a href="#"
                                                     class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                             </div>
                                         </div>
                                         <span class="divider d-xs-show"></span>
                                         <div class="product-link-wrapper d-flex">
                                             <a href="#"
                                                 class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                             <a href="#"
                                                 class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-2.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Top Rating Helmet</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 80%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$34.99</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-3.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Smartphone Electronic Charger</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 80%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$35.00</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-4.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Skate Pan</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 80%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$50.99</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-5.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Blue Ski Boots</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 100%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$88.00</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-6.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Dumbells</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 100%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$59.00</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-7.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Professional Perfect Camera</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 100%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$123.00</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-8.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Soft Sound Marker</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 100%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$39.99</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
                 <div class="grid-item grid-item-widget">
                     <div class="product product-widget">
                         <figure class="product-media">
                             <a href="product-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-9.jpg" alt="Product" width="300"
                                     height="338">
                             </a>
                         </figure>
                         <div class="product-details">
                             <h4 class="product-name">
                                 <a href="product-default.html">Roller Skates</a>
                             </h4>
                             <div class="ratings-container">
                                 <div class="ratings-full">
                                     <span class="ratings" style="width: 100%;"></span>
                                     <span class="tooltiptext tooltip-top"></span>
                                 </div>
                             </div>
                             <div class="product-price">
                                 <ins class="new-price">$66.99</ins>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End of Grid Item -->
             </div>
         </div>
         <!-- End of Container -->
     </section>
     <!-- End of Grey Section -->

     <div class="container mt-10 pt-2">
         <div class="row cols-md-2 category-banner-2cols mb-5">
             <div class="banner banner-fixed mb-4">
                 <figure class="br-sm">
                     <img src="<?= asset('frontend') ?>/images/demos/demo8/category/2-1.jpg" alt="Category Banner" width="680"
                         height="220" style="background-color: #384744;" />
                 </figure>
                 <div class="banner-content y-50">
                     <h5 class="banner-subtitle text-uppercase text-white font-weight-bold">Natural Process</h5>
                     <h3 class="banner-title text-capitalize text-white">Cosmetic Makeup<br>Professional</h3>
                     <a href="demo8-shop.html" class="btn btn-white btn-link btn-slide-right btn-icon-right">
                         Shop Now<i class="w-icon-long-arrow-right"></i></a>
                 </div>
             </div>
             <!-- End of Banner -->
             <div class="banner banner-fixed mb-4">
                 <figure class="br-sm">
                     <img src="<?= asset('frontend') ?>/images/demos/demo8/category/2-2.jpg" alt="Category Banner" width="680"
                         height="220" style="background-color: #e7e7e7;" />
                 </figure>
                 <div class="banner-content y-50">
                     <h5 class="banner-subtitle text-uppercase font-weight-bold">Trending Now</h5>
                     <h3 class="banner-title text-capitalize">Women’s Lifestyle<br>Collection</h3>
                     <a href="demo8-shop.html" class="btn btn-dark btn-link btn-slide-right btn-icon-right">
                         Shop Now<i class="w-icon-long-arrow-right"></i></a>
                 </div>
             </div>
             <!-- End of Banner -->
         </div>
         <!-- End of Category Banner 2Cols -->

         <div class="title-link-wrapper mb-3">
             <h2 class="title mb-0 pt-2 pb-2">Apparels &amp; Clothings</h2>
             <a href="shop-boxed-banner.html" class="mb-0">More Products<i
                     class="w-icon-long-arrow-right"></i></a>
         </div>
         <div class="row grid banner-product-wrapper mb-6">
             <div class="grid-item col-xl-5col3 col-lg-3 col-sm-8 col-12">
                 <div class="banner banner-fixed br-sm">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/banner/1.jpg" alt="Banner" width="820" height="364"
                             style="background-color: #EBEBEB;" />
                     </figure>
                     <div class="banner-content y-50">
                         <h5 class="banner-subtitle text-capitalize font-weight-normal">Special Offers</h5>
                         <h3 class="banner-title text-uppercase">Fashion Sale</h3>
                         <div class="banner-price-info text-dark lh-1 ls-25">Up to <strong
                                 class="text-secondary text-uppercase">40% Off</strong></div>
                         <hr class="banner-divider bg-dark">
                         <a href="demo8-shop.html" class="btn btn-dark btn-link btn-slide-right btn-icon-right">
                             Start Shopping<i class="w-icon-long-arrow-right mb-1"></i>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-1.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Comfortable Blanket</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$30.00 - $36.00</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 1</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-2.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Men's T-Shirt</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$25.00 - $26.00</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 4</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-3.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">White Schoolbag</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$56.48</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 3</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-4.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Chain Handle Umbrella</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$28.98</ins><del class="old-price">$32.62</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 3</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-5.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Men's Suede Belt</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$73.71</ins><del class="old-price">$78.04</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 2</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-6.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Men's Travel Bag</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$23.99</ins><del class="old-price">$25.68</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 3</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-7.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Grey Calotte</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$173.84</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 5</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End of Banner Product Wrapper -->

         <div class="title-link-wrapper mb-3">
             <h2 class="title mb-0 pt-2 pb-2">Food &amp; Kitchen</h2>
             <a href="shop-boxed-banner.html" class="mb-0">More Products<i
                     class="w-icon-long-arrow-right"></i></a>
         </div>
         <div class="row grid banner-product-wrapper">
             <div class="grid-item col-xl-5col3 col-lg-3 col-sm-8 col-12">
                 <div class="banner banner-fixed br-sm">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/banner/2.jpg" alt="Banner" width="820" height="364"
                             style="background-color: #E4E5E7;" />
                     </figure>
                     <div class="banner-content y-50">
                         <h5 class="banner-subtitle text-capitalize font-weight-normal">Get up to <strong
                                 class="text-secondary">25% Off</strong></h5>
                         <h3 class="banner-title text-uppercase">Electronic Kettle</h3>
                         <div class="banner-price-info text-dark lh-1 ls-25">Collection</div>
                         <hr class="banner-divider bg-dark">
                         <a href="demo8-shop.html" class="btn btn-dark btn-link btn-slide-right btn-icon-right">
                             Start Shopping<i class="w-icon-long-arrow-right mb-1"></i>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-1.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">High Preesure Pot</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$30.00 - $45.00</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 5</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-2.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Baharu Nescafe</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$99.680</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 4</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-3.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Excellent Liverte</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$250.68</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 3</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-4.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Roaster</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$215.00</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 3</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-5.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Packed Actinidias</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$73.71</ins><del class="old-price">$150.60</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 2</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-6.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Tea Computer</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$137.35</ins><del class="old-price">$155.65</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 3</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                 <div class="product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-7.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Organic Wine</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$220.25</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 5</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End of Banner Product Wrapper -->

         <div class="banner banner-shoes br-sm mb-9" style="background-image: url(<?= asset('frontend') ?>/images/demos/demo8/banner/3.jpg);
                    background-color: #36332C;">
             <div class="banner-content d-block d-lg-flex align-items-center">
                 <div class="content-left mr-auto mb-6 mb-lg-0 align-items-center">
                     <div class="banner-price-info text-secondary text-uppercase font-weight-bolder ls-25">
                         40<sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-10">Off</sub>
                     </div>
                     <hr class="banner-divider">
                     <h3 class="banner-title font-weight-normal text-white mb-0 ls-25">
                         Summer Season's Sale<br><strong>For Men's Sneakers</strong>
                     </h3>
                 </div>
                 <a href="demo8-shop.html"
                     class="content-right btn btn-white btn-outline btn-rounded btn-icon-right">
                     Discover Now<i class="w-icon-long-arrow-right"></i>
                 </a>
             </div>
             <figure class="image-shoes skrollable">
                 <img src="<?= asset('frontend') ?>/images/demos/demo8/banner/shoes.png" alt="Shoes"
                     data-bottom-top="transform: translateY(2vh);"
                     data-top-bottom="transform: translateY(-2vh);">
             </figure>
         </div>
         <!-- End of Banner Shoes -->

         <div class="title-link-wrapper mb-3">
             <h2 class="title mb-0 pt-2 pb-2">Top Rated Products</h2>
             <a href="shop-boxed-banner.html" class="mb-0">More Products<i
                     class="w-icon-long-arrow-right"></i></a>
         </div>
         <div class="swiper-container swiper-theme product-wrapper"
             data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
             <div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                 <div class="swiper-slide product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-1.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                         <div class="product-countdown-container">
                             <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                 data-format="DHMS" data-compact="false" data-labels-short="Days, Hours, Mins, Secs">
                                 00:00:00:00</div>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Charge &amp; Alarm Machine</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$26.88</ins><del class="old-price">$27.89</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 5</a>
                         </div>
                     </div>
                 </div>
                 <!-- End of Product Simple -->
                 <div class="swiper-slide product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-2.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Women's Comforter</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 2</a>
                         </div>
                     </div>
                 </div>
                 <!-- End of Product Simple -->
                 <div class="swiper-slide product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-3.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$164.47</ins><del class="old-price">$183.47</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 1</a>
                         </div>
                     </div>
                 </div>
                 <!-- End of Product Simple -->
                 <div class="swiper-slide product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-4.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Mini Wireless Earphone</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$3.66</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 2</a>
                         </div>
                     </div>
                 </div>
                 <!-- End of Product Simple -->
                 <div class="swiper-slide product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-5.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">Headkerchief</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$28.99</ins>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 4</a>
                         </div>
                     </div>
                 </div>
                 <!-- End of Product Simple -->
                 <div class="swiper-slide product product-simple text-center">
                     <figure class="product-media">
                         <a href="product-default.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-6.jpg" alt="Product" width="260"
                                 height="291" />
                         </a>
                         <div class="product-action-vertical">
                             <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                 title="Add to wishlist"></a>
                             <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                 title="Add to Compare"></a>
                         </div>
                         <div class="product-action">
                             <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                 View</a>
                         </div>
                     </figure>
                     <div class="product-details">
                         <h4 class="product-name"><a href="product-default.html">White Schoolbag</a></h4>
                         <div class="product-pa-wrapper">
                             <div class="product-price">
                                 <ins class="new-price">$50.65</ins><del class="old-price">$78.23</del>
                             </div>
                             <div class="product-action">
                                 <a href="#"
                                     class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                     To Cart</a>
                             </div>
                         </div>
                         <div class="sold-by">
                             Sold By: <a href="#">Vendor 2</a>
                         </div>
                     </div>
                 </div>
                 <!-- End of Product Simple -->
             </div>
             <div class="swiper-pagination"></div>
         </div>
         <!-- End of Swiper Container -->

         <div class="title-link-wrapper mb-3">
             <h2 class="title mb-0 pt-2 pb-2">From Our Blog</h2>
             <a href="blog-listing.html" class="mb-0">View All Articles<i
                     class="w-icon-long-arrow-right"></i></a>
         </div>
         <div class="swiper-container swiper-theme post-wrapper mb-10 mb-lg-5 appear-animate"
             data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
             <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                 <div class="swiper-slide post text-center">
                     <figure class="post-media br-sm">
                         <a href="post-single.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/blog/1.jpg" alt="Post" width="620" height="398"
                                 style="background-color: #898078;">
                         </a>
                         <div class="post-calendar">
                             <span class="post-day">05</span>
                             <span class="post-month">Mar</span>
                         </div>
                     </figure>
                     <div class="post-details">
                         <h4 class="post-title"><a href="post-single.html">We want to be different and
                                 fashion gives to me that outlet to do</a></h4>
                         <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                 class="w-icon-long-arrow-right"></i></a>
                     </div>
                 </div>
                 <div class="swiper-slide post text-center">
                     <figure class="post-media br-sm">
                         <a href="post-single.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/blog/2.jpg" alt="Post" width="620" height="398"
                                 style="background-color: #EDEFEE;">
                         </a>
                         <div class="post-calendar">
                             <span class="post-day">14</span>
                             <span class="post-month">Mar</span>
                         </div>
                     </figure>
                     <div class="post-details">
                         <h4 class="post-title"><a href="post-single.html">Fashion tells about who you are
                                 from external point of view for desgin</a></h4>
                         <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                 class="w-icon-long-arrow-right"></i></a>
                     </div>
                 </div>
                 <div class="swiper-slide post text-center">
                     <figure class="post-media br-sm">
                         <a href="post-single.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/blog/3.jpg" alt="Post" width="620" height="398"
                                 style="background-color: #A1A09E;">
                         </a>
                         <div class="post-calendar">
                             <span class="post-day">25</span>
                             <span class="post-month">Mar</span>
                         </div>
                     </figure>
                     <div class="post-details">
                         <h4 class="post-title"><a href="post-single.html">Recognizing the needs
                                 is the primary condition for desgin</a></h4>
                         <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                 class="w-icon-long-arrow-right"></i></a>
                     </div>
                 </div>
                 <div class="swiper-slide post text-center">
                     <figure class="post-media br-sm">
                         <a href="post-single.html">
                             <img src="<?= asset('frontend') ?>/images/demos/demo8/blog/4.jpg" alt="Post" width="620" height="398"
                                 style="background-color: #EDF1F2;">
                         </a>
                         <div class="post-calendar">
                             <span class="post-day">16</span>
                             <span class="post-month">Mar</span>
                         </div>
                     </figure>
                     <div class="post-details">
                         <h4 class="post-title"><a href="post-single.html">Just found the denim sportswear
                                 and Ski appliance for new collection</a></h4>
                         <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                 class="w-icon-long-arrow-right"></i></a>
                     </div>
                 </div>
             </div>
             <div class="swiper-pagination"></div>
         </div>
         <!-- Post Wrapper -->

         <h2 class="title text-left mb-5 appear-animate">Our Clients</h2>
         <div class="swiper-container swiper-theme  brands-wrapper br-sm mb-9 appear-animate"
             data-swiper-options="{
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'loop': true,
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 8
                        }
                    }
                }">
             <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/1.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/2.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/3.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/4.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/5.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/6.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/7.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
                 <div class="swiper-slide">
                     <figure>
                         <img src="<?= asset('frontend') ?>/images/demos/demo8/brand/8.png" alt="Brand" width="310" height="180" />
                     </figure>
                 </div>
             </div>
         </div>
         <!-- End of Brands Wrapper -->

         <div class="title-link-wrapper mb-4 appear-animate">
             <h2 class="title mb-0 ls-normal appear-animate pb-1">Recently Viewed</h2>
             <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">
                 More Products<i class="w-icon-long-arrow-right"></i></a>
         </div>
         <div class="swiper-container swiper-theme shadow-swiper appear-animate mb-10 pb-2"
             data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 5
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 8,
                                'dots': false
                            }
                        }
                    }">
             <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-1.jpg" alt="Category image"
                                     width="213" height="238" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Charge &amp; Alarm Machine</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-5.jpg" alt="Category image"
                                     width="213" height="238" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Headkerchief</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-3.jpg" alt="Category image"
                                     width="213" height="238" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Gold Watch</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/3-6.jpg" alt="Category image"
                                     width="260" height="291" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Men's Travel Bag</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/2-2.jpg" alt="Category image"
                                     width="138" height="155" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Top Rating Helmet</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-7.jpg" alt="Category image"
                                     width="260" height="291" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Organic Wine</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/5-4.jpg" alt="Category image"
                                     width="213" height="238" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Mini Wireless Earphone</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
                 <div class="swiper-slide product-wrap mb-0">
                     <div class="product text-center product-absolute">
                         <figure class="product-media">
                             <a href="product-defaproduct-default.html">
                                 <img src="<?= asset('frontend') ?>/images/demos/demo8/product/4-3.jpg" alt="Category image"
                                     width="260" height="291" style="background-color: #fff" />
                             </a>
                         </figure>
                         <h4 class="product-name">
                             <a href="product-default.html">Excellent Liverte</a>
                         </h4>
                     </div>
                 </div>
                 <!-- End of Product Wrap -->
             </div>
             <div class="swiper-pagination"></div>
         </div>
         <!-- End of Reviewed Producs -->
     </div>
     <!-- End of Container -->
 </main>
 <!-- End of Main -->
 @endsection