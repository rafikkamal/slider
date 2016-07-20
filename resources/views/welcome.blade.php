<!DOCTYPE html>
@extends('layouts.app')
<!--.nav > li.dropdown.open { position: static; }
.nav > li.dropdown.open .dropdown-menu {display:block; width: 100%; left:0; right:0; }-->

@section('slider')
<!--<div class="row">
</div>-->
<div class="container-fluid my-product-slider-row">
    <div class="my-product-slider my-product-slider-header-container">
        <div class="row my-product-slider-header-container">
            <div class="col-sm-6 my-product-slider-title">
                <span>Product Promotion Slider</span>
            </div>
            <div class="col-sm-6 my-product-slider-nav">
                <button class="btn btn-primary" id="my-product-slider-nav-next" onclick="myProductSliderNav(this.id)">Next</button>
                <button class="btn btn-primary" id="my-product-slider-nav-prev" onclick="myProductSliderNav(this.id)">Prev</button>
            </div>
        </div>
        <div class="row my-product-slider-main-container">
            <div class="col-lg-4 col-md-4 col-sm-4 my-product-slider-container" id="my-product-slider-container-1">
                <!--item container 1-->
                <div class="row my-product-slider-container-main" id="my-product-slider-container-1-main">
                    <!--item 1-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_1.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony LED TV</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>249550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <!--item 2-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_6.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <!-- item 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_4.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>RX1R Professional Compact Camera with 35 mm Sensor</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_2.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!--item container 2-->
            <div class="col-lg-4 col-md-4 col-sm-4 my-product-slider-container" id="my-product-slider-container-2">
                <div class="row my-product-slider-container-main" id="my-product-slider-container-2-main">
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_7.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div><div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_4.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_5.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_5.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!--item container 3-->
            <div class="col-lg-4 col-md-4 col-sm-4 my-product-slider-container" id="my-product-slider-container-3">
                <div class="row my-product-slider-container-main" id="my-product-slider-container-3-main">
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_6.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_7.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_8.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-product-slider-container-item" id="my-product-slider-container-1-item-1">
                        <div class="my-product-slider-container-item-header">
                            <img src="{{asset('img/products/image_9.jpg') }}" alt="banner image" class="product-img">
                        </div>
                        <div class="my-product-slider-container-item-title">
                            <span>Sony Xperia X Dual F5122</span>
                        </div>
                        <div class="my-product-slider-container-item-details">
                            <p>
                                Dimensions	142.7 x 69.4 x 7.9 mm (5.62 x 2.73 x 0.31 in)
                                Weight	153 g (5.40 oz)
                                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                            </p>
                        </div>
                        <div class="my-product-slider-container-item-footer">
                            <div class="my-product-slider-container-item-cart">
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="my-product-slider-container-item-price">
                                <span>49550TK</span>
                            </div>
                            <div class="my-product-slider-container-item-ratings">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-half-o" aria-hidden="true"></i></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection