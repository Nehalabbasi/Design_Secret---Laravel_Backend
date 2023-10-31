@extends("theme.master")
@section("content")

      <!-- Banner section begin -->
      <section class="banner_img">
        <div class="innerban-img">
          <img
            src="{{ asset('theme/assets/images/service_bg.jpg')}}"
            alt="image"
            class="img-fluid"
          />
          <div class="inner-bantxt">
            <h2>Product</h2>
            <ul>
              <li><a href="{{ url('/')}}">Home</a></li>
              <li><a href="{{ url('/product')}}">Product</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Banner section end -->

      <!-- feature_products-section-begin -->
      <section class="feature_product_sec" id="sectiontwo">
        <div class="container">
          <div class="sec_title">
            <h2>Feature Products</h2>
          </div>
          <div
            class="row feature_product_slider wow bounceInDown"
            data-wow-delay="1.5s"
          >
            <div class="col-lg-3">
              <div class="feature_box">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro01.jpg')}}" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box feature_box2">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro02.jpg')}}" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro03.jpg')}}" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box feature_box2">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro04.jpg')}}" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="feature_box">
                <div class="feature_img">
                  <img src="{{ asset('theme/assets/images/fearture_pro03.jpg')}}" alt="" />
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
                <img src="{{ asset('theme/assets/images/our_work01.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-5 wow bounceInRight" data-wow-delay="1s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work02.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-4 wow bounceInLeft" data-wow-delay="1.2s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work03.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-4 wow bounceInDown" data-wow-delay="1.3s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work05.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-4 wow bounceInRight" data-wow-delay="1.5s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work06.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-4 wow bounceInLeft" data-wow-delay="1.6s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work07.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-6 wow bounceInDown" data-wow-delay="1.7s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work08.jpg')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-2 wow bounceInRight" data-wow-delay="1.8s">
              <div class="our_works">
                <img src="{{ asset('theme/assets/images/our_work01.jpg')}}" alt="" />
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
            <div class="col-lg-6 wow bounceInLeft" data-wow-delay="1s">
              <div class="get_img">
                <img
                  src="{{ asset('theme/assets/images/get_touch_img.png"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-6 wow bounceInRight" data-wow-delay="1.5s">
              <div class="get_form">
                <h2>Get In Touch</h2>
                <div class="row">
                  <div class="col-lg-6">
                    <input type="Name" placeholder="First Name" />
                  </div>
                  <div class="col-lg-6">
                    <input type="name" placeholder="Last Name" />
                  </div>
                  <div class="col-lg-6">
                    <input type="email" placeholder="Email Address" />
                  </div>
                  <div class="col-lg-6">
                    <input type="phone" placeholder="PhoneNumber" />
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