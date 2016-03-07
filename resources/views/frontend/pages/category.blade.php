@extends('frontend.layout.master')
@section('css')

<!-- Blog Style CSS -->
<link rel="stylesheet" type="text/css')}}" href="{{asset('public/frontend/css/blog-styles.css')}}" media="all" />
@endsection
@section('content')

<div class="wrapper-breadcrums">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="{{asset('/')}}" title="Home"><span>Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="contact"> <strong>{{$name_cate->ten}}</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrapper-breadcrums -->

<div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-wrapper-area03"></div>
                            <div class="em-wrapper-area04"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="page-title category-title">
                                            <h1>{{$name_cate->ten}}</h1>
                                        </div>
                                        <div class="category-products">
                                            <div class="toolbar-top">
                                                <div class="toolbar">
                                                    <div class="pager">
                                                        <p class="amount"> Items 1 to 12 of 20 total</p>
                                                        <div class="pages">
                                                            <ol>
                                                                <li class="current">1</li>
                                                                <li><a href="#">2</a>
                                                                </li>
                                                                <li>
                                                                    <a class="next i-next" href="#" title="Next"> <img src="{{asset('public/frontend/images/pager_arrow_right.gif')}}" alt="Next" class="v-middle" /> </a>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div><!-- /.pager -->
                                                    <div class="sorter">
                                                        <p class="view-mode">
                                                            <label>View as:</label> <strong title="Grid" class="grid">Grid</strong> <a href="category-one-column-list.html" title="List" class="list">List</a>
                                                        </p>
                                                        <div class="sort-by toolbar-switch">
                                                            <div class="toolbar-title">
                                                                <label>Sort By</label>
                                                                <select class="sortby" name="sortby">
                                                                    <option value="position" selected="selected"> Position</option>
                                                                    <option value="name"> Name</option>
                                                                    <option value="price"> Price</option>
                                                                </select>
                                                            </div>
                                                            <a href="#" title="Set Descending Direction"><img src="{{asset('public/frontend/images/i_asc_arrow.png')}}" alt="Set Descending Direction" class="v-middle" />
                                                            </a>
                                                        </div>
                                                        <div class="limiter toolbar-switch">
                                                            <div class="toolbar-title">
                                                                <label>Show</label>
                                                                <select class="toolbar-show">
                                                                    <option value="12" selected="selected"> 12</option>
                                                                    <option value="24"> 24</option>
                                                                    <option value="36"> 36</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.sorter -->
                                                </div>
                                            </div><!-- /.toolbar-top -->
                                            <div id="em-grid-mode">
                                                <ul class="emcatalog-grid-mode products-grid emcatalog-disable-hover-below-mobile">
                                                    <!-- <li class="item first">
                                                        <div class="product-item">
                                                            <div class="product-shop-top">
                                                                <a href="product-detail.html" title="WIASSI Version 1" class="product-image"> <img class="em-img-lazy img-responsive em-alt-hover" src="{{asset('public/frontend/images/product/220x220/5_1.jpg')}}" width="220" height="220" alt="WIASSI Version 1" /> <img id="product-collection-image-206" class="em-img-lazy img-responsive em-alt-org" src="{{asset('public/frontend/images/product/220x220/4_1.jpg')}}" width="220" height="220" alt="WIASSI Version 1" /><span class="bkg-hover"></span> </a>
                                                                <div class="bottom">
                                                                    <div class="em-btn-addto text-center ">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="206"><span><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                            <li><a href="#206" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                            </li>
                                                                            <li><a href="#206" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="quickshop-link-container"> <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-shop">
                                                                <div class="f-fix">
                                                                    <h2 class="product-name text-center  "><a href="product-detail.html" title="WIASSI Version 1"> WIASSI Version 1 </a></h2>
                                                                    <div class=" text-center">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:%"></div>
                                                                            </div> <span class="amount"><a href="#" onclick="206">(0)</a></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center ">
                                                                        <div class="price-box"> <span class="regular-price" id="product-price-206"> <span class="price"  content="750">$750.00</span> </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="desc std text-center em-element-display-hover"> Morbi at ex at arcu posuere luctus. Maecenas eu nu...</div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-item -->
                                                    </li> -->
                                                    @foreach($product_cate as $key => $product_cate)
                                                    <li class="item">
                                                        <div class="product-item">
                                                            <div class="product-shop-top">
                                                                <a href="product-detail.html" title="{{$product_cate->ten}} " class="product-image"> <img class="em-img-lazy img-responsive em-alt-hover" src="{{asset($product_cate->anhdaidien)}}" width="220" height="220"/> 
                                                                <img id="product-collection-image-217" class="em-img-lazy img-responsive em-alt-org" src="{{asset($product_cate->anhdaidien)}}" width="220" height="220" alt="WIASSI Version 12" /><span class="bkg-hover"></span> </a>
                                                                <div class="bottom">
                                                                    <div class="em-btn-addto text-center ">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="217"><span><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                            <li><a href="#217" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                            </li>
                                                                            <li><a href="#217" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="quickshop-link-container"> <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-shop">
                                                                <div class="f-fix">
                                                                    <h2 class="product-name text-center  "><a href="product-detail.html" title="{{$product_cate->ten}}"> {{$product_cate->ten}} </a></h2>
                                                                    <div class=" text-center">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:%"></div>
                                                                            </div> <span class="amount"><a href="#" onclick="217">(0)</a></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center ">
                                                                        <div class="price-box"> <span class="regular-price" id="product-price-217"> <span class="price"  content="1200">{{$product_cate->gia}}</span> </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="desc std text-center em-element-display-hover"></div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-item -->
                                                    </li>
                                                    @endforeach
                                                
                                                </ul>
                                            </div><!-- /.em-grid-mode -->
                                            
                                            <div class="toolbar-bottom em-box-03">
                                                <div class="toolbar">
                                                    <div class="pager">
                                                        <p class="amount"> Items 1 to 12 of 20 total</p>
                                                        <div class="pages">
                                                            <ol>
                                                                <li class="current">1</li>
                                                                <li><a href="#">2</a>
                                                                </li>
                                                                <li>
                                                                    <a class="next i-next" href="#" title="Next"> <img src="{{asset('public/frontend/images/pager_arrow_right.gif')}}" alt="Next" class="v-middle" /> </a>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div><!-- /.pager -->
                                                    <div class="sorter">
                                                        <p class="view-mode">
                                                            <label>View as:</label> <strong title="Grid" class="grid">Grid</strong> <a href="category-one-column-list.html" title="List" class="list">List</a>
                                                        </p>
                                                        <div class="sort-by toolbar-switch">
                                                            <div class="toolbar-title">
                                                                <label>Sort By</label>
                                                                <select class="sortby" name="sortby">
                                                                    <option value="position" selected="selected"> Position</option>
                                                                    <option value="name"> Name</option>
                                                                    <option value="price"> Price</option>
                                                                </select>
                                                            </div>
                                                            <a href="#" title="Set Descending Direction"><img src="{{asset('public/frontend/images/i_asc_arrow.png')}}" alt="Set Descending Direction" class="v-middle" />
                                                            </a>
                                                        </div>
                                                        <div class="limiter toolbar-switch">
                                                            <div class="toolbar-title">
                                                                <label>Show</label>
                                                                <select class="toolbar-show">
                                                                    <option value="12" selected="selected"> 12</option>
                                                                    <option value="24"> 24</option>
                                                                    <option value="36"> 36</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.sorter -->
                                                </div>
                                            </div><!-- /.toolbar-bottom -->
                                        </div><!-- /.category-products -->
                                    </div>
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main -->
@endsection
@section('js')
<!-- Category Js -->
<script type="text/javascript" src="{{asset('public/frontend/js/em_category.js')}}"></script>
<!-- Slider Js -->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
<!-- Custom Js -->.
   <script type="text/javascript">
            (function($) {
                if (typeof EM == 'undefined') EM = {};
                if (typeof EM.SETTING == 'undefined') EM.SETTING = {};

                function setColumnCountGridMode() {
                    var wWin = $(window).width();
                    if (EM.SETTING.DISABLE_RESPONSIVE == 1) {
                        var sDesktop = 'emcatalog-desktop-';
                        var sDesktopSmall = 'emcatalog-desktop-small-';
                        var sTablet = 'emcatalog-tablet-';
                        var sMobile = 'emcatalog-mobile-';
                        var sGrid = $('#em-grid-mode');
                        if (wWin > 1200) {
                            sGrid.removeClass().addClass(sDesktop + '5');
                        } else {
                            if (wWin <= 1200 && wWin > 768) {
                                sGrid.removeClass().addClass(sDesktopSmall + '4');
                            } else {
                                if (wWin <= 768 && wWin > 480) {
                                    sGrid.removeClass().addClass(sTablet + '3');
                                } else {
                                    sGrid.removeClass().addClass(sMobile + '2');
                                }
                            }
                        }
                    } else {
                        var sDesktop = 'emcatalog-desktop-';
                        var sGrid = $('#em-grid-mode');
                        sGrid.removeClass().addClass(sDesktop + '5');
                    }
                };
                //Ready Function
                $(document).ready(function() {
                    setColumnCountGridMode();
                });
                $(window).resize($.throttle(300, function() {
                    setColumnCountGridMode();
                }));
            })(jQuery);
        </script>
@endsection