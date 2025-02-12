 <!--RD Navbar-->
      <header class="section rd-navbar-wrap">
        <nav class="rd-navbar navbar-custom">
          <div class="navbar-section navbar-non-stuck">
            <div class="navbar-container">
              <div class="navbar-cell">
                <div class="navbar-panel">
                  <button class="navbar-switch mdi-menu novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                  <div class="navbar-logo"><a class="navbar-logo-link" href="{{route('/')}}"><img class="navbar-logo-default" src="{{asset('images/jeh-logo128-56.jpg')}}" alt="japan eye hospital" width="168" height="66"/><img class="navbar-logo-inverse" src="{{asset('images/jeh-logo128-56.jpg')}}" alt="Ocularis" width="168" height="66"/></a></div>
                </div>
              </div>
              <div class="navbar-cell navbar-spacer"></div>
              <div class="navbar-cell">
                <div class="navbar-info">
                  <div class="list list-icons-2">
                    <div class="list-item">
                      <div class="list-icon navbar-info-icon icon onclinic-map-marker novi-icon"></div><a target="_blank" class="link link-inherit small" href="https://www.google.com/maps/place/Japan+Eye+Hospital-%E6%97%A5%E6%9C%AC%E7%9C%BC%E7%A7%91%E7%97%85%E9%99%A2-%E1%9E%96%E1%9F%81%E1%9E%91%E1%9F%92%E1%9E%99%E1%9E%97%E1%9F%92%E1%9E%93%E1%9F%82%E1%9E%80/@11.566917,104.922603,14z/data=!4m5!3m4!1s0x0:0x1aaa2ad2123e838e!8m2!3d11.5669172!4d104.9226033?hl=en">No. 82A, 8th Floor, st. 154, Phsar Thmei III, Phnom Penh. </a>
                    </div>
                  </div>
                  <div class="text-block text-block-2 d-md-flex align-items-center justify-content-center">
                    <!--<p class="small">Have questions?</p>-->
                    <div class="list list-icons-2">
                      <div class="list-item">
                        <div class="list-icon icon onclinic-phone"></div><span class="h5"><a class="link" href="tel:087-465-283">(+855) 087-465-283 </a></span>
                      </div>
                    </div>
                  </div><a class="btn btn-secondary" href="{{route('appointments')}}"><span class="btn-icon icon onclinic-book"></span><span>Book an Appointment</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-section navbar-section-dark">
            <div class="navbar-container">
              <div class="navbar-cell navbar-sidebar">
                <ul class="navbar-navigation rd-navbar-nav">
                     <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="{{route('abouts')}}" style="padding-right:20px;">About Us</a>
                     </li>
                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link">Doctor</a>
                    <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                      <li class="navbar-navigation-back">
                        <button class="navbar-navigation-back-btn">Back</button>
                      </li>
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('doctors')}}">Doctors</a>
                      </li>
                      @foreach($doctor as $doctors)
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('doctors_detail',$doctors->url_doctor)}}">{{$doctors->name}}</a>
                      </li>
                      @endforeach
                    </ul>
                    </li>
                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">Eye disease & Treatment</a>
                    <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                      <li class="navbar-navigation-back">
                        <button class="navbar-navigation-back-btn">Back</button>
                      </li>
                      @foreach($eye_disease_all as $eye_disease_alls)
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('eyediseases_detail',$eye_disease_alls->url_name)}}">{{$eye_disease_alls->name}}</a>
                      </li>
                      @endforeach
                    </ul>
                    </li>
                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="{{route('services')}}" style="padding-right:20px;">Services</a>
                    </li>
                  <!--<li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="{{route('services')}}">Services</a>-->
                  <!--  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">-->
                  <!--    <li class="navbar-navigation-back">-->
                  <!--      <button class="navbar-navigation-back-btn">Back</button>-->
                  <!--    </li>-->
                  <!--    @foreach($service_menu as $service_menus)-->
                  <!--    @if($service_menus->name == "Cataract Consultation")-->
                  <!--    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('single_service',$service_menus->url_service)}}">Cataract Consultation</a>-->
                  <!--      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">-->
                  <!--        <li class="navbar-navigation-back">-->
                  <!--          <button class="navbar-navigation-back-btn">Back</button>-->
                  <!--        </li>-->
                  <!--        @foreach($service_sub as $service_subs)-->
                  <!--        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('single_service',$service_subs->url_service)}}">{{$service_subs->name}}</a>-->
                  <!--        </li>-->
                  <!--        @endforeach-->
                  <!--      </ul>-->
                  <!--    </li>-->
                  <!--    @else-->
                  <!--    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('single_service',$service_menus->url_service)}}">{{$service_menus->name}}</a>-->
                  <!--    </li>-->
                  <!--    @endif-->
                  <!--   @endforeach-->
                  <!--  </ul>-->
                  <!--</li>-->
                  
                  <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">Customer</a>
                    <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                      <li class="navbar-navigation-back">
                        <button class="navbar-navigation-back-btn">Back</button>
                      </li>
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('locations')}}">Location</a>
                      </li>
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('galleries')}}">Gallery</a>
                      </li>
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('faqs')}}">FAQ</a>
                      </li>
                      <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{route('privacy_policy')}}">Privacy Policy</a>
                      </li>
                    </ul>
                    </li>
                  
                  <!--<li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="{{route('prices')}}" style="padding-right:20px;">Price</a>-->
                  <!--</li>-->
                  <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="{{route('blogs')}}" style="padding-right:20px;">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="navbar-cell navbar-spacer"></div>
              <div class="navbar-cell">
                <div class="navbar-subpanel">
                  <div class="navbar-subpanel-item">
                    <button class="navbar-button navbar-info-button mdi-dots-vertical novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-info-active","isolate":"[data-multi-switch]"}'></button>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>