<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>Cart | MbizSpare</title>
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
            <!--Breadcrumbs-->
            <div class="breadcrumbs-wrapper text-uppercase">
                <div class="container">
                    <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Product Cart</span></div>
                </div>
            </div>
            <!--End Breadcrumbs-->

            <!--Cart Main Content-->
            <section class="shop-cart-main">
                <!--Main Content-->
                <div class="container">
                    <!--Cart Page-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success py-2 rounded-1 alert-dismissible fade show cart-alert" role="alert">
                                <i class="align-middle icon an an-truck icon-large me-2"></i><strong class="text-uppercase">Congratulations!</strong> You've got free shipping!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col"> 

                            <form action="#" method="post" class="cart style2">
                                <table class="align-middle">
                                    <thead class="cart__row cart__header small--hide">
                                        <tr>
                                            <th class="action">&nbsp;</th>
                                            <th colspan="2" class="text-start">Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart__row border-bottom line1 cart-flex border-top">
                                            <td class="cart-delete text-center small--hide">
                                                <a href="#" class="btn bg-danger cart__remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove item"><i class="icon an an-times-r"></i></a>
                                            </td>
                                            <td class="cart__image-wrapper cart-flex-item">
                                                <a href="product-layout1.html">
                                                    <img class="cart__image blur-up lazyload" src="assets/images/products/1.jpg" alt="Sunset Sleep Scarf Top" width="80" />
                                                </a>
                                            </td>
                                            <td class="cart__meta small--text-left cart-flex-item">
                                                <div class="list-view-item__title">
                                                    <a href="product-layout1.html">Air Conditioning</a>
                                                </div>
                                                <div class="cart__meta-text">
                                                    Color: Black<br>Size: Small<br>Qty: 2
                                                </div>
                                                <div class="cart-price d-md-none">
                                                    <span class="money fw-500">Rs.297.00</span>
                                                </div>
                                            </td>
                                            <td class="cart__price-wrapper cart-flex-item text-center small--hide">
                                                <span class="money">Rs.99.00</span>
                                            </td>
                                            <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r"></i></a>
                                                        <input class="cart__qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small--hide">
                                                <span class="money fw-500">Rs.297.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__row border-bottom line1 cart-flex">
                                            <td class="cart-delete text-center small--hide"><a href="#" class="btn bg-danger cart__remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove item"><i class="icon an an-times-r"></i></a></td>
                                            <td class="cart__image-wrapper cart-flex-item">
                                                <a href="product-layout1.html">
                                                    <img class="cart__image blur-up lazyload" data-src="assets/images/products/2.jpg" src="assets/images/products/2.jpg" alt="Long Sleeve T-shirts" width="80" />
                                                </a>
                                            </td>
                                            <td class="cart__meta small--text-left cart-flex-item">
                                                <div class="list-view-item__title">
                                                    <a href="product-layout1.html">Air Conditioning</a>
                                                </div>
                                                <div class="cart__meta-text">
                                                    Color: Gray<br>Size: 28<br>
                                                </div>
                                                <div class="cart-price d-md-none">
                                                    <span class="money fw-500">Rs.128.00</span>
                                                </div>
                                            </td>
                                            <td class="cart__price-wrapper cart-flex-item text-center small--hide">
                                                <span class="money">Rs.128.00</span>
                                            </td>
                                            <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r"></i></a>
                                                        <input class="cart__qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small--hide">
                                                <span class="money fw-500">Rs.128.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__row border-bottom line1 cart-flex">
                                            <td class="cart-delete text-center small--hide">
                                                <a href="#" class="btn bg-danger cart__remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove item"><i class="icon an an-times-r"></i></a>
                                            </td>
                                            <td class="cart__image-wrapper cart-flex-item">
                                                <a href="product-layout1.html">
                                                    <img class="cart__image blur-up lazyload" data-src="assets/images/products/1.jpg" src="assets/images/products/1.jpg" alt="Weave Hoodie Sweatshirt" width="80" />
                                                </a>
                                            </td>
                                            <td class="cart__meta small--text-left cart-flex-item">
                                                <div class="list-view-item__title">
                                                    <a href="product-layout1.html">Air Conditioning</a>
                                                </div>
                                                <div class="cart__meta-text">
                                                    Color: Navy<br>Size: Large<br>
                                                </div>
                                                <div class="cart-price d-md-none">
                                                    <span class="money fw-500">Rs.350.00</span>
                                                </div>
                                            </td>
                                            <td class="cart__price-wrapper cart-flex-item text-center small--hide">
                                                <span class="money">Rs.350.00</span>
                                            </td>
                                            <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r"></i></a>
                                                        <input class="cart__qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small--hide">
                                                <span class="money fw-500">Rs.350.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-start pt-3"><a href="#" class="btn btn--link d-inline-flex align-items-center btn--small p-0 cart-shop-continue">
                                                    <i class="me-1 icon an an-angle-left-l"></i><span class="text-decoration-underline">Continue shopping</span></a>
                                            </td>
                                            <td colspan="3" class="text-end pt-3">
                                                <button type="submit" name="clear" class="btn btn--link d-inline-flex align-items-center cart-shop-continue">
                                                    <i class="me-1 icon an an-times-r"></i><span class="ms-1 text-decoration-underline">Clear Shoping Cart</span>
                                                </button>
                                                <button type="submit" name="update" class="btn btn--small d-inline-flex align-items-center rounded cart-continue ml-2"><i class="me-1 icon an an-sync-ar d-none"></i>Update Cart</button>
                                            </td>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </form>

                            <div class="row my-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                                    <h5>Discount Codes</h5>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="address_zip">Enter your coupon code if you have one.</label>
                                            <div class="input-group flex-nowrap">
                                                <input class="input-group__field" type="text" name="coupon" />
                                                <span class="input-group__btn">
                                                    <input type="button" class="btn rounded-end text-nowrap" value="Apply Coupon" />
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart__footer"> 
                            <div class="cart_info border p-0">

                                <div class="card mb-4 p-0">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-sm list-group-flush-y list-group-flush border-0">
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ">
                                                <span>Bag Total</span> <span class="ml-auto text-dark text-detail">Rs.98.12</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ">
                                                <span>Sub Total</span> <span class="ml-auto text-dark text-detail">Rs.98.12</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Offer Discount</span> <span class="text-success ml-auto text-detail">- Rs.10.00</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Coupon Discount</span> <span class="text-success ml-auto text-detail">- Rs.10.00</span>
                                            </li>
                                            <!-- <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Delivery Charges</span> <span class="ml-auto text-danger text-detail">Rs.10.00</span>
                                            </li> -->
                                            <!-- <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                    <span>Tax</span> <span class="ml-auto text-dark ft-medium">Rs.10.00</span>
                                                </li> -->
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Total Amount</span> <span class="ml-auto text-dark text-detail"><strong>Rs.108.22</strong></span>
                                            </li>
                                            <li class="list-group-item fs-sm text-center"> Inclusive of all taxes and Charges. * </li>
                                        </ul>
                                    </div>
                                </div>   
                               
                                <div class="cart-action-btn text-center p-2">
                                    <a href="checkout.php" class="btn btn--small-wide rounded checkout w-100">Proceed To Checkout</a>
                                    <a href="product.php" class="d-flex justify-content-center align-items-center">
                                        <i class="me-1 icon an an-angle-left-l"></i> Continue shopping 
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Cart Page-->
                </div>
                <!--End Main Content-->
            </section>
            <!--End Cart Container-->

            <!--Similar Products-->
            <section class="section product-slider pb-5">
                <div class="container">
                    <div class="row">
                        <div class="section-header col-12">
                            <h2 class="text-transform-none">Related Products</h2>
                        </div>
                    </div>
                    <div class="productSlider grid-products">
                        <div class="item">
                            <div class="product-box border rounded">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <a href="#" class="product-img">
                                        <img class="primary lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                        <img class="hover lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">

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
                                        <a href="#">Air Conditioning</a>
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
                                    <a href="#" class="product-img">
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
                                        <a href="#">Air Conditioning</a>
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
                                    <a href="#" class="product-img">
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
                                        <a href="#">Air Conditioning</a>
                                    </div>

                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box border rounded">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <a href="#" class="product-img">
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
                                        <a href="#">Air Conditioning</a>
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
                                    <a href="#" class="product-img">
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
                                        <a href="#">Air Conditioning</a>
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
            </section>
            <!--End Recently Viewed Products-->
        </div>
        <!-- [ Body Container ] start -->

    </div>
    <!--Page Wrapper-->

    <?php include("include/footer.php"); ?> 
    <?php include("include/script.php"); ?> 

</body>

</html>