
@extends("theme.master")
 @section("content")
      <!-- Banner section begin -->
      <section class="banner_img">
        <div class="innerban-img">
          <img
            src="{{ asset('theme/assets/images/service_bg.jpg')}}"
            alt="image"class="img-fluid"
          />
          <div class="inner-bantxt">
            <h2>Contact Us</h2>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="{{ url('/contact-us')}}">Contact us</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Banner section end -->

      <!-- contact detail section begin -->
      <section class="contact-detail">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="contct-box">
                <div class="icon-box">
                  <span></span>
                  <img
                    src="{{ asset('theme/assets/images/contct-icon-01.png')}}"
                    alt="image"
                    class="img-fluid"
                  />
                </div>
                <p>Free Reservations</p>
                <a href="tel:+35 (70) 8796 054;">+00 (00) 0000 000</a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contct-box">
                <div class="icon-box">
                  <span></span>
                  <img
                    src="{{ asset('theme/assets/images/contct-icon-02.png')}}"
                    alt="image"
                    class="img-fluid"
                  />
                </div>
                <p>Operating Hours</p>
                <a href="">Mon - Fri 9.30am - 8pm</a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contct-box">
                <div class="icon-box">
                  <span></span>
                  <img
                    src="{{ asset('theme/assets/images/contct-icon-03.png')}}"
                    alt="image"
                    class="img-fluid"
                  />
                </div>
                <p>Reach us by email</p>
                <a href="mailto:Loremipsum@gmail;">Loremipsum@gmail</a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contct-box">
                <div class="icon-box">
                  <span></span>
                  <img
                    src="{{ asset('theme/assets/images/contct-icon-04.png')}}"
                    alt="image"
                    class="img-fluid"
                  />
                </div>
                <p>Office Address</p>
                <a href="">Demo city</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact detail section end -->

      <!-- Location section begin -->
      <section class="map-location">
        <div class="container-fluid pl-0">
          <div class="row">
            <div class="col-lg-6 pl-0 pr-0">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1676496195262!5m2!1sen!2s"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <div class="col-lg-6 align-items-center justify-content-center">
              <div class="contact-form-detail">
                <h2 class="title">Send a Message</h2>
                <input type="name" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="phone" placeholder="Number" />
                <textarea placeholder="your Massege"></textarea>
                <a href="#">Send a Massege</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Location section end -->

    @endsection
