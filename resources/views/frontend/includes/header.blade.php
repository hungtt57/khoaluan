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
                        <form method="get" action="{{asset('tim-kiem')}}">
                            <div class="form-search no_cate_search">
                                <div class="text-search">
                                    <input id="search-mobile" type="text" name="search" value="" class="input-text" maxlength="128" />
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
                                <a id="em-amount-cart-link" title="Shopping Cart" class="em-amount-topcart" href="{{asset('/gio-hang')}}"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty">0</span> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.em-top-cart -->
                <div id="em-mheader-wrapper-menu"> <span class="visible-xs fa fa-bars" id="em-mheader-menu-icon"></span>
                    <div id="em-mheader-menu-content" style="display: none;">
                        <div class="em-wrapper-top">
                           
                          
                        </div><!-- /.em-wrapper-top -->
                        <div class="row mobile-main-menu toggle-menu">
                            <div class="col-sm-24">
                                <div class="em-top-menu">
                                    <div class="em-menu-mobile">
                                        <div class="megamenu-wrapper wrapper-7_5505">
                                            <div class="em_nav" id="toogle_menu_7_5505">
                                                <ul class="hnav em_menu_mobile">
                                                    <li class="menu-item-link menu-item-depth-0 fa fa-home ">
                                                        <a class="em-menu-link" href="{{asset('/')}}"> <span> Trang chủ </span> </a>
                                                       
                                                    </li><!-- /.menu-item-link -->
                                                    <li class="menu-item-link menu-item-depth-0 dd-menu-link fa fa-bars menu-item-parent">
                                                        <a class="em-menu-link" href="#"> <span> Danh mục </span> </a>
                                                        <ul class="menu-container">
                                                            <li class="menu-item-text menu-item-depth-1  ">
                                                                <ul class="em-catalog-navigation vertical">
                                                                 <?php $categories = category_menu();?>
                                                               @foreach($categories as $key => $value)
                                                                    <li class="level0 nav-1 ">
                                                                        <a href="{{asset('/loai-san-pham/'.$value->alias)}}"> <span>{{$value->ten}}</span> </a>
                                                                      
                                                                    </li><!-- /.nav-1 -->
                                                                   
                                                                   @endforeach
                                                                </ul><!-- /.em-catalog-navigation -->
                                                            </li>
                                                        </ul>
                                                    </li><!-- /.menu-item-link -->
                                                    <li class="menu-item-link menu-item-depth-0 fa fa-file ">
                                                        <a class="em-menu-link" href="{{asset('/tin-tuc')}}"> <span> Tin tức</span> </a>
                                                        
                                                    </li><!-- /.menu-item-link -->
                                                     <li class="menu-item-link menu-item-depth-0 fa fa-file ">
                                                        <a class="em-menu-link" href="{{asset('/gioi-thieu')}}"> <span> Giới thiệu</span> </a>
                                                        
                                                    </li><!-- /.menu-item-link -->
                                                     <li class="menu-item-link menu-item-depth-0 fa fa-file ">
                                                        <a class="em-menu-link" href="{{asset('/lien-he')}}"> <span>Liên hệ</span> </a>
                                                        
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
                        <div class="f-left col-sm-12">
                            <marquee  style="color: #ec6a54;margin-top: 15px;">Sự tin tưởng của khách hàng là thành công của chúng tôi.Nơi mua thuốc của mọi gia đình</marquee>
                        </div><!-- /.f-left -->
                        <div class="">
                            <div class="em-search f-right">
                                <div class="em-top-search">
                                    <div class="em-wrapper-js-search em-search-style01">
                                        <div class="em-wrapper-search em-no-category-search"> <a class="em-search-icon" title="Search" href="javascript:void(0);"><span>Search</span></a>
                                            <div class="em-container-js-search" style="display: none;">
                                                <form id="search_mini_form" method="get" action="{{asset('tim-kiem')}}">
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
                        <div class="em-logo f-left"><a href="{{asset('/')}}"  class="logo"><strong>Chemist's</strong><img class="retina-img" src="{{asset('public/frontend/images/logo_small.png')}}" alt="Fashion Commerce" /></a>
                        </div>
                        <div class="em-logo-sticky f-left">
                            <a href="{{asset('/')}}" title="Fashion Commerce" class="logo"><img src="{{asset('public/frontend/images/logo_small.png')}}" alt="Fashion Commerce" />
                            </a>
                        </div>
                        <div class="em-search em-search-sticky f-right">
                            <div class="em-top-search">
                                <div class="em-wrapper-js-search em-search-style01">
                                    <div class="em-wrapper-search"> <a class="em-search-icon" title="Search" href="javascript:void(0);"><span>Tìm Kiếm</span></a>
                                        <div class="em-container-js-search" style="display: none;">
                                            <form id="search_mini_form" method="get" action="{{asset('tim-kiem')}}">
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
                                        <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="{{asset('/gio-hang')}}"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty"><?php echo count($giohang);?></span> </a>
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
                                        <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="{{asset('/gio-hang')}}"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty">0</span> </a>
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
                                                                <a href="{{asset('/loai-san-pham/'.$value->alias)}}">{{$value->ten}}</a>
                                                            </li><!-- /.menu-item-vbox -->
                                                            @endforeach
                                                        </ul><!-- /.menu-container -->
                                                    </li>
                                                </ul><!-- /.menu-container -->
                                            </li><!-- /.menu-item-link -->

                                            <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                <a class="em-menu-link" href="{{asset('/tin-tuc')}}"> <span> Tin Tức </span> </a>

                                            </li><!-- /.menu-item-link -->
                                            <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                <a class="em-menu-link" href="{{asset('/gioi-thieu')}}"> <span> Giới Thiệu </span> </a>

                                            </li><!-- /.menu-item-link -->
                                            <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                <a class="em-menu-link" href="{{asset('/lien-he')}}"> <span> Liên Hệ </span> </a>

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