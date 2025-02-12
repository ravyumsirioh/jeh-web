@extends('layout.master')
@section('title')
About | Japan Eye Hospital
@stop
@section('content')
<section class="section breadcrumb-section">
	<div class="breadcrumb-section-inner">
	  <div class="container">
	    <!-- Breadcrumb-->
	    <div class="breadcrumb">
	      <div class="breadcrumb-inner">
	        <div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
	        <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">About</span></div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<!-- About us 7-->
<section class="section section-md bg-200">
	<div class="container">
	  <div class="text-block text-center">
	    <h1>Japan-based Paris Miki Holdings Inc. founded in 1930. In October 2020, celebrated its 90th anniversary.</h1>
	    <p>We committed to providing our patient with new valuable things that<br class="d-none d-lg-inline"> furnish customers' life full of modernity, excitement, and dignity.</p>
	  </div>
	</div>
</section>
<!-- image section-->
<section class="section section-md bg-200 pb-0">
	<div class="container text-center"><img src="images/image-25-760x439.png" alt="" width="760" height="439"/>
	</div>
</section>
<!-- About us tabs-->
<section class="section section-md bg-transparent">
	<div class="container tab">
	  	<ul class="nav nav-line justify-content-center" role="tablist">
	    	<li class="nav-item"><a class="nav-link h6 active" data-bs-toggle="tab" href="#navLine3-1" role="tab" aria-selected="true">WHO ARE WE</a></li>
	    	<li class="nav-item"><a class="nav-link h6" data-bs-toggle="tab" href="#navLine3-2" role="tab" aria-selected="false">ADVANTAGES</a></li>
	  	</ul>
	  	<div class="tab-content">
	    	<div class="tab-pane fade show active" id="navLine3-1" role="tabpanel">
	      		<div class="row row-20 row-lg-40 flex-sm-row-reverse">
			        <div class="col-md-6 ms-auto">
			          <h3>Japan-based Paris Miki Holdings Inc. founded in 1930. In October 2020, celebrated its 90th anniversary.</h3>
			          <p>Japan Eye Hospital was established in October 2019 in Phnom Penh Cambodia, under investment by the Japan-based Paris Miki Holdings Inc.We are 
			          the authorized dealer of SAV-IOL and certified by Ministry of Health Department of Drug and Food in Cambodia in May 2021.We are the first to 
			          use Swiss made Intra Ocular Lens from Swiss Advanced Vision (SAV-IOL) in June 2021 in Cambodia.</p>
			          <p>Also, we are authorized dealer of SEED contact lens and certified by Ministry of Health Department of Drug and Food in Dec 2021 in Cambodia.</p>
			          <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('doctors')}}">Our Doctors</a></div>
			        </div>
			        <div class="col-md-3 d-none d-md-block"><img class="image" src="images/image-02-260x260.jpg" alt="" width="260" height="260"/><img class="image" src="images/image-03-260x195.jpg" alt="" width="260" height="195"/>
			        </div>
			        <div class="col-md-2 d-none d-md-block"><img class="image" src="images/image-05-160x260.jpg" alt="" width="160" height="260"/>
			        </div>
	        	</div>
	    	</div>
	    	<div class="tab-pane fade" id="navLine3-2" role="tabpanel">
	      		<div class="row row-30">
			        <div class="col-md-6">
			          <h3>Preventing vision impairment and blindness to enrich our patients’ quality of life</h3>
			          <p>We are a specialized ophthalmology hospital originating from Japan. Our hospital offers a wide range of services, such as
			          consultation, eye checkups, and eye surgery with specialized ophthalmologists who have a lot of experience regarding eye diseases.</p>
			          <!--<p>Ut etiam sit amet nisl purus. Egestas egestas fringilla phasellus faucibus scelerisque eleifend. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum.</p>-->
			          <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
			        </div>
	        		<div class="col-md-6">
	                	<!-- Blurb-->
		                <article class="blurb blurb-simple">
		                  <div class="blurb-item">
		                    <div class="icon blurb-icon onclinic-check"></div>
		                    <div class="blurb-title">Japan Eye Hospital is an eye hospital from Japan with a beautiful, fresh, and hygienic environment that makes you feel like you are in Japan.</div>
		                  </div>
		                </article>
	                	<!-- Blurb-->
		                <article class="blurb blurb-simple">
		                  <div class="blurb-item">
		                    <div class="icon blurb-icon onclinic-check"></div>
		                    <div class="blurb-title">Our hospital uses a wide range of equipment as well as modern machines imported from Japan to diagnose patients' eye problems with comfort, concrete, and rapid results. </div>
		                  </div>
		                </article>
	                	<!-- Blurb-->
		                <article class="blurb blurb-simple">
		                  <div class="blurb-item">
		                    <div class="icon blurb-icon onclinic-check"></div>
		                    <div class="blurb-title">Our hospital also provides operations on patients ‘eyes problems. More importantly, the surgery is highly performed by professional doctors who have experience related to the disease.</div>
		                  </div>
		                </article>
		                	<!-- Blurb-->
		                <article class="blurb blurb-simple">
		                  <div class="blurb-item">
		                    <div class="icon blurb-icon onclinic-check"></div>
		                    <div class="blurb-title">Our hospital offers the highest quality products and especially recognized by the Ministry of Health.</div>
		                  </div>
		                </article>
	        		</div>
	      		</div>
	    	</div>
	  	</div>
	</div>
</section>
<!-- Image carousel-->
<section class="section section-md bg-transparent text-center">
	<h3>Our workspace</h3>
	<div class="owl-carousel owl-content-2" data-owl="{&quot;dots&quot;:true}" data-loop="false" data-items="1" data-sm-items="2" data-md-items="3"><img class="image image-block" src="images/image-15-613x460.jpg" alt="" width="613" height="460"/><img class="image image-block" src="images/image-08-613x460.jpg" alt="" width="613" height="460"/><img class="image image-block" src="images/image-02-613x460.jpg" alt="" width="613" height="460"/><img class="image image-block" src="images/image-03-613x460.jpg" alt="" width="613" height="460"/><img class="image image-block" src="images/image-21-613x460.jpg" alt="" width="613" height="460"/><img class="image image-block" src="images/image-26-613x460.jpg" alt="" width="613" height="460"/>
	</div>
</section>
<!-- Call to action-->
<section class="section section-md bg-transparent">
	<div class="container">
	  	<div class="row row-40 justify-content-center text-center">
	    	<div class="col-md-8 col-lg-6">
	      		<h2>Make an appointment with an ophthalmologist</h2>
	      		<div class="text-block text-block-2 d-sm-inline-flex align-items-center">
	        		<p>Have questions?</p>
	        		<div class="list list-icons-2">
	          			<div class="list-item"><span class="list-icon onclinic-phone"></span><span class="h4"><a class="link" href="tel:087-465-283">(+855) 087-465-283</a></span></div>
	        		</div>
	      		</div>
	      		<div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
	    	</div>
	  	</div>
	</div>
</section>
<!-- Contact us 6-->
<section class="section section-md bg-transparent section-offset-3">
	<div class="container section-offset-item">
  		<div class="row justify-content-center">
    		<div class="col-md-8">
            	<div class="box box-form-1">
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