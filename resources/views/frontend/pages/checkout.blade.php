@extends('frontend.layout.master')
@section('content')
 <div class="wrapper-breadcrums">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-24">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li class="home"> <a href="{{asset('/')}}" title="Go to Home Page"><span >Trang Chủ</span></a> <span class="separator">/ </span>
                                        </li>
                                        <li class="cms_page"> <strong>Thanh Toán</strong>
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
                            
                            <div class="em-main-container em-col2-left-layout">
                                <div class="row">
                                    <div class="col-sm-18 col-sm-push-6 em-col-main">
                                        <div class="em-wrapper-area03"></div>
                                        <div class="page-title">
                                            <h1>Thanh Toán</h1>
                                        </div>
                                        <ol class="opc" id="checkoutSteps">
                                            <li id="opc-billing" class="section allow">
                                                <div class="em-box-02 step-title" data-toggle="collapse" data-target="#checkout-step-billing">
                                                    <div class="title-box"> <span class="number">1</span>
                                                        <h2>Thông Tin Hóa Đơn</h2> <a href="#">Edit</a>
                                                    </div>
                                                </div>
                                                <div id="checkout-step-billing" class="step a-item collapse in">
                                                    <form id="co-billing-form">
                                                        <fieldset>
                                                            <ul class="form-list">
                                                                <li id="billing-new-address-form">
                                                                    <fieldset>
                                                                        <input type="hidden" name="billing[address_id]" value="215" id="billing:address_id" />
                                                                        <ul>
                                                                            <li class="fields">
                                                                                <div class="customer-name-middlename">
                                                                                    <div class="field name-firstname">
                                                                                        <label for="billing:firstname" class="required"><em>*</em>Tên Khách Hàng</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" id="" name="" value="" title="First Name" maxlength="255" class="input-text required-entry" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="field name-middlename">
                                                                                        <label for="billing:middlename">Địa chỉ E-mail</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" id="" name="" value="" title="Email" class="input-text " />
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                                </div>
                                                                            </li>
                                                                        	 <li class="fields">
                                                                                <div class="field">
                                                                                    <label for="billing:telephone" class="required"><em>*</em>Điện Thoại</label>
                                                                                    <div class="input-box">
                                                                                        <input type="text" name="" value="" title="Telephone" class="input-text  required-entry" id="billing:telephone" />
                                                                                    </div>
                                                                                </div>
                                                      							<div class="field">
                                                                                    <label for="billing:telephone" class="required"><em>*</em>Ngày nhận hàng</label>
                                                                                    <div class="input-box">
                                                                                        <input type="date" value="{{date('Y-m-d')}}" title="Telephone" class="input-text  required-entry" id="billing:telephone" />
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="wide">
                                                                                <label for="billing:street1" class="required"><em>*</em>Địa chỉ nhận hàng</label>
                                                                                <div class="input-box">
                                                                                    <input type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="" class="input-text  required-entry" />
                                                                                </div>
                                                                            </li>
                                                                    
                                                                        </ul>
                                                                        <div id="window-overlay" class="window-overlay" style="display:none;"></div>
                                                                        <div id="remember-me-popup" class="remember-me-popup" style="display:none;">
                                                                            <div class="remember-me-popup-head">
                                                                                <h3>What's this?</h3> <a href="#" class="remember-me-popup-close" title="Close">Close</a>
                                                                            </div>
                                                                            <div class="remember-me-popup-body">
                                                                                <p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
                                                                                <div class="remember-me-popup-close-button a-right"> <a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                              
                                                            </ul>
                                                            <div class="buttons-set" id="billing-buttons-container">
                                                                <p class="required">* Các trường bắt buộc</p>
                                                                <button type="button" title="Continue" class="button"><span><span>Continue</span></span>
                                                                </button> <span class="please-wait" id="billing-please-wait" style="display:none;"> <img src="images/opc-ajax-loader.html" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step... </span>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div><!-- /#checkout-step-billing -->
                                            </li><!-- /#opc-billing -->
                                            <li id="opc-shipping" class="section">
                                                <div class="em-box-02 step-title collapsed" data-toggle="collapse" data-target="#checkout-step-shipping">
                                                    <div class="title-box"> <span class="number">2</span>
                                                        <h2>Thông tin mua hàng</h2> <a href="#">Edit</a>
                                                    </div>
                                                </div>
                                                <div id="checkout-step-shipping" class="step a-item collapse">

                                                    
                                                </div><!-- /#checkout-step-shipping -->
                                            </li><!-- /#opc-shipping -->
                                           
                                        </ol>
                                    </div>
                                    <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                        <div class="em-wrapper-area02"></div>
                                        <div id="checkout-progress-wrapper">
                                            <div class="block block-progress opc-block-progress em-line-01">
                                                <div class="em-block-title block-title"> <strong><span>Các Bước Thanh Toán</span></strong>
                                                </div>
                                                <div class="block-content">
                                                    <dl>
                                                        <div id="billing-progress-opcheckout"><dt> Địa Chỉ Thanh Toán</dt>
                                                        </div>
                                                        <div id="shipping-progress-opcheckout"><dt> Địa Chỉ Nhận Thuốc</dt>
                                                        </div>
                                                        <div id="shipping_method-progress-opcheckout"><dt> Cách Thức Giao Hàng</dt>
                                                        </div>
                                                        <div id="payment-progress-opcheckout"><dt> Hình Thức Thanh Toán</dt>
                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.em-sidebar -->
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main -->
@endsection