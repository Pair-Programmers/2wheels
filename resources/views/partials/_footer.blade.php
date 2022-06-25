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
            <a href="{{route('index')}}">
                <svg width="40px" version="1.1" id="Layer_1" xmlns="C:\xampp\htdocs\bike\public\assets\img\logo" xmlns:xlink="C:\xampp\htdocs\bike\public\assets\img\logo" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M511.981,118.509c-0.135-2.956-1.892-5.726-4.565-7.04l-159.24-79.62c-3.776-1.887-8.363-0.64-10.664,2.898 L229.916,200.282l-55.413-85.891c-0.796-1.235-1.945-2.264-3.259-2.922l-159.24-79.62C6.582,29.138,0,33.218,0,39.268v79.621 c0,4.581,3.712,8.294,8.294,8.294c4.581,0,8.294-3.712,8.294-.294V52.687l142.652,71.326v335.32L16.587,388.008V154.277	c0-4.581-3.712-8.294-8.294-8.294c-4.581,0-8.294,3.712-8.294,8.294v238.857c0,3.142,1.775,6.013,4.585,7.418l159.24,79.62	c5.427,2.714,12.003-1.375,12.003-7.418V318.087l324.17,162.085c5.427,2.714,12.003-1.375,12.003-7.418V118.888	C512,118.76,511.987,118.636,511.981,118.509z M175.827,299.541v-152.5l145.239,225.12L175.827,299.541z M495.413,459.335
          l-139.34-69.671l108.576-186.993c2.299-3.961,0.952-9.037-3.009-11.337c-3.96-2.298-9.036-0.953-11.337,3.009L344.094,377.258
          L239.77,215.555L347.383,49.998l144.717,72.359l-26.387,45.446c-2.299,3.961-0.952,9.037,3.009,11.337	c3.958,2.297,9.035,0.953,11.337-3.009l15.354-26.443V459.335z" fill="#000" />
                        </g>
                    </g>
                </svg>
                <span style="letter-spacing:3px; font-size: 25px" class="ml-3 font-weight-bold"><span style="color:#BCBCBC; ">2</span>Wheels</span>
            </a>
          </div>
          <div class="footer-about">
            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest ulity of motorcycle soucan sell here your motorcycle it quo </p>
            <div class="footer-support">
              <h5>FOR SUPPORT</h5>
              <span> 0312-4334928</span>
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
              <li><a href="{{route('currentfuelprice')}}">Fuel Price</a></li>
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
                <p>Formanities society, M block, House no. 193, Near Lahore Leads University</p>
              </div>
            </div>
            <div class="food-address">
              <div class="food-info-title">
                <span>Phone</span>
              </div>
              <div class="food-info-content">
                <p>+923075143141</p>
                <p>+923124334928</p>
              </div>
            </div>
            <div class="food-address">
              <div class="food-info-title">
                <span>Web</span>
              </div>
              <div class="food-info-content">
                <a href="#">info@twowheelss.com</a>
                <a href="#">www.twowheelss.com</a>
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
      {{-- <div class="col-md-4 col-12">
        <div class="footer-payment-method">
          <a href="#"><img alt="" src="{{asset('website')}}/assets/img/icon-img/payment.png"></a>
        </div>
      </div> --}}
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
