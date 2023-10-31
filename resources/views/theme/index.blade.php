
 @extends("theme.master")
 @section("content")
      <!-- banner_begin -->
      <section class="main_banner">
        <div class="sec-scroll-div wow bounceInRight Right">
          <a href="#sectiononee">01</a>
          <a href="#sectionone">02</a>
          <a href="#sectiontwo">03</a>
          <a href="#sectionthree">04</a>
          <a href="#sectionfour">05</a>
          <a href="#sectionfive">06</a>
        </div>
        <div class="banner-bg">
          <img src="{{ asset('theme/assets/images/banner_img.jpg') }}" alt="" />
        </div>
        <div class="container">
          <div class="row">
            <div class="banner_content wow bounceInLeft center" data-wow-delay="1s">
              <h4>A life full of</h4>
              <h1>Design Secrets</h1>
              <p>
                Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                vulputate libero et velit interdum.
              </p>
              <a href="" class="theme_btn">Shop Now</a>
            </div>
            <div class="col-lg-4 wow bounceInUp center" data-wow-delay="1.3s">
              <div class="banner_cta no_bod">
                <h3>lorem ipsum dolor</h3>
                <p>
                  Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                  vulputate libero et velit interdum.
                </p>
              </div>
            </div>
            <div class="col-lg-4 wow bounceInUp center" data-wow-delay="1.5s">
              <div class="banner_cta">
                <h3>lorem ipsum dolor</h3>
                <p>
                  Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                  vulputate libero et velit interdum.
                </p>
              </div>
            </div>
            <div class="col-lg-4 wow bounceInUp center" data-wow-delay="1.8s">
              <div class="banner_cta">
                <h3>lorem ipsum dolor</h3>
                <p>
                  Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                  vulputate libero et velit interdum.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner_end-->

      <!-- about section begin -->
      <section class="about-sec" id="sectiononee">
        <div class="position_title_sec">About Us</div>
        <div class="container">
          <div class="about_side_img">
            <img src="{{ asset('theme/assets/images/about-img-side.png') }}" alt="">
          </div>
          <div class="row gx-5 justify-content-center">
            <div class="col-lg-5 wow bounceInLeft" data-wow-delay="1s">
              <div class="about-img">
                <img
                  src="{{ asset('theme/assets/images/about-img.png') }}"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-txt wow bounceInRight" data-wow-delay="1.5s">
                <h2>
                  About Us<br />
                  Your heading
                </h2>
                <h4>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore.
                </h4>
                <p>
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aut e irure dolor in reprehenderit in
                  voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequarehenderit in
                  voluptate
                </p>
                <div class="point-about">
                  <ul>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>vulputate libero et velit</li>
                  </ul>
                  <ul>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>vulputate libero et velit</li>
                  </ul>
                </div>
                <div class="point-about">
                  <ul>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>vulputate libero et velit</li>
                  </ul>
                  <ul>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>Forem ipsum dolor sit amet,</li>
                    <li>vulputate libero et velit</li>
                  </ul>
                </div>
                  <a href="" class="theme-btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="{{ asset('theme/assets/images/about-bg.png') }}" alt="" class="about-bg" />
      </section>
      <!-- about section end -->

      <!-- service_section_begin -->
      <section class="service-sec" id="sectionone">
        <div class="container">
          <div class="sec_title">
            <h2>Our Services</h2>
          </div>
          <div class="row gx-5 service_slider wow bounceInUp" data-wow-delay="1.3s">
            <div class="col-lg-3">
              <div class="service_box">
                <div class="service_img"><img src="{{ asset('theme/assets/images/serv-01.jpg') }}" alt=""></div>
                <div class="service_title">
                  <h2>-OEM Interiors</h2>
                  <p>Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et .</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_box">
                <div class="service_img"><img src="{{ asset('theme/assets/images/serv-02.jpg') }}" alt=""></div>
                <div class="service_title">
                  <h2>-OEM Interiors</h2>
                  <p>Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et .</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_box">
                <div class="service_img"><img src="{{ asset('theme/assets/images/serv-03.jpg') }}" alt=""></div>
                <div class="service_title">
                  <h2>-OEM Interiors</h2>
                  <p>Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et .</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_box">
                <div class="service_img"><img src="{{ asset('theme/assets/images/serv-04.jpg') }}" alt=""></div>
                <div class="service_title">
                  <h2>-OEM Interiors</h2>
                  <p>Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et .</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service_box">
                <div class="service_img"><img src="{{ asset('theme/assets/images/serv-01.jpg') }}" alt=""></div>
                <div class="service_title">
                  <h2>-OEM Interiors</h2>
                  <p>Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et .</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- service_section_end -->



      <!-- feature_products-section-begin -->
      <section class="feature_product_sec" id="sectiontwo">
        <div class="container">
          <div class="sec_title">
            <h2>Feature Products</h2>
          </div>
          <div class="row feature_product_slider wow bounceInDown" data-wow-delay="1.5s">
            <div class="col-lg-3">
              <div class="feature_box">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro01.jpg') }}" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box feature_box2">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro02.jpg') }}" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro03.jpg') }}" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box feature_box2">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro04.jpg') }}" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro03.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- feature_products-section-end -->



      <!-- our_works_section_begin -->
      <section class="our_works_sec" id="sectionthree">
        <div class="galler_head">
          <h2>gallery</h2>
        </div>
        <div class="container">
          <div class="sec_title">
            <h2>our Works</h2>
          </div>
          <div class="row">
            <div class="col-lg-7 wow bounceInLeft" data-wow-delay="0.5s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work01.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-5  wow bounceInRight" data-wow-delay="1s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work02.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-4  wow bounceInLeft" data-wow-delay="1.2s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work03.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-4  wow bounceInDown" data-wow-delay="1.3s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work05.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-4  wow bounceInRight" data-wow-delay="1.5s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work06.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-4  wow bounceInLeft" data-wow-delay="1.6s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work07.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 wow bounceInDown" data-wow-delay="1.7s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work08.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-lg-2  wow bounceInRight" data-wow-delay="1.8s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work01.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- our_works_section_end -->


      <!-- get_in_touch_section_begin -->
      <section class="get_in_touch" id="sectionfour">
        <div class="container">
          <div class="row gx-5">
            <div class="col-lg-6  wow bounceInLeft" data-wow-delay="1s">
              <div class="get_img">
                <img src="{{ asset('theme/assets/images/get_touch_img.png') }}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-lg-6  wow bounceInRight" data-wow-delay="1.5s">
              <div class="get_form">
                <h2>Get In Touch</h2>
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="Name" placeholder="First Name">
                    </div>
                    <div class="col-lg-6">
                      <input type="name" placeholder="Last Name">
                    </div>
                    <div class="col-lg-6">
                      <input type="email" placeholder="Email Address">
                    </div>
                    <div class="col-lg-6">
                      <input type="phone" placeholder="PhoneNumber">
                    </div>
                    <div class="col-lg-12">
                      <textarea placeholder="Messege"></textarea>
                      <a href="#" class="theme-btn">Submit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- get_in_touch_section_end -->
@endsection
  
