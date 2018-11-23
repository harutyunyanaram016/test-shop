<?php
use Illuminate\Support\Facades\App;

?>

        <!DOCTYPE html>
<html lang="en-US" >

<head>
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo - Just another WordPress site</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CMontserrat%3A400%2C700%7CRoboto%3A400%2C500%2C300%2C700%2C900%7CRaleway%3A400%2C100%2C200%2C300%2C600%2C500%2C700%2C800%2C900&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0' type='text/css'  >
    <link rel='stylesheet' href='{{asset('assest/css/bootstrap.min.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/font-awesome.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/owl.carousel.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/owl.theme.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/style.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/woocommerce.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/flexslider.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/skins/default/revslider.css')}}' type='text/css' >
    <link rel='stylesheet' href='{{asset('assest/css/skins/default/style.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/skins/default/responsive.css')}}' type='text/css'>
    <link rel='stylesheet' href='{{asset('assest/css/skins/default/tm_menu.css')}}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{asset('assest/css/skins/default/jquery.mobile-menu.css')}}' type='text/css'>
    <script type='text/javascript' src='{{asset('assest/js/jquery.js')}}'></script>
    <script type='text/javascript' src='{{asset('assest/js/jquery-migrate.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('assest/js/revslider.js')}}'></script>
    <script type='text/javascript' src='{{asset('assest/js/common.js')}}'></script>

</head>

<body class="home archive tax-product_cat term-bread-salads term-10 cms-index-index cms-home-page woocommerce woocommerce-page woocommerce-js product-template-default single single-product postid-70 index cms-home-page ">
<div class="page catalog-category-view">


    <header id="header">
        <div class="header-container container">
            <div class="row">
                <!-- Header Logo -->
                <div class="logo">
                    <a   href="#"> <img alt="demo" src="\assest\images\2016\02\logo.png"  > </a>
                </div>
                <!-- End Header Logo -->
                <div class="top-menu">
                    <a class="mobile-toggle"><i class="fa fa-reorder"></i></a>
                    <div class="tm-main-menu">
                        <div id="main-menu">
                            <ul id="menu-main-menu" class="main-menu mega-menu show-arrow">
                                <li class="menu-item  menu-item-home current-menu-item  current_page_item active narrow "><a href="{{route("mainpage")}}">Գլխավոր</a></li>
                                <li class="menu-item    has-sub wide"><a href="#">Ապրանքներ</a>
                                    <div class="tm-popup">
                                        <div class="inner">
                                            <ul class="sub-menu">
                                                @if(isset($categories))
                                                    @if(count($categories))
                                                        @foreach($categories as $category)
                                                            <li data-cols="1" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  sub"><a href="{{route('products.productsBySubcategory',['id'=>$category->id])}}">{{$category->locName()}}</a>
                                                    <ul class="sub-menu">
                                                        {{--<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#"></a></li>--}}
                                                        {{--<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#">Սև սալորի չիր</a></li>--}}
                                                        {{--<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#">Կարմիր սալորի չիր</a></li>--}}
                                                        {{--<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#">Դեղին սալորի չիր</a></li>--}}
                                                    </ul>
                                                </li>
                                                        @endforeach
                                                    @endif
                                                @endif
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom " data-cols="1" style="height:200px;background-image:url('../../assest/images/2013/06/p15.jpeg');;background-position:center center;;background-repeat:no-repeat;;background-size:cover;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-right-col">
                    <div class="click-nav">
                        <div class="no-js">
                            <a class="clicker"></a>
                            <div class="top-links">
                                <div class="lang-curr">
                                    <div class="form-language">
                                        <ul class="lang">
                                            <li><a href="{{route('lanuage',['locale'=>'en'])}}"><img src="\assest\images\english.png" alt="English">    </a></li>
                                            <li><a href="{{route('lanuage',['locale'=>'fr'])}}"><img src="\assest\images\francais.png" alt="French"></a></li>
                                            <li><a href="{{route('lanuage',['locale'=>'ru'])}}"><img src="\assest\images\german.png" alt="German">  </a></li>
                                        </ul>
                                    </div>
                                    <div class="form-currency">
                                        <ul class="currencies_list">
                                            <li><a href="#">    $   </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="top-links1 mega-menu1 show-arrow">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a href="#">Blog</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a href="#">My Account</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a href="#">Checkout</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a href="#">Cart</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a href="#">Wishlist</a></li>
                                    <li class="menu-item"><a href="#"> Login</a></li>
                                    <li class="menu-item"><a href="#">Register</a></li>
                                    <li class="menu-item"><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-cart-contain">

                        <div class="mini-cart">
                            <div class="basket">
                                <a href="#">

                                    <span> @if(isset($cart)) {{$cart->totalQty}} @else 0 @endif </span>
                                </a>
                            </div>

                            <div class="top-cart-content arrow_box">
                                <div class="block-subtitle">
                                    @if(isset($cart))
                                        <div class="top-subtotal">{{$cart->totalQty}} items,
                                            <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $cart->totalPrice }}</span>
                                                </span>
                                        </div>
                                   @else
                                        <div class="top-subtotal">0 items, <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>0</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <ul class="mini-products-list">

                                    @if(isset($cart))
                                        @foreach($cart->items as $item)
                                            <li class="item odd ">
                                                <div class="item-inner">
                                                    <a class="product-image" href="#"> <img   src="{{asset('/images/products'.$item['item']->images[0]->file)}}" class="attachment-60x60 size-60x60 wp-post-image" alt="" > </a>
                                                    <div class="product-details">
                                                        <div class="access">
                                                            <a href="#" class="btn-remove1">Remove</a> <a class="btn-edit" href="#"><i class="icon-pencil"></i> </a>
                                                        </div>
                                                        <strong>{{$item['qty']}}                  </strong> x <span class="price">{{$item['item']->price}}<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        <p class="product-name"><a href="#">{{$item['item']->name('products.details',['id'=>$item['item']->id])}}</a> </p>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                    @else
                                    @endif
                                </ul>

                                <div class="actions">
                                    <button class="btn-checkout" type="button"><span>Checkout</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-search">
                        <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
                            <div class="modal fade bs-example-modal-lg">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button data-dismiss="modal" class="close" type="button"><img src="\assest\images\interstitial-close.png" alt="close "> </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="modalsearch">
                                                <div class="input-group">
                                                    <form name="myform" method="" action="#">
                                                        <input type="text" name="s" class="tm-search" placeholder="Search">
                                                        <button type="submit" class="search-btn-bg search-icon"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                                    </form>
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
        </div>
    </header>
    @yield('content')
    <footer class="footer bounceInUp animated">
        <div class="footer-inner">
            <!--  <div class="newsletter-row">
<div class="container"> -->
            <!--   <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">


    </div>
   -->
            <!--                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col1">-->
            <!--
                <div class="newsletter-wrap">
                    <script>
                        (function() {
                            if (!window.mc4wp) {
                                window.mc4wp = {
                                    listeners: [],
                                    forms: {
                                        on: function(event, callback) {
                                            window.mc4wp.listeners.push({
                                                event: event,
                                                callback: callback
                                            });
                                        }
                                    }
                                }
                            }
                        })();
                    </script>
-->
            <!-- MailChimp for WordPress v4.2.4 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
            <!-- <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1706" method="post" data-id="1706" data-name="Newsletter"><div class="mc4wp-form-fields"><p>
<label>Email address: </label>
<input type="email" name="EMAIL" placeholder="Your email address" required="">
</p>

<p>
<input type="submit" value="Sign up">
</p></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1542019220"><input type="hidden" name="_mc4wp_form_id" value="1706"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"><div class="mc4wp-response"></div></form> -->
            <!-- / MailChimp for WordPress Plugin -->
            <!--                    </div>-->
            <!--newsletter-wrap-->
            <!--                </div>-->
            <!--           </div>
</div> -->
            <!--footer-column-last-->
            <!--  </div>
 -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-lg-4">
                        <!-- <div class="footer-column co-info footer-first"> -->
                        <div class="co-info">
                            <aside id="text-8" class="widget widget_text">
                                <div class="textwidget">
                                    <div><a href="\"><img alt="footer logo" src="\assest\images\2016\02\logo.png"></a></div>
                                    <address>
                                        <div><em class="icon-location-arrow"></em> <span>ABC Town Luton Street, New York 226688</span></div>
                                        <div> <em class="icon-mobile-phone"></em><span> + 0800 567 345</span></div>
                                        <div> <em class="icon-envelope"></em><span>support@themesmart.net</span></div>
                                    </address>

                                </div>
                            </aside>
                            <div class="social">
                                <ul>
                                    <li class="fb pull-left"><a target="_blank" href='#'></a></li>
                                    <li class="tw pull-left"><a target="_blank" href='#'></a></li>
                                    <li class="googleplus pull-left"><a target="_blank" href='#'></a></li>
                                    <li class="rss pull-left"><a target="_blank" href='#'></a></li>
                                    <li class="pintrest pull-left"><a target="_blank" href='#'></a></li>
                                    <li class="linkedin pull-left"><a target="_blank" href='#'></a></li>
                                    <li class="youtube pull-left"><a target="_blank" href='#'></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12 col-lg-8">
                        <div class="footer-column">
                            <aside id="text-4" class="widget widget_text">
                                <h4>Information</h4>
                                <div class="textwidget">
                                    <ul class="links">
                                        <li class="first"><a href="#" title="Site Map">Site Map</a></li>
                                        <li><a href="#" title="Search Terms">Search Terms</a></li>
                                        <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                                        <li><a href="#" title="History">About Us</a></li>
                                        <li><a href="#" title="History">Contact Us</a></li>
                                        <li><a href="#" title="Suppliers">Suppliers</a></li>
                                    </ul>

                                </div>
                            </aside>
                        </div>
                        <div class="footer-column">
                            <aside id="text-6" class="widget widget_text">
                                <h4>Style Advisor</h4>
                                <div class="textwidget">
                                    <ul class="links">
                                        <li class="first"><a href="#" title="Your Account">Your Account</a></li>
                                        <li><a href="#" title="Information">Information</a></li>
                                        <li><a href="#" title="Addresses">Addresses</a></li>
                                        <li><a href="#" title="Addresses">Discount</a></li>
                                        <li><a href="#" title="Orders History">Orders History</a></li>
                                        <li class="last"><a href="#" title=" Additional Information"> Additional Information</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="footer-column">
                            <aside class="widget widget_text">
                                <h4>Վճարման միջոցներ</h4>
                                <div class="textwidget">
                                    <aside class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="payment-accept">
                                                <div><img alt="payment1" src="\assest\images\payment-1.png"> <img alt="payment2" src="\assest\images\payment-2.png">
                                                    <!-- <img alt="payment3" src="wp-content\themes\flavours\images\payment-3.png">  --><img alt="payment4" src="\assest\images\payment-4.png"></div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <!--col-sm-12 col-xs-12 col-lg-8-->
                <!--col-xs-12 col-lg-4-->
            </div>
            <!--row-->
        </div>
        <!--container-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="coppyright">© 2018. All rights reserved by <a href="http://wave-it.ru/" target="_blank" class="copyright-part">Wave-it LLC</a></div>
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--footer-bottom-->
        <!--/div-->
    </footer>

</div>

<script type='text/javascript' src='{{asset('assest/js/bootstrap.min.js')}}'></script>
<script>
    var js_flavours_vars = {
        //                "ajax_url": "http:\/\/wptest.themesmart.net\/wp-admin\/admin-ajax.php",
        //                "container_width": "1160",
        //                "grid_layout_width": "20"
    };
</script>

<script type='text/javascript' src='{{asset('assest/js/revslider.js')}}'></script>
<script type='text/javascript' src='{{asset('assest/js/common.js')}}'></script>
<script type='text/javascript' src='{{asset('assest/js/jquery.mobile-menu.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assest/js/owl.carousel.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assest/js/tm_menu.js')}}'></script>
<script>

</script>
</body>

</html>