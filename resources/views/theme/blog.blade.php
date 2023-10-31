


@extends("theme.master")
 @section("content")
 <!-- Banner section begin -->
 <section class="banner_img">
  <div class="innerban-img">
    <img src="{{ asset('theme/assets/images/service_bg.jpg')}}" alt='image' class='img-fluid'>
    <div class="inner-bantxt">
      <h2>Blogs</h2>
      <ul>
        <li><a href="{{ url('/')}}">Home</a></li>
        <li><a href="{{ url('/blog')}}">Blogs</a></li>
      </ul>
    </div>
  </div>
</section>
<!-- Banner section end -->


      <section class="blogs_panal">
        <div class="container">
          <div class="row gx-5">
            <div class="col-lg-4">
              <div class="recent_articles_panal gx-5">
                <h5>Recent articles</h5>
                <div class="recent_article">
                  <div class="article_img">
                    <img src="{{ asset('theme/assets/images/blog01.jpg')}}" alt="">
                  </div>
                  <div class="article_txt">
                    <h3>Lorem Ipsum has been the industry's</h3>
                    <h4>Mois imperdiet massa tincidunt nunc...</h4>
                  </div>
                </div>
                <div class="recent_article">
                  <div class="article_img">
                    <img src="{{ asset('theme/assets/images/blog02.jpg')}}" alt="">
                  </div>
                  <div class="article_txt">
                    <h3>Lorem Ipsum has been the industry's</h3>
                    <h4>Amis imperdiet massa tincidunt nunc...</h4>
                  </div>
                </div>
                <div class="recent_article">
                  <div class="article_img">
                    <img src="{{ asset('theme/assets/images/blog03.jpg')}}" alt="">
                  </div>
                  <div class="article_txt">
                    <h3>Lorem Ipsum has been the industry's</h3>
                    <h4>Scis imperdiet massa tincidunt nunc...</h4>
                  </div>
                </div>
                <div class="recent_article">
                  <div class="article_img">
                    <img src="{{ asset('theme/assets/images/blog04.jpg')}}" alt="">
                  </div>
                  <div class="article_txt">
                    <h3>Lorem Ipsum has been the industry's</h3>
                    <h4>Seis imperdiet massa tincidunt nunc...</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="news_blogs">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="blog-cart">
                      <img src="{{ asset('theme/assets/images/blog01.jpg')}}" alt="" class="img-fluid">
                      <ul class="blog-detail">
                        <li><i class='bx bx-user-circle'></i>
                          <p>John Doe</p>
                        </li>
                        <li><i class='bx bx-calendar'></i>
                          <p>July 18, 2020</p>
                        </li>
                      </ul>
                      <h4>Lorem Ipsum has been the industry's</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                      <a href="#" class="theme-btn">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="blog-cart"> 
                      <img src="{{ asset('theme/assets/images/blog02.jpg')}}" alt="" class="img-fluid">
                      <ul class="blog-detail">
                        <li><i class='bx bx-user-circle'></i>
                          <p>John Doe </p>
                        </li>
                        <li><i class='bx bx-calendar'></i>
                          <p>July 18, 2020</p>
                        </li>
                      </ul>
                      <h4>Lorem Ipsum has been the industry's</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                      <a href="#" class="theme-btn">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="blog-cart">
                      <img src="{{ asset('theme/assets/images/blog03.jpg')}}" alt="" class="img-fluid">
                      <ul class="blog-detail">
                        <li><i class='bx bx-user-circle'></i>
                          <p>John Doe</p>
                        </li>
                        <li><i class='bx bx-calendar'></i>
                          <p>July 18, 2020</p>
                        </li>
                      </ul>
                      <h4>Lorem Ipsum has been the industry's</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                      <a href="#" class="theme-btn">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="blog-cart">
                      <img src="{{ asset('theme/assets/images/blog04.jpg')}}" alt="" class="img-fluid">
                      <ul class="blog-detail">
                        <li><i class='bx bx-user-circle'></i>
                          <p>John Doe</p>
                        </li>
                        <li><i class='bx bx-calendar'></i>
                          <p>July 18, 2020</p>
                        </li>
                      </ul>
                      <h4>Lorem Ipsum has been the industry's</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                      <a href="#" class="theme-btn">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>

@endsection
