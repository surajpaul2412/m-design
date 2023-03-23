<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>All Products | MbizSpare</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php include("include/style.php"); ?>
</head>

<body> 

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <?php include("include/header.php"); ?>

        <!-- [ Body Container ] start -->
        <div id="page-content">

            <!-- [ breadcrumb & Filter Wrap Style ] start -->
            <section class="breadcrumb-shop py-2 br-bottom br-top">
                <div class="collection-header">
                    <div class="collection-hero">
                        <div class="collection-hero__image"></div>
                        <div class="collection-hero__title-wrapper container">
                            <h2 class="collection-hero__title">Products</h2>
                            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="index.php" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Products</span></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- [ Shop Section ] end -->
            <section class="main-shop">
                <div class="container">
                    <div class="row">
                        <!--Sidebar-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar filterbar">
                            <div class="closeFilter d-block d-lg-none"><i class="icon icon an an-times-r"></i></div>
                            <div class="sidebar_tags">
                                <!--Categories-->
                                <div class="sidebar_widget categories filterBox filter-widget">
                                    <div class="widget-title">
                                        <h2 class="mb-0">Categories</h2>
                                    </div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix sidebar_categories mb-0">
                                            <li class="lvl-1 sub-level"><a href="#;" class="site-nav">Air Conditioning</a>
                                                <ul class="sublinks">
                                                    <li class="level2 sub-level sub-sub-level"><a href="#;" class="site-nav">Tata Air Conditioning</a>
                                                        <ul class="sublinks mb-0">
                                                            <li class="level3"><a href="#" class="site-nav">Tata Indica</a></li>
                                                            <li class="level3"><a href="#" class="site-nav">Tata Nexon</a></li>
                                                            <li class="level3"><a href="#" class="site-nav">Tata Altroz</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2"><a href="#" class="site-nav">Hundai</a></li>
                                                    <li class="level2"><a href="#" class="site-nav">Mahindra</a></li>
                                                    <li class="level2"><a href="#" class="site-nav">View All Air Conditioning</a></li>
                                                </ul>
                                            </li>
                                            <li class="lvl-1 sub-level"><a href="#;" class="site-nav">Clutch System</a>
                                                <ul class="sublinks">
                                                    <li class="level2"><a href="#" class="site-nav">Friction Clutch</a></li>
                                                    <li class="level2"><a href="#" class="site-nav">Dry and wet clutch</a></li>
                                                    <li class="level2"><a href="#" class="site-nav">Electromagnetic & Electrohydraulic clutch</a></li>
                                                    <li class="level2"><a href="#" class="site-nav">View All Clutch</a></li>
                                                </ul>
                                            </li>
                                            <li class="lvl-1"><a href="#" class="site-nav">Filters</a></li>
                                            <li class="lvl-1"><a href="#" class="site-nav">Bearings</a></li>
                                            <li class="lvl-1"><a href="#" class="site-nav">Belt Chains</a></li>
                                            <li class="lvl-1"><a href="#" class="site-nav">Car Accesories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Categories-->
                                <!--Price Filter-->
                                <div class="sidebar_widget filterBox filter-widget">
                                    <div class="widget-title">
                                        <h2 class="mb-0">Price</h2>
                                    </div>
                                    <form action="#" method="post" class="price-filter filterDD">
                                        <div id="slider-range" class="mt-2"></div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="no-margin"><input id="amount" type="text"></p>
                                            </div>
                                            <div class="col-6 text-right margin-25px-top">
                                                <button class="btn btn--small rounded">filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End Price Filter-->
                                <!--Color Swatches-->
                                <div class="sidebar_widget filterBox filter-widget">
                                    <div class="widget-title">
                                        <h2 class="mb-0">Color</h2>
                                    </div>
                                    <div class="filter-color swacth-list filterDD clearfix">
                                        <ul class="clearfix">
                                            <li><span class="swacth-btn medium radius black"></span><span class="tooltip-label">Black</span></li>
                                            <li><span class="swacth-btn medium radius white"></span><span class="tooltip-label">White</span></li>
                                            <li><span class="swacth-btn medium radius red"></span><span class="tooltip-label">Red</span></li>
                                            <li><span class="swacth-btn medium radius blue"></span><span class="tooltip-label">Blue</span></li>
                                            <li><span class="swacth-btn medium radius pink"></span><span class="tooltip-label">Pink</span></li>
                                            <li><span class="swacth-btn medium radius gray"></span><span class="tooltip-label">Gray</span></li>
                                            <li><span class="swacth-btn medium radius green"></span><span class="tooltip-label">Green</span></li>
                                            <li><span class="swacth-btn medium radius orange"></span><span class="tooltip-label">Orange</span></li>
                                            <li><span class="swacth-btn medium radius yellow"></span><span class="tooltip-label">Yellow</span></li>
                                            <li><span class="swacth-btn medium radius blueviolet"></span><span class="tooltip-label">Blue Violet</span></li>
                                            <li><span class="swacth-btn medium radius brown"></span><span class="tooltip-label">Brown</span></li>
                                            <li><span class="swacth-btn medium radius darkGoldenRod"></span><span class="tooltip-label">Dark Golden Red</span></li>
                                            <li><span class="swacth-btn medium radius darkGreen"></span><span class="tooltip-label">Dark Green</span></li>
                                            <li><span class="swacth-btn medium radius darkRed"></span><span class="tooltip-label">Dark Red</span></li>
                                            <li><span class="swacth-btn medium radius khaki"></span><span class="tooltip-label">Khaki</span></li>
                                            <li><span class="swacth-btn medium radius blue-red"></span><span class="tooltip-label">Blue/Red</span></li>
                                            <li><span class="swacth-btn medium radius black-grey"></span><span class="tooltip-label">Black/Grey</span></li>
                                            <li><span class="swacth-btn medium radius pink-black"></span><span class="tooltip-label">pink-Black</span></li>
                                            <li><span class="swacth-btn medium radius yellow-black"></span><span class="tooltip-label">Yellow</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--End Color Swatches-->
                                <!--Size Swatches-->
                                <div class="sidebar_widget filterBox filter-widget size-swacthes">
                                    <div class="widget-title">
                                        <h2 class="mb-0">Size</h2>
                                    </div>
                                    <div class="filterDD">
                                        <ul class="clearfix">
                                            <li><input type="checkbox" value="s" id="s"><label for="s"><span></span>S</label></li>
                                            <li><input type="checkbox" value="m" id="m"><label for="m"><span></span>M</label></li>
                                            <li><input type="checkbox" value="l" id="l"><label for="l"><span></span>L</label></li>
                                            <li><input type="checkbox" value="x" id="x"><label for="x"><span></span>X</label></li>
                                            <li><input type="checkbox" value="xl" id="xl"><label for="xl"><span></span>XL</label></li>
                                            <li><input type="checkbox" value="xll" id="xll"><label for="xll"><span></span>XLL</label></li>
                                            <li><input type="checkbox" value="xxl" id="xxl"><label for="xxl"><span></span>XXL</label></li>
                                            <li><input type="checkbox" value="xs" id="xs"><label for="xs"><span></span>XS</label></li>
                                            <li><input type="checkbox" value="15" id="15"><label for="15"><span></span>15</label></li>
                                            <li><input type="checkbox" value="25" id="25"><label for="25"><span></span>25</label></li>
                                            <li><input type="checkbox" value="35" id="35"><label for="35"><span></span>35</label></li>
                                            <li><input type="checkbox" value="45" id="45"><label for="45"><span></span>45</label></li>
                                            <li><input type="checkbox" value="55" id="55"><label for="55"><span></span>55</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--End Size Swatches-->

                                <!--Product type-->
                                <div class="sidebar_widget filterBox filter-widget size-swacthes product-type">
                                    <div class="widget-title">
                                        <h2 class="mb-0">Product type</h2>
                                    </div>
                                    <div class="filterDD">
                                        <ul class="clearfix">
                                            <li><input type="checkbox" value="accessories" id="accessories"><label for="accessories"><span></span>Hatchback </label></li>
                                            <li><input type="checkbox" value="bags" id="bags"><label for="bags"><span></span>SUV</label></li>
                                            <li><input type="checkbox" value="jeans" id="jeans"><label for="jeans"><span></span>MUV</label></li>
                                            <li><input type="checkbox" value="shoes" id="shoes"><label for="shoes"><span></span>Pickup</label></li>
                                            <li><input type="checkbox" value="t-shirts" id="t-shirts"><label for="t-shirts"><span></span>Truck</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--End Product type-->

                                <!--Brand-->
                                <div class="sidebar_widget filterBox filter-widget size-swacthes brand-filter">
                                    <div class="widget-title">
                                        <h2 class="mb-0">Brands</h2>
                                    </div>
                                    <div class="filterDD">
                                        <ul class="clearfix">
                                            <li><input type="checkbox" value="adidas" id="adidas"><label for="adidas"><span></span>Ford</label></li>
                                            <li><input type="checkbox" value="baggit" id="baggit"><label for="baggit"><span></span>Honda</label></li>
                                            <li><input type="checkbox" value="campus" id="campus"><label for="campus"><span></span>Tata</label></li>
                                            <li><input type="checkbox" value="caprese" id="caprese"><label for="caprese"><span></span>Mahindra</label></li>
                                            <li><input type="checkbox" value="elle" id="elle"><label for="elle"><span></span>BMW</label></li>
                                            <li><input type="checkbox" value="diva" id="diva"><label for="diva"><span></span>Tesla</label></li>
                                            <li><input type="checkbox" value="optimal" id="optimal"><label for="optimal"><span></span>Kia</label></li>
                                        </ul>
                                    </div>
                                </div> 
                                
                                <!--Popular Products-->
                                <div class="sidebar_widget sidePro">
                                    <div class="widget-title">
                                        <h2>Popular Products</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="sideProSlider grid-products">
                                            <!--Start Product -->
                                            <div class="col-12 item">
                                                <div class="product-box border rounded">
                                                    <!--Start Product Image-->
                                                    <div class="product-image">
                                                        <a href="product-details.php" class="product-img">
                                                            <img class="primary blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                                            <img class="hover blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">

                                                            <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                        </a>
                                                        <!--end product image-->

                                                        <!--Product Button-->
                                                        <div class="button-set-top position-absolute style1">
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label">Add To Wishlist</span>
                                                            </a>
                                                        </div>
                                                        <div class="button-set-bottom position-absolute style1">
                                                            <!--Cart Button-->
                                                            <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                                <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                            </a>
                                                            <!--End Cart Button-->
                                                        </div>
                                                        <!--End Product Button-->
                                                    </div>

                                                    <!--Start Product Details-->
                                                    <div class="product-details text-start p-2">

                                                        <!--Product Review-->
                                                        <div class="product-review">
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star-o"></i>
                                                        </div>

                                                        <!--Product Name-->
                                                        <div class="product-name text-uppercase">
                                                            <a href="product-details.php">Air Conditioning</a>
                                                        </div>

                                                        <!--Product Price-->
                                                        <div class="product-price">
                                                            <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                        </div>

                                                        <!--Color Variant -->
                                                        <!-- <ul class="swatches">
                                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                            <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                            <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                            <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                            <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                            </ul>  -->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 item">
                                                <div class="product-box border rounded">
                                                    <!--Start Product Image-->
                                                    <div class="product-image">
                                                        <a href="product-details.php" class="product-img">
                                                            <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                                            <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                                        
                                                            <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                        </a>
                                                        <!--end product image-->

                                                        <!--Product Button-->
                                                        <div class="button-set-top position-absolute style1">
                                                            <!--Wishlist Button-->
                                                            <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                                <i class="icon an an-heart-l"></i>
                                                                <span class="tooltip-label">Add To Wishlist</span>
                                                            </a> 
                                                        </div>
                                                        <div class="button-set-bottom position-absolute style1">
                                                            <!--Cart Button-->
                                                            <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                                <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                            </a>
                                                            <!--End Cart Button-->
                                                        </div>
                                                        <!--End Product Button-->
                                                    </div>

                                                    <!--Start Product Details-->
                                                    <div class="product-details text-start p-2">
                                                        
                                                        <!--Product Review-->
                                                        <div class="product-review">
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star"></i>
                                                            <i class="an an-star-o"></i>
                                                        </div> 

                                                        <!--Product Name-->
                                                        <div class="product-name text-uppercase">
                                                            <a href="product-details.php">Air Conditioning</a>
                                                        </div>
                                                        
                                                        <!--Product Price--> 
                                                        <div class="product-price">
                                                            <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                        </div>  

                                                        <!--Color Variant -->
                                                        <!-- <ul class="swatches">
                                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                            <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                            <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                            <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                            <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                        </ul>  -->

                                                    </div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!--End Sidebar-->

                        <!--Main Content-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                            <!-- <div class="page-title">
                                <h1>Car Accesories</h1>
                            </div> -->
                            <!--Active Filters-->
                            <ul class="active-filters d-flex flex-wrap align-items-center m-0 list-unstyled">
                                <li><a href="#">Clear all</a></li>
                                <li><a href="#">Filters <i class="an an-times-l"></i></a></li>
                                <li><a href="#">Bearings <i class="an an-times-l"></i></a></li>
                            </ul>
                            <!--End Active Filters-->
                            <!--Toolbar-->
                            <div class="toolbar">
                                <div class="filters-toolbar-wrapper">
                                    <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                        <li class="product-count d-flex align-items-center">
                                            <button type="button" class="btn btn-filter an an-slider-3 d-inline-flex d-lg-none me-2 me-sm-3"><span class="hidden">Filter</span></button>
                                            <div class="filters-toolbar__item">
                                                <span class="filters-toolbar__product-count">Showing: 21 products</span>
                                            </div>
                                        </li> 
                                        <li class="filters-sort ms-auto ms-sm-0">
                                            <div class="filters-toolbar__item">
                                                <label for="SortBy" class="hidden">Sort by:</label>
                                                <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                    <option value="featured" selected="selected">Featured</option>
                                                    <option value="best-selling">Best selling</option>
                                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                                    <option value="title-descending">Alphabetically, Z-A</option>
                                                    <option value="price-ascending">Price, low to high</option>
                                                    <option value="price-descending">Price, high to low</option>
                                                    <option value="created-ascending">Date, old to new</option>
                                                    <option value="created-descending">Date, new to old</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Toolbar-->

                            <!--Product Grid-->
                            <div class="grid-products">
                                <div class="row row-cols-2 row-cols-lg-3">
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!--Start Product-->
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                        <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                        <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                        <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                        <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                        <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                    </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-box border rounded">
                                            <!--Start Product Image-->
                                            <div class="product-image">
                                                <a href="product-details.php" class="product-img">
                                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">

                                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                                </a>
                                                <!--end product image-->

                                                <!--Product Button-->
                                                <div class="button-set-top position-absolute style1">
                                                    <!--Wishlist Button-->
                                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                                        <i class="icon an an-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="button-set-bottom position-absolute style1">
                                                    <!--Cart Button-->
                                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>

                                            <!--Start Product Details-->
                                            <div class="product-details text-start p-2">

                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-o"></i>
                                                </div>

                                                <!--Product Name-->
                                                <div class="product-name text-uppercase">
                                                    <a href="product-details.php">Air Conditioning</a>
                                                </div>

                                                <!--Product Price-->
                                                <div class="product-price">
                                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                                </div>

                                                <!--Color Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                                </ul>  -->

                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                                        <div id="loadProduct" class="btn btn-default btn-sm remain_products rounded">Load More </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Grid--> 

                        </div>
                        <!--End Main Content-->
                    </div>
                </div>
            </section>
        </div>
        <!-- [ Body Container ] start -->

    </div>
    <!--Page Wrapper-->

    <?php include("include/footer.php"); ?>
    <?php include("include/drawer.php"); ?>

    <?php include("include/script.php"); ?>

</body>

</html>