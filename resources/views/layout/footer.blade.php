<section class="footer footer-dark context-dark bg-800">
        <div class="container">
          <div class="row row-30">
                <div class="col-sm-12 col-lg-12 text-center">
                    <h5 class="footer-title">COOPERATION</h5>
                </div>
                <div class="col-sm-4 col-lg-4 text-center">
                    <div class="logo"><a target="_blank" class="logo-link" href="https://parismikikh.com/"><img class="logo-image-default" src="{{asset('images/logoparismiki.png')}}" alt="Ocularis" width="300" height="80"/><img class="logo-image-inverse" src="{{asset('images/logoparismiki.png')}}" alt="Ocularis" width="300" height="80"/></a></div>
                </div>
                <div class="col-sm-4 col-lg-4 text-center">
                    <div class="logo"><a target="_blank" class="logo-link" href="https://jieh.vn/en"><img class="logo-image-default" src="{{asset('images/benvin.png')}}" alt="Ocularis" width="300" height="80"/><img class="logo-image-inverse" src="{{asset('images/benvin.png')}}" alt="Ocularis" width="300" height="80"/></a></div>
                </div>
                <div class="col-sm-4 col-lg-4 text-center">
                    <div class="logo"><a target="_blank" class="logo-link" href="http://www.nihonbashi-hakunaisho.com/"><img class="logo-image-default" src="{{asset('images/nihonbashi.png')}}" alt="Ocularis" width="300" height="80"/><img class="logo-image-inverse" src="{{asset('images/nihonbashi.png')}}" alt="Ocularis" width="300" height="80"/></a></div>
                </div>
                <div class="col-sm-12 col-lg-12 text-center" style="height:50px">
                    
                </div>
            <div class="col-sm-6 col-lg-3">
                    <!-- Logo-->
                    <div class="logo" id="footer_logo"><a class="logo-link" href="{{route('/')}}"><img class="logo-image-default" src="{{asset('images/footer-default-256x112.png')}}" alt="Ocularis" width="200" height="80"/><img class="logo-image-inverse" src="{{asset('images/footer-default-256x112.png')}}" alt="Ocularis" width="200" height="80"/></a></div>
              <p>We are a recognized leader in high-tech ophthalmology services</p>
              <div class="social group-20"><a target="_blank" class="social-icon icon icon-lg icon-link icon-primary-light onclinic-facebook" href="https://www.facebook.com/japaneyehospital.cambodia"></a><a target="_blank" class="social-icon icon icon-lg icon-link icon-primary-light onclinic-instagram" href="https://www.instagram.com/japaneye_hospital_cambodia/"></a></div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <h5 class="footer-title">What We Treat</h5>
              <ul class="list list-sm">
                @foreach($eye_disease_all as $eye_disease_alls)
                <li class="list-item"><a href="{{route('eyediseases_detail',$eye_disease_alls->url_name)}}">{{$eye_disease_alls->name}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3">
              <h5 class="footer-title">Contacts</h5>
              <ul class="list list-icons">
                <li class="list-item">
                  <div class="list-icon onclinic-map-marker"></div><a target="_blank" href="https://www.google.com/maps/place/Japan+Eye+Hospital-%E6%97%A5%E6%9C%AC%E7%9C%BC%E7%A7%91%E7%97%85%E9%99%A2-%E1%9E%96%E1%9F%81%E1%9E%91%E1%9F%92%E1%9E%99%E1%9E%97%E1%9F%92%E1%9E%93%E1%9F%82%E1%9E%80/@11.566917,104.922603,14z/data=!4m5!3m4!1s0x0:0x1aaa2ad2123e838e!8m2!3d11.5669172!4d104.9226033?hl=en">No. 82A, 8th Floor, st. 154, Phsar Thmei III, Phnom Penh.</a>
                </li>
                <li class="list-item">
                  <div class="list-icon onclinic-phone"></div><a href="tel: 087-465-283">(+855) 087-465-283 </a>
                </li>
                <li class="list-item">
                  <div class="list-icon onclinic-email-open"></div><a href="mailto:info@jeh-kh.com">info@jeh-kh.com</a>
                </li>
                <li class="list-item">
                  <div class="list-icon onclinic-book"></div><a href="{{route('appointments')}}">Book an Appointment</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3">
                <h5 class="footer-title">Opening Hour</h5>
              <ul class="list">
                <li class="list-item">Monday-Sunday</li>
                <li class="list-item">8:00am - 12:00pm</li>
                <li class="list-item"> 1:00pm - 5:00pm</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer footer-minimal context-dark bg-900">
        <div class="container">
          <!-- Copyright-->
          <p class="rights"><span>Copyright &copy; 2021&nbsp;</span><span>Japan Eye Hospital</span><span>.</span><a target="_blank" class="ms-2 ms-md-4" href="{{route('privacy_policy')}}">Privacy Policy</a></p>
        </div>
      </footer>