@extends('layout.master')
@section('title')
Services Details | Japan Eye Hospital
@stop
@section('content')

<section class="section breadcrumb-section">
	<div class="breadcrumb-section-inner">
  		<div class="container">
    	<!-- Breadcrumb-->
    		<div class="breadcrumb">
      			<div class="breadcrumb-inner">
        			<div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('/')}}">Home</a></div>
        			<div class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('services')}}">Services pages</a></div>
        			<div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Service Details</span></div>
      			</div>
    		</div>
  		</div>
	</div>
</section>
<!-- Call to action 2-->
<section class="section section-md bg-primary-lightest">
	<div class="container">
	  	<div class="row row-40 justify-content-center text-center">
	    	<div class="col-md-10 col-lg-8">
	      		<h1>Service Detail</h1>
	      		<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      		<div class="btn-group-1"><a class="btn btn-lg btn-dark" href="book-an-appointment.html"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
	    	</div>
	  	</div>
	</div>
</section>
<!-- Nav line-->
<section class="section section-md bg-transparent">
	<div class="container">
  		<div class="tab">
    		<ul class="nav nav-line" role="tablist">
      			<li class="nav-item"><a class="nav-link h6 active" data-bs-toggle="tab" href="#navLine1-1" role="tab" aria-selected="true">Services</a></li>
    		</ul>
    		<div class="tab-content">
      			<div class="tab-pane fade show active" id="navLine1-1" role="tabpanel">
              		<!-- Thumbnail side-->
              		<div class="thumbnail thumbnail-side row row-25 justify-content-center text-center text-md-start">
                		<div class="thumbnail-media col-sm-8 col-md-6"><img src="images/image-14-520x390.jpg" alt="" width="520" height="390"/>
                		</div>
                		<div class="thumbnail-body col-sm-10 col-md-6">
                  			<h4>Amet nisl purus in mollis nunc dolor sit amet consectetur.</h4>
                  			<p>Amet nisl purus in mollis nunc sed. Dolor sit amet consectetur adipiscing elit pellentesque. Lorem donec massa sapien faucibus et. Interdum consectetur libero id faucibus nisl tincidunt eget. Volutpat maecenas volutpat blandit aliquam. Suspendisse interdum consectetur libero id faucibus. Risus viverra adipiscing at in tellus integer feugiat. Magna ac placerat vestibulum lectus mauris ultrices eros. Velit ut tortor pretium viverra suspendisse potenti. Nisi quis eleifend quam adipiscing vitae proin.</p>
                		</div>
              		</div>
      			</div>
    		</div>
  		</div>
	</div>
</section>

@stop