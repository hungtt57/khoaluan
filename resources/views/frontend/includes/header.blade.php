  <div class="em-wrapper-header">
    <div id="em-mheader" class="visible-xs container">
        <div id="em-mheader-top" class="row">
            <div id="em-mheader-logo" class="col-xs-4">
                <div class="em-logo"><a href="{{asset('/')}}" title="Fashion Commerce" class="logo"><strong>Chemmist's</strong><img src="{{asset('public/frontend/images/logo_small.png')}}" alt="Fashion Commerce" /></a>
                </div>
            </div><!-- /#em-mheader-logo -->
            <div class="col-xs-20">
                <div class="em-top-search">
                    <div class="em-header-search-mobile">
                        <form method="get">
                            <div class="form-search no_cate_search">
                                <div class="text-search">
                                    <input id="search-mobile" type="text" name="q" value="" class="input-text" maxlength="128" />
                                    <button type="submit" title="Search" class="button"><span><span>Tìm Kiếm</span></span>
                                    </button>
                                    <div id="search_autocomplete_mobile" class="search-autocomplete"></div>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.em-header-search-mobile -->
                </div><!-- /.em-top-search -->
                <div class="em-top-cart">
                    <div class="em-wrapper-topcart-mobile em-no-quickshop">
                        <div class="em-container-topcart">
                            <div class="em-summary-topcart">
                                <a id="em-amount-cart-link" title="Shopping Cart" class="em-amount-topcart" href="{{asset('/giohang')}}"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty">0</span> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.em-top-cart -->
                <div id="em-mheader-wrapper-menu"> <span class="visible-xs fa fa-bars" id="em-mheader-menu-icon"></span>
                    <div id="em-mheader-menu-content" style="display: none;">
                        <div class="em-wrapper-top">
                           
                            <div class="em-top-links row">
                                <div class="">
                                    <ul class="top-header-link links">
                                        <li class="first col-xs-8"> <a title="Log In" class="login-link fa fa-user" href="#"><span>Đăng nhập</span></a>
                                        </li>
                                        <li class="col-xs-8"> <a title="Sign up" class='signup-link fa fa-sign-out' href="#"><span>Đăng ký</span></a>
                                        </li>
                                        <li class="last col-xs-8"> <a href="#" class="checkout-link fa fa-shopping-cart"><span>Giỏ hàng</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.em-top-links -->
                        </div><!-- /.em-wrapper-top -->
                        <div class="row mobile-main-menu toggle-menu">
                            <div class="col-sm-24">
                                <div class="em-top-menu">
                                    <div class="em-menu-mobile">
                                        <div class="megamenu-wrapper wrapper-7_5505">
                                            <div class="em_nav" id="toogle_menu_7_5505">
                                                <ul class="hnav em_menu_mobile">
                                                    <li class="menu-item-link menu-item-depth-0 fa fa-home menu-item-parent">
                                                        <a class="em-menu-link" href="{{asset('/')}}"> <span> Trang chủ </span> </a>
                                                        <ul class="menu-container">
                                                            <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col9 grid_18 menu-item-parent" style="">
                                                                <ul class="menu-container">
                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-12 menu-item-parent" style="">
                                                                        <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                <ul class="em-line-01">
                                                                                    <li>
                                                                                        <h4>Layout styles</h4>
                                                                                    </li>
                                                                                    <li>
                                                                                        <ul class="menu-link">
                                                                                            <li><a href="index.html">Home Default</a>
                                                                                            </li>
                                                                                            <li><a href="#">Home Style 02</a>
                                                                                            </li>
                                                                                            <li><a href="#">Home Style 03</a>
                                                                                            </li>
                                                                                            <li><a href="#">Home Style 04</a>
                                                                                            </li>
                                                                                        </ul><!-- /.menu-link -->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.menu-item-vbox -->
                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-12 menu-item-parent" style="">
                                                                        <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                <div class="em-line-01">
                                                                                    <h4>Header styles</h4>
                                                                                    <div>
                                                                                        <ul class="menu-link">
                                                                                            <li><a href="index.html">Header Style 01</a>
                                                                                            </li>
                                                                                            <li><a href="#">Header Style 02</a>
                                                                                            </li>
                                                                                            <li><a href="#">Header Style 04</a>
                                                                                            </li>
                                                                                            <li><a href="#">Header Style 03</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.menu-item-vbox -->
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li><!-- /.menu-item-link -->
                                                    <li class="menu-item-link menu-item-depth-0 dd-menu-link fa fa-bars menu-item-parent">
                                                        <a class="em-menu-link" href="#"> <span> Danh mục </span> </a>
                                                        <ul class="menu-container">
                                                            <li class="menu-item-text menu-item-depth-1  ">
                                                                <ul class="em-catalog-navigation vertical">
                                                                    <li class="level0 nav-1 first parent">
                                                                        <a href="#"> <span>Furniture</span> </a>
                                                                        <ul class="level0">
                                                                            <li class="level1 nav-1-1 first">
                                                                                <a href="#"> <span>Living Room</span> </a>
                                                                            </li>
                                                                            <li class="level1 nav-1-2 last">
                                                                                <a href="#"> <span>Bedroom</span> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.nav-1 -->
                                                                    <li class="level0 nav-2 parent">
                                                                        <a href="#"> <span>Electronics</span> </a>
                                                                        <ul class="level0">
                                                                            <li class="level1 nav-2-1 first">
                                                                                <a href="#"> <span>Cell Phones</span> </a>
                                                                            </li>
                                                                            <li class="level1 nav-2-2 parent">
                                                                                <a href="#"> <span>Cameras</span> </a>
                                                                                <ul class="level1">
                                                                                    <li class="level2 nav-2-2-1 first">
                                                                                        <a href="#"> <span>Accessories</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-2-2 last">
                                                                                        <a href="#"> <span>Digital Cameras</span> </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="level1 nav-2-3 last parent">
                                                                                <a href="#"> <span>Computers</span> </a>
                                                                                <ul class="level1">
                                                                                    <li class="level2 nav-2-3-3 first">
                                                                                        <a href="#"> <span>Build Your Own</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-4">
                                                                                        <a href="#"> <span>Laptops</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-5">
                                                                                        <a href="#"> <span>Hard Drives</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-6">
                                                                                        <a href="#"> <span>Monitors</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-7">
                                                                                        <a href="#"> <span>RAM / Memory</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-8">
                                                                                        <a href="#"> <span>Cases</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-9">
                                                                                        <a href="#"> <span>Processors</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-2-3-10 last">
                                                                                        <a href="#"> <span>Peripherals</span> </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.nav-2 -->
                                                                    <li class="level0 nav-3 parent">
                                                                        <a href="#"> <span>Apparel</span> </a>
                                                                        <ul class="level0">
                                                                            <li class="level1 nav-3-1 first">
                                                                                <a href="#"> <span>Shirts</span> </a>
                                                                            </li>
                                                                            <li class="level1 nav-3-2 parent">
                                                                                <a href="#"> <span>Shoes</span> </a>
                                                                                <ul class="level1">
                                                                                    <li class="level2 nav-3-2-1 first">
                                                                                        <a href="#"> <span>Mens</span> </a>
                                                                                    </li>
                                                                                    <li class="level2 nav-3-2-2 last">
                                                                                        <a href="#"> <span>Womens</span> </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="level1 nav-3-3 last">
                                                                                <a href="#"> <span>Hoodies</span> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.nav-3 -->
                                                                    <li class="level0 nav-4">
                                                                        <a href="#"> <span>Fashion</span> </a>
                                                                    </li><!-- /.nav-4 -->
                                                                    <li class="level0 nav-5">
                                                                        <a href="#"> <span>Shoes</span> </a>
                                                                    </li><!-- /.nav-5 -->
                                                                    <li class="level0 nav-6">
                                                                        <a href="#"> <span>Glasses</span> </a>
                                                                    </li><!-- /.nav-6 -->
                                                                    <li class="level0 nav-7">
                                                                        <a href="#"> <span>Baby</span> </a>
                                                                    </li><!-- /.nav-7 -->
                                                                    <li class="level0 nav-8">
                                                                        <a href="#"> <span>Sport &amp; Outdoor</span> </a>
                                                                    </li><!-- /.nav-8 -->
                                                                    <li class="level0 nav-9">
                                                                        <a href="#"> <span>Swatch</span> </a>
                                                                    </li><!-- /.nav-9 -->
                                                                    <li class="level0 nav-10">
                                                                        <a href="#"> <span>Jewelry</span> </a>
                                                                    </li><!-- /.nav-10 -->
                                                                    <li class="level0 nav-11">
                                                                        <a href="#"> <span>Home Garden</span> </a>
                                                                    </li><!-- /.nav-11 -->
                                                                    <li class="level0 nav-12">
                                                                        <a href="#"> <span>Lingerie</span> </a>
                                                                    </li><!-- /.nav-12 -->
                                                                    <li class="level0 nav-13">
                                                                        <a href="#"> <span>Beauty</span> </a>
                                                                    </li><!-- /.nav-13 -->
                                                                    <li class="level0 nav-14 last">
                                                                        <a href="#"> <span>Game &amp; Movies</span> </a>
                                                                    </li><!-- /.nav-14 -->
                                                                </ul><!-- /.em-catalog-navigation -->
                                                            </li>
                                                        </ul>
                                                    </li><!-- /.menu-item-link -->
                                                    <li class="menu-item-link menu-item-depth-0 fa fa-file menu-item-parent">
                                                        <a class="em-menu-link" href="#"> <span> Sản phẩm </span> </a>
                                                        <ul class="menu-container">
                                                            <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col16 grid_16 menu-item-parent" style="">
                                                                <ul class="menu-container">
                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-8 grid_8 alpha menu-item-parent" style="">
                                                                        <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                <div class="em-line-01">
                                                                                    <h5 class="text-uppercase">Product Types</h5>
                                                                                    <div>
                                                                                        <ul class="menu-container">
                                                                                            <li class="menu-item-link menu-item-depth-1 first label-hot-menu"><a class="em-menu-link" href="product-simple.html">Simple product</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-virtual.html">Virtual Product</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-downloadable.html">Downloadable Product</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-configurable.html">Configurable Product</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-grouped.html">Grouped Product</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1 last"><a class="em-menu-link" href="product-bundle.html">Bundle Product</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.menu-item-vboxc -->
                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-8 grid_8 omega menu-item-parent" style="">
                                                                        <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                <div class="em-line-01">
                                                                                    <h5 class="text-uppercase">PRODUCT COLUMNS</h5>
                                                                                    <div>
                                                                                        <ul class="menu-container">
                                                                                            <li class="menu-item-link menu-item-depth-1 first"><a class="em-menu-link" href="product-1-column.html">1 Column</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-2-columns-left.html">2 Columns Left</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-2-columns-right.html">2 Columns Right</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-3-columns.html">3 Columns</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-upsell.html">Upsell</a>
                                                                                            </li>
                                                                                            <li class="menu-item-link menu-item-depth-1 last"><a class="em-menu-link" href="product-related.html">Related Product</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li><!-- /.menu-item-vboxc -->
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li><!-- /.menu-item-link -->
                                                </ul>
                                            </div>
                                        </div><!-- /.megamenu-wrapper -->
                                    </div>
                                </div><!-- /.em-top-menu -->
                            </div>
                        </div><!-- /.mobile-main-menu -->
                        
                    </div>
                </div><!-- /.em-mheader-wrapper-menu -->
            </div>
        </div><!-- /#em-mheader-top -->
    </div><!-- /#em-mheader -->
    <div class="hidden-xs em-header-style08">
        <div class="em-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-24">
                        <div class="f-left">
                            <div class="em-language-currency">
                                <div class="form-language toolbar-switch em-language-style01">
                                    <div class="toolbar-title">

                                    </div>
                                </div><!-- /.em-language-style01 -->
                                <div class="toolbar-switch em-currency-style01">
                                    <div class="toolbar-title">

                                    </div>
                                </div><!-- /.em-currency-style01 -->
                            </div><!-- /.em-language-currency -->
                        </div><!-- /.f-left -->
                        <div class="">
                            <div class="em-search f-right">
                                <div class="em-top-search">
                                    <div class="em-wrapper-js-search em-search-style01">
                                        <div class="em-wrapper-search em-no-category-search"> <a class="em-search-icon" title="Search" href="javascript:void(0);"><span>Search</span></a>
                                            <div class="em-container-js-search" style="display: none;">
                                                <form id="search_mini_form" method="get" action="{{asset('timkiem')}}">
                                                    <div class="form-search no_cate_search">
                                                        <div class="text-search">
                                                            <label for="search">Tìm Kiếm:</label>
                                                            <input id="search" type="text" name="search"  class="input-text" maxlength="128" placeholder="Nhập từ khóa" />
                                                            <button type="submit" title="Search" class="button"><span><span>Tìm kiếm</span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form><!-- /#search_mini_form -->
                                            </div>
                                        </div>
                                    </div><!-- /.em-wrapper-js-search -->
                                </div>
                            </div><!-- /.em-search -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.em-header-top -->
        <div id="em-fixed-top"></div>
        <div class="em-header-bottom em-fixed-top">
            <div class="container em-menu-fix-pos">
                <div class="row">
                    <div class="col-sm-24">
                        <div class="em-logo f-left"><a href="{{asset('/')}}" title="Fashion Commerce" class="logo"><strong>Chemist's</strong><img class="retina-img" src="{{asset('public/frontend/images/logo.png')}}" alt="Fashion Commerce" /></a>
                        </div>
                        <div class="em-logo-sticky f-left">
                            <a href="index.html" title="Fashion Commerce" class="logo"><img src="{{asset('public/frontend/images/logo_small.png')}}" alt="Fashion Commerce" />
                            </a>
                        </div>
                        <div class="em-search em-search-sticky f-right">
                            <div class="em-top-search">
                                <div class="em-wrapper-js-search em-search-style01">
                                    <div class="em-wrapper-search"> <a class="em-search-icon" title="Search" href="javascript:void(0);"><span>Tìm Kiếm</span></a>
                                        <div class="em-container-js-search" style="display: none;">
                                            <form id="search_mini_form" method="get" action="{{asset('timkiem')}}">
                                                    <div class="form-search no_cate_search">
                                                        <div class="text-search">
                                                            <label for="search">Tìm Kiếm:</label>
                                                            <input id="search" type="text" name="search"  class="input-text" maxlength="128" placeholder="Nhập từ khóa" />
                                                            <button type="submit" title="Search" class="button"><span><span>Tìm kiếm</span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form><!-- /#search_mini_form -->
                                        </div>
                                    </div>
                                </div><!-- /.em-wrapper-js-search -->
                            </div>
                        </div><!-- /.em-search -->
                        <div class="em-top-cart-sticky em-top-cart f-right">
                            <div class="em-wrapper-js-topcart em-wrapper-topcart em-no-quickshop">
                                <div class="em-container-topcart">
                                    <?php $giohang = Cart::content();?>
                                    @if(isset($giohang) && count($giohang)>0)
                                    <div class="em-summary-topcart">
                                        <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="{{asset('/giohang')}}"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty"><?php echo count($giohang);?></span> </a>
                                    </div>
                                    <div class="em-container-js-topcart topcart-popup" style="display:none">
                                        <div class="topcart-popup-content">
                                            <p class="em-block-subtitle">Giỏ hàng</p>
                                            <div class="topcart-content">
                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th>Tên thuốc</th>
                                                            <th>Số Lượng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($giohang as $value)
                                                        <tr>

                                                            <td>{{$value["name"]}}</td>
                                                            <td class="qty_header{{$value['rowid']}}">{{$value["qty"]}}</td>
                                                        </tr>
                                                        <!-- <p class="amount-content ">{{$value->name}}</p> -->
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="em-summary-topcart">
                                        <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="{{asset('/giohang')}}"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty">0</span> </a>
                                    </div>
                                    <div class="em-container-js-topcart topcart-popup" style="display:none">
                                        <div class="topcart-popup-content">
                                            <p class="em-block-subtitle">Giỏ hàng</p>
                                            <div class="topcart-content">

                                                <p class="amount-content ">Bạn không có sản phẩm nào trong giỏ hàng</p>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div><!-- /.em-wrapper-js-topcart -->
                        </div><!-- /.em-top-cart -->

                        <div class="em-menu-hoz f-right">
                            <div id="em-main-megamenu">
                                <div class="em-menu">
                                    <div class="megamenu-wrapper wrapper-4_7164">
                                        <div class="em_nav" id="toogle_menu_4_7164">
                                            <ul class="hnav em_hoz_menu effect-menu">
                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                    <a class="em-menu-link" href="{{asset('/')}}"> <span>Trang chủ </span> </a>

                                                </li><!-- /.menu-item-link -->

                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                    <a class="em-menu-link" href="#"> <span> Danh mục </span> </a>
                                                    <ul class="menu-container">
                                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col24 grid_24 menu-item-parent" style="">
                                                            <ul class="menu-container list-group">
                                                               <?php $categories = category_menu();?>
                                                               @foreach($categories as $key => $value)
                                                               <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent list-group-item" style="border:none !important;">
                                                                <a href="{{asset('/loaisanpham/'.$value->id.'/'.$value->alias)}}}">{{$value->ten}}</a>
                                                            </li><!-- /.menu-item-vbox -->
                                                            @endforeach
                                                        </ul><!-- /.menu-container -->
                                                    </li>
                                                </ul><!-- /.menu-container -->
                                            </li><!-- /.menu-item-link -->

                                            <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                <a class="em-menu-link" href="{{asset('/tintuc')}}"> <span> Tin Tức </span> </a>

                                            </li><!-- /.menu-item-link -->
                                            <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                <a class="em-menu-link" href="{{asset('/about')}}"> <span> Giới Thiệu </span> </a>

                                            </li><!-- /.menu-item-link -->
                                            <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                <a class="em-menu-link" href="{{asset('/contact')}}"> <span> Liên Hệ </span> </a>

                                            </li><!-- /.menu-item-link -->
                                        </ul><!-- /.hnav em_hoz_menu -->
                                    </div><!-- /.em_nav -->
                                </div><!-- /.megamenu-wrapper -->
                            </div><!-- /.em-menu -->
                        </div><!-- /#em-main-megamenu -->
                    </div><!-- /.em-menu-hoz -->
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.em-header-bottom -->
</div>
                </div><!-- /.em-wrapper-header -->