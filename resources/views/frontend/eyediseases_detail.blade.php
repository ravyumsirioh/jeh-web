@extends('layout.master')
@section('title')
Eye Disease & Treatment | Japan Eye Hospital
@stop
@section('content')

<section class="section breadcrumb-section">
	<div class="breadcrumb-section-inner">
	  	<div class="container">
	    	<!-- Breadcrumb-->
	    	<div class="breadcrumb">
	      		<div class="breadcrumb-inner">
	        		<div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
	        		<div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('services')}}">Services</a></div>
	        		<div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">eye disease and treadment</span></div>
	      		</div>
	    	</div>
	  	</div>
	</div>
</section>
<!-- Single service 3-->
<section class="section section-md bg-transparent">
	<div class="container">
  		<div class="row row-30 tab">
    		<div class="col-md-4 col-lg-3">
      			<ul class="nav-boxed" role="tablist" style="border-bottom:1px solid #dde0e9;border-left: 1px solid #dde0e9;border-right: 1px solid #dde0e9;">
              @foreach($eye_disease_all as $eye_disease_alls)
        			<a class="nav-link h6 active" data-bs-toggle="tab" href="{{route('eyediseases_detail',$eye_disease_alls->url_name)}}" role="tab" aria-selected="true"><li class="nav-item @if($url_name == $eye_disease_alls->url_name)) special_calss @else @endif" style="border-top:1px solid #dde0e9;padding: 15px">{{$eye_disease_alls->name}}<span style="float:right;">></span></li></a>
              @endforeach
      			</ul>
    		</div>
    		<div class="col-md-8 col-lg-9 ps-xl-4 tab-content pt-0">
      			<div class="tab-pane fade show active" id="navLine2-1" role="tabpanel">
        			<h1 class="text-divider"><span class="text-divider-item"></span>{{$eye_disease->name}}</h1>
          			<div class="big">{{$eye_disease->caption}}</div>
              		<div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
              		<figure><img class="image" src="{{asset($eye_disease->img)}}" alt="" width="840" height="630"/>
                		<figcaption>Image description</figcaption>
              		</figure>
                    <div class="big">{!! $eye_disease->des !!}</div>
              		<!-- <h2>1. Sample paragraph text with images</h2>
              		<p class="big">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
              		<div class="row row-text row-20">
                		<div class="col-sm-6">
                  			<figure><img class="image" src="{{asset('images/image-12-400x300.jpg')}}" alt="" width="400" height="300"/>
                    			<figcaption>Image description</figcaption>
                  			</figure>
                		</div>
                		<div class="col-sm-6">
                  			<figure><img class="image" src="{{asset('images/image-13-400x300.jpg')}}" alt="" width="400" height="300"/>
                    			<figcaption>Image description</figcaption>
                  			</figure>
                		</div>
              		</div> -->
              		<!-- <h2>2. Sample lists</h2>
              		<p class="big">Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              		<h3>2. 1. Sample unordered list</h3>
              		<p class="big">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
              		<!-- <ul class="list list-marked big">
            			<li class="list-item">Magnis dis parturient montes nascetur</li>
                		<li class="list-item">Libero id faucibus nisl tincidunt eget
                  			<ul class="list list-marked">
                    			<li class="list-item">Magnis dis parturient montes nascetur</li>
                    			<li class="list-item">Magnis dis parturient montes nascetur</li>
                  			</ul>
            			</li>
                		<li class="list-item">Magnis dis parturient montes nascetur</li>
              		</ul> -->
              		<!-- <h3>2. 2. Sample ordered  list</h3>
              		<p class="big">Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
              		<ul class="list list-ordered big">
                		<li class="list-item">Lorem ipsum dolor sit amet conse ctetur adipisicing elit;</li>
                		<li class="list-item">Sed do eiusmod ut labore et dolore magna aliqua;
                  			<ul class="list list-ordered">
                    			<li class="list-item">Quis nostrud exercitation ullamco laboris nisi ut aliquip;</li>
                		<li class="list-item">Duis aute irure dolor in reprehenderit;</li>
                  	</ul>
                </li>
     	 	</ul> -->
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
            				<div class="list-icon icon onclinic-phone"></div><a class="link h4 mt-0" href="tel: 087-465-283">(+855) 087-465-283</a>
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