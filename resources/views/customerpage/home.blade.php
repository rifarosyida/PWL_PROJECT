@extends('customerpage.partials.content' , ['title' => 'Dz Fashion - Homepage'])

    @section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>DinaZalfa</h4>
                            <h6>THE BEST FASHION</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{url('/customer/produk/ld')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{asset('frontend/asset/images/slide-1.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{asset('frontend/asset/images/slide-2.png')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{asset('frontend/asset/images/slide-3.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave a Stylish Memory For You</h2>
                        </div>
                        <p>DZ or Dina Zalfa Fashion eCommerce is a complete eCommerce that provides quality clothes from world-famous brands with up-to-date fashion models.
                        Sell clothes for all genders with all types of clothes. The goods sold in the DZ eCommerce are directly from the brand supplier itself. So, the goods 
                        are guaranteed original and exclusive.</p>
                        <br>
                        <p>The example of the clothes that we sell is:</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('frontend/asset/images/about-us-1.png')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{asset('frontend/asset/images/about-us-2.png')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{asset('frontend/asset/images/about-us-3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="{{asset('frontend/asset/images/video-bg.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    
    @endsection