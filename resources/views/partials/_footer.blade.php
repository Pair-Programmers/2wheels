<div class="newsletter-area">
  <div class="container">
      <div class="newsletter-wrapper-all theme-bg-2">
          <div class="row">
              <div class="col-lg-5 col-12 col-md-12">
                  <div class="newsletter-img bg-img" style="background-image: url({{asset('website')}}/assets/img/banner/newsletter-bg.png)">
                      <img alt="image" src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" style="height:220px;width:295px;">
                  </div>
              </div>
              <div class="col-lg-7 col-12 col-md-12">
                  <div class="newsletter-wrapper text-center">
                      <div class="newsletter-title">
                          <h3>Subscribe our newsletter</h3>
                      </div>
                      <div id="mc_embed_signup" class="subscribe-form">
                          <form action="{{route('newsletter.store')}}" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            @csrf  
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                  <input type="email" value="" name="email" class="email" placeholder="Enter your email here..." required>
                                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                  <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<footer>
  <div class="footer-top pt-210 pb-98 theme-bg">
    <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget mb-30">
          <div class="footer-logo">
            <a href="index.html">
              <img src="{{asset('website')}}/assets/img/logo/logo1.png" alt="" style="height:70px;">
            </a>
          </div>
          <div class="footer-about">
            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest ulity of motorcycle soucan sell here your motorcycle it quo </p>
            <div class="footer-support">
              <h5>FOR SUPPORT</h5>
              <span> +111 222 333 44 (Toll Free)</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget mb-30 pl-60">
          <div class="footer-widget-title">
            <h3>QUICK LINK</h3>
          </div>
          <div class="quick-links">
            <ul>
              <li><a href="aboutUs">About us</a></li>
              <li><a href="{{route('product.index')}}">Buy Now Auto Parts</a></li>
              <li><a href="{{route('used_bike')}}">Used Bikes</a></li>
              <li><a href="{{route('new_bike')}}">New Bikes</a></li>
              <li><a href="currentfuelprice">Fuel Price</a></li>
              <li><a href="{{route('product.create')}}">Sell Your Bike</a></li>
              <li><a href="{{route('contact_us.create')}}">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget mb-30">
          <div class="footer-widget-title">
            <h3>LATEST TWEET</h3>
          </div>
          <div class="food-widget-content pr-30">
            <div class="single-tweet">
              <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 
              10 min ago</p>
            </div>
            <div class="single-tweet">
              <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 
              10 min ago</p>
            </div>
            <div class="single-tweet">
              <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 
              10 min ago</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget mb-30">
          <div class="footer-widget-title">
            <h3>CONTACT INFO</h3>
          </div>
          <div class="food-info-wrapper">
            <div class="food-address">
              <div class="food-info-title">
                <span>Address</span>
              </div>
              <div class="food-info-content">
                <p>276 Jhilli Nogor, 4th folor, Momen Tower, Main Town, Lahore</p>
              </div>
            </div>
            <div class="food-address">
              <div class="food-info-title">
                <span>Phone</span>
              </div>
              <div class="food-info-content">
                <p>+042 12568 369 987</p>
                <p>+042 12568 369 987</p>
              </div>
            </div>
            <div class="food-address">
              <div class="food-info-title">
                <span>Web</span>
              </div>
              <div class="food-info-content">
                <a href="#">info@2wheels.com</a>
                <a href="#">www.2wheels.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom ptb-35 black-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-12">
        <div class="copyright">
          <p>©Copyright, 2018 All Rights Reserved by <a href="#">2Wheels</a></p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="footer-payment-method">
          <a href="#"><img alt="" src="{{asset('website')}}/assets/img/icon-img/payment.png"></a>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>

<script src="{{asset('website')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="{{asset('website')}}/assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="{{asset('website')}}/assets/js/popper.js"></script>
<script src="{{asset('website')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('website')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('website')}}/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('website')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('website')}}/assets/js/waypoints.min.js"></script>

<script src="{{asset('website')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('website')}}/assets/js/plugins.js"></script>
<script src="{{asset('website')}}/assets/js/main.js"></script>