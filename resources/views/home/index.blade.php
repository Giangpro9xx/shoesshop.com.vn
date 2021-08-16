@extends('layout.layout')
@section('title','Trang chủ')
@section('content')
<div class="layout_padding collection_section">
    <div class="container">
        <h1 class="new_text"><strong>New  Collection</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <button class="new_bt">New</button>
                        <div class="shoes-img"><img src="{{asset('public/home/img/shoes-img1.png')}}"></div>
                        <p class="sport_text">Men Sports</p>
                        <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                    <button class="seemore_bt">See More</button>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img src={{asset('public/home/img/shoes-img2.png')}}></div>
                        <p class="sport_text">Men Sports</p>
                        <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection_section">
    <div class="container">
        <h1 class="new_text"><strong>Racing Boots</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<div class="collectipn_section_3 layuot_padding">
    <div class="container">
        <div class="racing_shoes">
            <div class="row">
                <div class="col-md-8">
                    <div class="shoes-img3"><img src="{{asset('public/home/img/shoes-img3.png')}}"></div>
                </div>
                <div class="col-md-4">
                    <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
                    <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                    <button class="seemore">See More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<!-- new collection section end -->
<!-- New Arrivals section start -->
<div class="layout_padding gallery_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text">Best Shoes </p>
                    <div class="shoes_icon"><img src="{{asset('public/home/img/shoes-img4.png')}}"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">60</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text">Best Shoes </p>
                    <div class="shoes_icon"><img src="{{asset('public/home/img/shoes-img5.png')}}"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">400</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text">Best Shoes </p>
                    <div class="shoes_icon"><img src="{{asset('public/home/img/shoes-img6.png')}}"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">50</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text">Sports Shoes</p>
                    <div class="shoes_icon"><img src="{{asset('public/home/img/shoes-img7.png')}}"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">70</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text">Sports Shoes</p>
                    <div class="shoes_icon"><img src="{{asset('public/home/img/shoes-img8.png')}}"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">100</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="best_shoes">
                    <p class="best_text">Sports Shoes</p>
                    <div class="shoes_icon"><img src="{{asset('public/home/img/shoes-img9.png')}}"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('public/home/img/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">90</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buy_now_bt">
            <button class="buy_text">Buy Now</button>
        </div>
    </div>
</div>
   <!-- New Arrivals section end -->
   <!-- contact section start -->
@endsection
