@extends('layout.master')
@section('title')
Services | Japan Eye Hospital
@stop
@section('content')

<section class="section breadcrumb-section">
  <div class="breadcrumb-section-inner">
      <div class="container">
        <!-- Breadcrumb-->
        <div class="breadcrumb">
            <div class="breadcrumb-inner">
              <div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Services</span></div>
            </div>
        </div>
      </div>
  </div>
</section>
<!-- Blurb boxed 1-->
<section class="section section-md bg-transparent text-center">
        <div class="container">
          <div class="title-1">Our services</div>
          <h1>Japan Eye Hospital specializes in providing consultation for each eye condition</h1>
          <div class="row row-20 row-lg-40 row-content">
            @foreach($service_all as $service_alls)
            <div class="col-xs-6 col-md-4 col-lg-3">
                    <!-- Blurb-->
                    <div class="blurb blurb-boxed">
                      <div class="blurb-inner">
                        <!--{!! $service_alls->icon !!}-->
                        <img class="image" src="{{asset('images/'.$service_alls->icon_one)}}" alt="" width="64" height="64"/>
                        <div class="blurb-title h5">{{$service_alls->name}}</div>
                      </div><a class="blurb-link-overlay" href="{{route('single_service',$service_alls->url_service)}}"></a>
                    </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- Blurb 1-->
      <section class="section section-md bg-primary-lightest text-center">
        <div class="container">
                <div class="text-block text-block-1">
                  <div class="title-1">OUR PRIORITIES</div>
                  <h3>Preventing vision impairment and blindness to enrich our patients’ quality of life</h3>
                </div>
                <div class="row row-30 row-content justify-content-center justify-content-md-start">
                  <div class="col-xs-6 col-md-3">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Comfortable Space</div>
                            <div class="blurb-text">Japan Eye Hospital is an eye hospital from Japan with a beautiful, fresh, and hygienic environment that makes you feel like you are in Japan.</div>
                          </article>
                  </div>
                  <div class="col-xs-6 col-md-3">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Facilities and Machinery</div>
                            <div class="blurb-text">Our hospital uses a wide range of equipment as well as modern machines imported from Japan to diagnose patients' eye problems with comfort, concrete, and rapid results. </div>
                          </article>
                  </div>
                  <div class="col-xs-6 col-md-3">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Doctors</div>
                            <div class="blurb-text">Our hospital also provides operations on patients ‘eyes problems. More importantly, the surgery is highly performed by professional doctors who have experience related to the disease.</div>
                          </article>
                  </div>
                  <div class="col-xs-6 col-md-3">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Authorized Products</div>
                            <div class="blurb-text">Our hospital offers the highest quality products and especially recognized by the Ministry of Health.</div>
                          </article>
                  </div>
                </div>
          <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
        </div>
      </section>
      <!-- Contact us 1-->
      <section class="section section-md bg-primary-lightest section-offset-3">
        <div class="container">
          <div class="row row-40 align-items-center justify-content-between">
            <div class="col-md-6 col-lg-5">
              <h2>Make an appointment with an ophthalmologist</h2>
              <div class="text-block text-block-2">
                <p>Have questions?</p>
                <div class="list list-icons-2">
                  <div class="list-item">
                    <div class="list-icon icon onclinic-phone"></div><a class="link h4 mt-0" href="tel:087-465-283">(+855) 087-465-283</a>
                  </div>
                </div>
              </div>
              <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
            </div>
            <div class="col-md-6">
              <div class="box box-form-1 section-offset-item">
                <div class="box-header">
                  <h3 class="box-title">Contact Us</h3>
                </div>
                <div class="box-body">
                    <form class="rd-form" action="{{route('sendEmail')}}" method="POST" data-form-output="home-contact-1" data-form-type="contact">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row row-20 align-items-center">
                      <div class="col-12">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-name">* Full name</label>
                          <div class="form-control-wrap">
                            <input class="form-control" id="home-contact-1-name" type="text" name="name" required="" placeholder="e.g. Adam Smith" data-constraints="@Required">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-email">* Email</label>
                          <div class="form-control-wrap">
                            <input class="form-control" id="home-contact-1-email" type="email" name="email" required="" placeholder="e.g. adamsmith@company.com" data-constraints="@Email @Required">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-phone">* Phone number</label>
                          <div class="form-control-wrap">
                            <input class="form-control" id="home-contact-1-phone" type="text" name="phone" required="" placeholder="e.g. 123-456-7890" data-constraints="@Numeric @Required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="form-label" for="home-contact-1-message">Message</label>
                          <div class="form-control-wrap">
                            <textarea class="form-control" id="home-contact-1-message" name="textarea" required="" placeholder="Your message" data-constraints="@Required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="rd-form-btn text-start">
                          <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                          @if(Session::get('success'))
                               <div class="alert alert-success" style="margin-top:15px;background-color:gray;padding:5px;">
                                   {{session::get('success')}}
                               </div>
                            @endif
                        </div>
                      </div>
                      <div class="col-md-7 col-xl-8">
                        <div class="rd-form-meta small"><span>By clicking the button you agree to the </span><a class="link link-underline" href="{{route('privacy_policy')}}">Privacy Policy</a><span> .</span></div>
                      </div>
                    </div>
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@stop