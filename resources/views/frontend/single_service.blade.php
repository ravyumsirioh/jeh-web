@extends('layout.master')
@section('title')
Single Services | Japan Eye Hospital
@stop
@section('content')
 <section class="section breadcrumb-section">
        <div class="breadcrumb-section-inner">
          <div class="container">
            <!-- Breadcrumb-->
            <div class="breadcrumb">
              <div class="breadcrumb-inner">
                <div class="breadcrumb-item"><a class="breadcrumb-link" href="index.html">Home</a></div>
                <div class="breadcrumb-item"><a class="breadcrumb-link" href="#">Services</a></div>
                <div class="breadcrumb-item"><a class="breadcrumb-link" href="#">Single services</a></div>
                <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Single Service v1</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Single service 1-->
      <section class="section section-md bg-transparent">
        <div class="container">
          <div class="row row-30 tab">
            <div class="col-md-4 col-lg-3">
              <ul class="nav-boxed" role="tablist" style="border-bottom:1px solid #dde0e9;border-left: 1px solid #dde0e9;border-right: 1px solid #dde0e9;">
              @foreach($service_all as $service_alls)
                    <a class="nav-link h6 active" data-bs-toggle="tab" href="{{route('single_service',$service_alls->url_service)}}" role="tab" aria-selected="true"><li class="nav-item  @if($url_service == $service_alls->url_service)) special_calss @else @endif" style="border-top:1px solid #dde0e9;padding: 15px">{{$service_alls->name}}<span style="float:right;">></span></li></a>
              @endforeach
                </ul>
            </div>
            <div class="col-md-8 col-lg-9 ps-xl-4 tab-content pt-0">
                <div class="tab-pane" id="navLine2-2" role="tabpanel">
                    <h1 class="text-divider"><span class="text-divider-item"></span>{{$single_service->name}}</h1>
                      <div class="big">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                      <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
                      <figure><img class="image" src="{{asset('images/image-09-840x630.jpg')}}" alt="" width="840" height="630"/>
                        <figcaption>Image description</figcaption>
                      </figure>
                      <h2>1. Sample paragraph text with images</h2>
                      <p class="big">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                      <div class="row row-text row-20">
                        <div class="col-sm-6">
                          <figure><img class="image" src="{{asset('images/image-10-400x300.jpg')}}" alt="" width="400" height="300"/>
                            <figcaption>Image description</figcaption>
                          </figure>
                        </div>
                        <div class="col-sm-6">
                          <figure><img class="image" src="{{asset('images/image-11-400x300.jpg')}}" alt="" width="400" height="300"/>
                            <figcaption>Image description</figcaption>
                          </figure>
                        </div>
                      </div>
                      <h2>2. Sample lists</h2>
                      <p class="big">Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      <h3>2. 1. Sample unordered list</h3>
                      <p class="big">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                      <ul class="list list-marked big">
                        <li class="list-item">Magnis dis parturient montes nascetur</li>
                        <li class="list-item">Libero id faucibus nisl tincidunt eget
                          <ul class="list list-marked">
                            <li class="list-item">Magnis dis parturient montes nascetur</li>
                            <li class="list-item">Magnis dis parturient montes nascetur</li>
                          </ul>
                        </li>
                        <li class="list-item">Magnis dis parturient montes nascetur</li>
                      </ul>
                      <div class="box box-cta bg-800 context-dark">
                        <h3>Make an appointment with an ophthalmologist</h3>
                        <div class="box-body">
                          <div>
                            <div class="text-block text-block-2">
                              <p>Have questions?</p>
                              <div class="list list-icons-2">
                                <div class="list-item">
                                  <div class="list-icon mdi-phone"></div><span class="h4"><a class="link" href="tel:087-465-283">(+855) 087-465-283</a></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div><a class="btn btn-lg btn-primary" href="{{route('appointments')}}"><span class="btn-icon onclinic-book"></span><span>Book an Appointment</span></a></div>
                        </div>
                      </div>
                      <h3>2. 2. Sample ordered  list</h3>
                      <p class="big">Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                      <ul class="list list-ordered big">
                        <li class="list-item">Lorem ipsum dolor sit amet conse ctetur adipisicing elit;</li>
                        <li class="list-item">Sed do eiusmod ut labore et dolore magna aliqua;
                          <ul class="list list-ordered">
                            <li class="list-item">Quis nostrud exercitation ullamco laboris nisi ut aliquip;</li>
                            <li class="list-item">Duis aute irure dolor in reprehenderit;</li>
                          </ul>
                        </li>
                      </ul>
                      <h2>3. Sample Price</h2>
                      <div class="table-container table-responsive">
                        <table class="table table-separate">
                          <thead>
                            <tr>
                              <th>Name of dervice</th>
                              <th class="text-center">Price:</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Lorem ipsum dolor sit ame consectetur adipiscing eli</td>
                              <td class="h5 text-center text-primary">$785</td>
                            </tr>
                            <tr>
                              <td>Odio ut sem nulla pharetra diam sit amet</td>
                              <td class="h5 text-center text-primary">$85</td>
                            </tr>
                            <tr>
                              <td>Adipiscing diam donec adipiscing tristique risus</td>
                              <td class="h5 text-center text-primary">$132</td>
                            </tr>
                            <tr>
                              <td>Risus commodo viverra maecenas accumsan lacus</td>
                              <td class="h5 text-center text-primary">$98</td>
                            </tr>
                            <tr>
                              <td>Mauris nunc congue nisi vitae</td>
                              <td class="h5 text-center text-primary">$54</td>
                            </tr>
                            <tr>
                              <td>Pretium aenean pharetra magna ac placerat</td>
                              <td class="h5 text-center text-primary">$68</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="btn-group-1"><a class="btn btn-lg btn-dark" href="#"><span class="btn-icon onclinic-book"></span><span>Book ab Appointment</span></a></div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blurb 1-->
      <section class="section section-md bg-primary-lightest text-center">
        <div class="container">
                <div class="text-block text-block-1">
                  <div class="title-1">Advantages</div>
                  <h3>Good vision for many years</h3>
                </div>
                <div class="row row-30 row-content justify-content-center justify-content-md-start">
                  <div class="col-xs-6 col-md-4">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Highest professional level</div>
                            <div class="blurb-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                          </article>
                  </div>
                  <div class="col-xs-6 col-md-4">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Individual treatment program</div>
                            <div class="blurb-text">Lacus vestibulum sed arcu non odio. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. </div>
                          </article>
                  </div>
                  <div class="col-xs-6 col-md-4">
                          <!-- Blurb-->
                          <article class="blurb blurb-2">
                            <div class="icon blurb-icon fa-check"></div>
                            <div class="blurb-title h5">Equipment with international standards</div>
                            <div class="blurb-text">Dui accumsan sit amet nulla facilisi morbi. Nibh ipsum consequat nisl vel pretium.</div>
                          </article>
                  </div>
                </div>
        </div>
      </section>
      <!-- Accordion line-->
      <section class="section section-md bg-200">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
              <h3 class="text-center">Frequently asked questions</h3>
                    <div class="accordion accordion-line">
                      <div class="accordion-item active">
                        <div class="accordion-head h5">Lorem ipsum dolor sit amet, consectetur adipiscing?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-head h5">Sed do eiusmod tempor incididunt?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-head h5">Cursus vitae congue mauris rhoncus?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-head h5">Sit amet commodo nulla facilisi nullam vehicula ipsum?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-head h5">Aliquet porttitor lacus luctus?</div>
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                      </div>
                    </div>
            </div>
          </div>
        </div>
      </section>
@stop