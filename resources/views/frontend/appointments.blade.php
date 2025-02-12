@extends('layout.master')
@section('title')
Appointment | Japan Eye Hospital
@stop
@section('content')

<section class="section breadcrumb-section">
    <div class="breadcrumb-section-inner">
      	<div class="container">
            <!-- Breadcrumb-->
            <div class="breadcrumb">
              	<div class="breadcrumb-inner">
                	<div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
                	<div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Book an Appointment</span></div>
              	</div>
            </div>
      	</div>
    </div>
</section>
<!-- Booking calendar-->
<section class="section section-md bg-transparent">
	<div class="container">
  		<div class="title-1 text-center">Book an appointment</div>
    	<div class=" modal-book text-start" id="appointment" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Request an Appointment</h3>
              <!-- <button class="close" type="button" data-bs-dismiss="modal"><span class="icon mdi-close"></span></button> -->
            </div>
            <div class="modal-body">
              <div class="box box-book">
                <!-- <div class="box-title h5">Please confirm that you would like to request the following appointment:</div> -->
                <div class="box-person">
                  
                  <div class="box-person-title h4">
                  	Please confirm that you would like to request the following appointment:
                  </div>
                
                  <div class="box-person-date"><span class="box-person-date-icon onclinic-calendar"></span>
                    <time class="box-person-time" datetime="2020">Monday - Sunday (8:00 am - 5:00 pm)</time>
                  </div>
                </div>
                <div class="box-title h5"><span>Your Information </span><span class="text-tertiaty" style="color:red">*</span></div>
                <div class="box-subtitle">Please Select doctor name and enter your first name, last name, email address and messages:</div>
                <form class="rd-form" action="{{route('BookAppointment')}}" method="POST" data-form-output="home-contact-1" data-form-type="contact">
        			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row row-15 row-lg-30 align-items-center">
                  	<div class="col-md-6">
                      	<div class="form-group">
	                        <div class="form-control-wrap">
	                          <!-- <input class="form-control" type="text" name="first-name" placeholder="First Name..." data-constraints="@Required" required=""> -->
	                          	<select class="form-control" required="" name="doctor_name">
			                  		<option value="">
			                  			Please Select Doctor!
			                  		</option>
			                  		@foreach($doctor as $doctors)
			                  		<option value="{{$doctors->name}}">
			                  			{{$doctors->name}}
			                  		</option>
			                  		@endforeach
	                  			</select>
	                        </div>
                      	</div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-control-wrap">
                          <input class="form-control" type="text" name="first_name" placeholder="First Name..." data-constraints="@Required" required="">
                        </div>
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-control-wrap">
                          <input class="form-control" type="email" name="email" placeholder="Email address..." data-constraints="@Required" required="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-control-wrap">
                          <input class="form-control" type="text" name="last_name" placeholder="Last Name..." data-constraints="@Required" required="">
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <div class="form-control-wrap">
                          <textarea class="form-control" id="home-contact-1-message" name="message" required="" placeholder="Your message" data-constraints="@Required" required=""></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-1 mt-lg-3">
                      <div class="btn-group-1 text-start">
                        <button class="btn btn-lg btn-dark" type="submit">Request an Appointment</button>
                        <button class="btn btn-lg" type="reset" data-bs-dismiss="modal">Cancel</button>
                        @if(Session::get('success'))
                          	<button class="btn btn-lg btn-dark">
                              	{{session::get('success')}}
                          	</botton>
                        @endif
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
  
	</div>
</section>

@stop