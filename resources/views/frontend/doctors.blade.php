@extends('layout.master')
@section('title')
Doctors | Japan Eye Hospital
@stop
@section('content')

<section class="section breadcrumb-section">
<div class="breadcrumb-section-inner">
  <div class="container">
    <!-- Breadcrumb-->
    <div class="breadcrumb">
      <div class="breadcrumb-inner">
        <div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
        <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Doctors</span></div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Person-->
      <section class="section section-md bg-transparent">
        <div class="container">
          <div class="text-block text-block-1">
            <div class="title-1">Our Doctors</div>
            <h3>Japan Eye Hospital is proudly to have a team of experienced doctors from Cambodia</h3>
          </div>
          <div class="row row-30 row-lg-50 row-content justify-content-center justify-content-md-start text-center text-md-start">
            @foreach($doctor as $doctors)
            <div class="col-xs-6 col-md-4">
                    <!-- Person-->
                    <div class="person">
                      <div class="person-media"><img class="person-img" src="{{asset($doctors->img)}}" alt="" width="360" height="270"/>
                      </div>
                      <div class="person-title h4"><a href="{{route('doctors_detail',$doctors->url_doctor)}}">{{$doctors->name}}</a></div>
                      <div class="person-meta title-2">{{$doctors->position}}</div>
                      <div class="person-text">{{$doctors->cover}}</div><a class="person-link link link-arrow" href="{{route('doctors_detail',$doctors->url_doctor)}}">Learn more</a>
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
                            <div class="blurb-text">Our hospital uses a wide range of equipment as well as modern machines imported from Japan to diagnose patients' eye problems with comfort, concrete, and rapid results.</div>
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
        </div>
      </section>
      <!-- Call to action-->
      <section class="section section-md bg-transparent">
              <div class="container">
                <div class="row row-40 justify-content-center text-center">
                  <div class="col-md-8 col-lg-6">
                    <h2>Make an appointment with an ophthalmologist</h2>
                    <div class="text-block text-block-2">
                      <p>Have questions?</p>
                      <div class="list list-icons-2">
                        <div class="list-item">
                          <div class="list-icon mdi-phone"></div><span class="h4"><a class="link" href="tel:087-465-283">(+855) 087-465-283</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
                  </div>
                </div>
              </div>
      </section>
@stop