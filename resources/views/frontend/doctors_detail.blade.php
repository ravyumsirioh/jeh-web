@extends('layout.master')
@section('title')
  Doctor Details | Japan Eye Hospital
@endsection
@section('content')
<section class="section breadcrumb-section">
  <div class="breadcrumb-section-inner">
    <div class="container">
      <!-- Breadcrumb-->
      <div class="breadcrumb">
        <div class="breadcrumb-inner">
          <div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
          <div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('doctors')}}">Doctor</a></div>
          <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active"> Doctor Details</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
      <!-- Team member-->
      <section class="section section-md bg-transparent">
        <div class="container">
          <div class="row row-30 person">
            <div class="col-md-6">
              <div class="row row-30 row-lg-50">
                <div class="col-xs-6 col-md-12"><img src="{{ asset($doctors_detail->img) }}" alt="" width="520" height="390"/>
                </div>
                <!-- <div class="col-xs-6 col-md-12">
                  <div class="text-block text-block-3">
                    <h5>Work days</h5>
                    <ul class="list">
                      <li class="list-item">Monday – 8am – 7pm</li>
                      <li class="list-item">Tuesday – 8am – 7pm</li>
                      <li class="list-item">Thursday – 8am – 6:30pm</li>
                      <li class="list-item">Saturday – 8am – 2pm</li>
                    </ul>
                  </div>
                  <div class="text-block text-block-3">
                    <h5>Work days</h5>
                    <ul class="list list-icons">
                      <li class="list-item">
                        <div class="list-icon mdi-email-outline"></div><a href="mailto:#">info@demolink.org</a>
                      </li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-md-6 person-overview">
              <h2> {{$doctors_detail->name}}</h2>
              <h4 class="person-meta">{{$doctors_detail->position}}</h4>
              <p class="big">{{$doctors_detail->cover}}</p>
              <p class="big">{!! $doctors_detail->des !!}</p>

              <p class="big"><strong>1. Why did you want to become an ophthalmologist?</strong><br> — I want to become an ophthalmologist because I want to be both a physician and a surgeon to my patient, and in ophthalmology, we cover both medical and surgical problems for the eye. Moreover, in ophthalmology, there are a lot of cutting-edge machines to learn and use. Most importantly, as an ophthalmologist, I could help people remaining their sight back.</p>
              <p class="big"><strong>2. What do you think are the qualities to be an effective ophthalmologist?</strong><br> — Like what i mentioned in the previous question, we need both medical and surgical skill as an ophthalmology. Having the abilities to catch up with a lot of lessons and theories is good, but more important is the abilities and personalities to be able to practice all the skills and procedures in a correct way.</p>
              <p class="big"><strong>3. What does Healthy Eye mean to you?</strong> — "Healthy eye" eyes with good vision, no discomfort. It's easy to assume your eyes are healthy if they feel healthy. However, many eye disorders have no warning indications, so you could have an eye condition without realizing it. The good news is that there's a lot you can do to ensure that you see well for the rest of your life.</p>
              <p class="big"><strong>4. For your own opinion, what are the requirements for your junior ophthalmologist?</strong><br> — For junior ophthalmologist, I already mentioned the qualities an ophthalmologist needs. To me, having the abilities and resources alone is not enough. You need the passion for the career in order to develop your skill.</p>
              <p class="big"><strong>5. Please send a message to people who wanted to start getting eye care right now.</strong><br> — Having an eyes check-up at any age is important to keep your vision strong. A lot of people think that their vision is good, so they decide to wait until their eye problem is worse. For any disease, if we detect it early, so the management for the problem is also easier and the outcome is better as well.</p>
            </div>
          </div>
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
@endsection