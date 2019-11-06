@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
    
<div class="container">
  
  <div class="row pt-4">
    
    <!-- Content -->
    <div class="col-lg-12">
     
      <!-- Products Grid -->
      <section class="section pt-4">

        <!-- Grid row -->
        <div class="section pt-4" >
          <!--Carousel Wrapper-->
          <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-sm" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1z" data-slide-to="0" class=""></li>
              <li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
              <li data-target="#carousel-example-1z" data-slide-to="2" class="active"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.0-9/29790578_1652095124869213_3634760196162584576_o.jpg?_nc_cat=105&_nc_oc=AQnjH36ohFi0vNv6S4yp8pxQk8yT3VTUOTfwWIMTlO0wnTYGN_GN0umMA_XFzmW493g&_nc_ht=scontent-lim1-1.xx&oh=0fa75f2122a6abc310bb72f4cc03091f&oe=5E4A431D" alt="First slide">
              </div>
              <!--/First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.0-9/29101387_1647344482027980_6174117086654044263_n.jpg?_nc_cat=110&_nc_oc=AQktGouvw1F8rT62tcMEd3LIgD6yZeC6pFkvy3QuhLDvh3eExvFPYlPYdDB-sBUGnKc&_nc_ht=scontent-lim1-1.xx&oh=6a840b0cd12e55114bbf197e1d5c85ac&oe=5E492A7D" alt="Second slide">
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.0-9/71337311_2445782875500430_3443607840520929280_n.jpg?_nc_cat=100&_nc_oc=AQkPJe1IU43XizJjvwe2P_fFIp5mXUM8yiqTglECbAETxRN9GlRaVueklKzZVeGVgmo&_nc_ht=scontent-lim1-1.xx&oh=41213b792838244d54f0912f7808da0c&oe=5E5A31FB" alt="Third slide">
              </div>
              <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
          <!--/.Carousel Wrapper-->
        </div>
        <!-- Grid row -->
<br>
        <!-- Section small products -->
        <section>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-12">

              <!-- Grid row -->
              <div class="row">
                @foreach ($busine as $item)
                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 mb-4">
                 
                  <!-- Card -->
                  <div class="card card-ecommerce">
                   
                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-6 d-flex align-items-center">

                        <!-- Card image -->
                        <div class="view overlay">

                          <img src="{{ asset('storage/'.$item->image) }}"
                            class="img-fluid" alt="">

                          <a href="{{ route('company', $item->slug) }}">

                            <div class="mask rgba-white-slight"></div>

                          </a>

                        </div>

                        <!-- Card image -->
                      </div>

                      <!-- Grid column -->
                      <div class="col-6 pl-0">

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Category & Title -->
                          <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{ $item->name }}</a></strong>
                          </h5>
                          @php
                          $categoria=App\Categoria::where('id', $item->categoria_id)->first();
  
                           @endphp
                          <span class="badge badge-danger mb-2">{{ $categoria->name }}</span>

                          <!-- Rating -->
                          <ul class="rating">

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                          </ul>

                          <!-- Card footer -->
                          <div class="card-footer pb-0">

                            <div class="row mb-0">

                              {{-- <span class="float-left"><strong>{{ $item->descriptions }}</strong></span> --}}
                              <p>{{ $item->description }}</p>
                              {{-- <span class="float-right">

                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                    class="fas fa-shopping-cart ml-3"></i></a>

                              </span> --}}

                            </div>

                          </div>

                        </div>
                        <!-- Card content -->

                      </div>

                    </div>
                   
                  </div>
                  <!-- Card -->
                
                </div>
                <!-- Grid column -->
                @endforeach
                <!-- Grid column -->
                {{-- <div class="col-lg-6 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-6 d-flex align-items-center">

                        <!-- Card image -->
                        <div class="view overlay">

                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                            class="img-fluid" alt="">

                          <a>

                            <div class="mask rgba-white-slight"></div>

                          </a>

                        </div>
                        <!-- Card image -->

                      </div>

                      <!-- Grid column -->
                      <div class="col-6 pl-0">

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Category & Title -->
                          <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPad Pro</a></strong>
                          </h5>

                          <span class="badge badge-info mb-2">NEW</span>

                          <!-- Rating -->
                          <ul class="rating">

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star grey-text"></i></li>

                          </ul>

                          <!-- Card footer -->
                          <div class="card-footer pb-0">

                            <div class="row mb-0">

                              <span class="float-left"><strong>1179$</strong></span>

                              <span class="float-right">

                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                    class="fas fa-shopping-cart ml-3"></i></a>

                              </span>

                            </div>

                          </div>

                        </div>
                        <!-- Card content -->

                      </div>

                    </div>

                  </div>
                  <!-- Card -->

                </div> --}}
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              {{-- <div class="row">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-6 d-flex align-items-center">

                        <!-- Card image -->
                        <div class="view overlay">

                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg"
                            class="img-fluid" alt="">

                          <a>

                            <div class="mask rgba-white-slight"></div>

                          </a>

                        </div>

                        <!-- Card image -->
                      </div>

                      <!-- Grid column -->
                      <div class="col-6 pl-0">

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Category & Title -->
                          <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Sony TV
                                RT56</a></strong></h5>

                          <span class="badge badge-danger mb-2">bestseller</span>

                          <!-- Rating -->
                          <ul class="rating">

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                          </ul>

                          <!-- Card footer -->
                          <div class="card-footer pb-0">

                            <div class="row mb-0">

                              <span class="float-left"><strong>2339$</strong></span>

                              <span class="float-right">

                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                    class="fas fa-shopping-cart ml-3"></i></a>

                              </span>

                            </div>

                          </div>

                        </div>
                        <!-- Card content -->

                      </div>

                    </div>

                  </div>
                  <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-6 d-flex align-items-center">

                        <!-- Card image -->
                        <div class="view overlay">

                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg"
                            class="img-fluid" alt="">

                          <a>

                            <div class="mask rgba-white-slight"></div>

                          </a>

                        </div>

                        <!-- Card image -->
                      </div>

                      <!-- Grid column -->
                      <div class="col-6 pl-0">

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Category & Title -->
                          <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Philips
                                V56</a></strong></h5>

                          <span class="badge badge-danger mb-2">bestseller</span>

                          <!-- Rating -->
                          <ul class="rating">

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                          </ul>

                          <!-- Card footer -->
                          <div class="card-footer pb-0">

                            <div class="row mb-0">

                              <span class="float-left"><strong>99$</strong></span>

                              <span class="float-right">

                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                    class="fas fa-shopping-cart ml-3"></i></a>

                              </span>

                            </div>

                          </div>

                        </div>
                        <!-- Card content -->

                      </div>

                    </div>

                  </div>
                  <!-- Card -->

                </div>
                <!-- Grid column -->

              </div> --}}
              <!-- Grid row -->

              <!-- Grid row -->
              {{-- <div class="row">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-6 d-flex align-items-center">

                        <!-- Card image -->
                        <div class="view overlay">

                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg"
                            class="img-fluid" alt="">

                          <a>

                            <div class="mask rgba-white-slight"></div>

                          </a>

                        </div>
                        <!-- Card image -->

                      </div>

                      <!-- Grid column -->
                      <div class="col-6 pl-0">

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Category & Title -->
                          <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Dell V756</a></strong>
                          </h5>

                          <span class="badge badge-info mb-2">NEW</span>

                          <!-- Rating -->
                          <ul class="rating">

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                          </ul>

                          <!-- Card footer -->
                          <div class="card-footer pb-0">

                            <div class="row mb-0">

                              <span class="float-left"><strong>1339$</strong></span>

                              <span class="float-right">

                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                    class="fas fa-shopping-cart ml-3"></i></a>

                              </span>

                            </div>

                          </div>

                        </div>
                        <!-- Card content -->

                      </div>

                    </div>

                  </div>

                  <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-6 d-flex align-items-center">

                        <!-- Card image -->
                        <div class="view overlay">

                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg"
                            class="img-fluid" alt="">

                          <a>

                            <div class="mask rgba-white-slight"></div>

                          </a>

                        </div>
                        <!-- Card image -->

                      </div>

                      <!-- Grid column -->
                      <div class="col-6 pl-0">

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Category & Title -->
                          <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Canon
                                D-67i</a></strong></h5>

                          <span class="badge badge-info mb-2">NEW</span>

                          <!-- Rating -->
                          <ul class="rating">

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                            <li><i class="fas fa-star blue-text"></i></li>

                          </ul>

                          <!-- Card footer -->
                          <div class="card-footer pb-0">

                            <div class="row mb-0">

                              <span class="float-left"><strong>1899$</strong></span>

                              <span class="float-right">

                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                    class="fas fa-shopping-cart ml-3"></i></a>

                              </span>

                            </div>

                          </div>

                        </div>
                        <!-- Card content -->

                      </div>

                    </div>

                  </div>
                  <!-- Card -->

                </div>
                <!-- Grid column -->

              </div> --}}
              <!-- Grid row -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section small products -->

        <!-- Section advertising 1 -->
        {{-- <section>

          <!-- Grid row -->
          <div class="row mt-4 pt-1">

            <!-- Grid column -->
            <div class="col-lg-8 col-md-12 mb-3 mb-md-4 pb-lg-2">

              <!-- Image -->
              <div class="view zoom z-depth-1">

                <img src="https://mdbootstrap.com/img/Photos/Others/product2.jpg" class="img-fluid"
                  alt="sample image">

                <div class="mask rgba-white-light">

                  <div class="dark-grey-text d-flex align-items-center pt-4 ml-lg-3 ml-3 pl-lg-3 pl-md-5 pl-3">

                    <div>

                      <a><span class="badge badge-danger">bestseller</span></a>

                      <h2 class="card-title font-weight-bold pt-2"><strong>This is news title</strong></h2>

                      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

                      <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">Read more</a>

                    </div>

                  </div>

                </div>

              </div>
              <!-- Image -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-4">

              <!-- Image -->
              <div class="view zoom z-depth-1 photo">

                <img src="https://mdbootstrap.com/img/Photos/Others/product3.jpg" class="img-fluid"
                  alt="sample image">

                <div class="mask rgba-stylish-strong">

                  <div class="white-text flex-center text-center">

                    <div class="">

                      <a><span class="badge badge-info">NEW</span></a>

                      <h2 class="card-title font-weight-bold pt-2"><strong>This is news title</strong></h2>

                      <p class="">Lorem ipsum dolor sit amet, consectetur. </p>

                      <a class="btn btn-info btn-sm btn-rounded"></i> Read more</a>

                    </div>

                  </div>

                </div>

              </div>
              <!-- Image -->
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section> --}}
        <!-- Section advertising 1 -->

        <!-- Section products -->
        {{-- <section>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg"
                    class="img-fluid" alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Samsung V54</a></strong></h5>

                  <span class="badge grey white-text mb-2">best rated</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>1439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Dell 786i</a></strong></h5>

                  <span class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>1439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iMac 27"</a></strong></h5>

                  <span class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>3439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section> --}}
        <!-- Section products -->

        <!-- Section product list -->
        {{-- <section class="mb-5">

          <div class="row">

            <!-- New Products -->
            <div class="col-lg-4 col-md-12 col-12 pt-4">

              <hr>

              <h5 class="text-center font-weight-bold dark-grey-text"><strong>New Products</strong></h5>

              <hr>

              <!-- First row -->
              <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a class="pt-5"><strong>iPad</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$849</strong></h6>

                </div>

              </div>
              <!-- First row -->

              <!-- Second row -->
              <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Headphones</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$49</strong> <span
                      class="grey-text"><small><s>$89</s></small></span></h6>

                </div>

              </div>
              <!-- Second row -->

              <!-- Third row -->
              <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>iMac 27"</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$1449</strong> <span
                      class="grey-text"><small><s>$2189</s></small></span></h6>

                </div>

              </div>
              <!-- Third row -->

            </div>
            <!-- New Products -->

            <!-- Top Sellers -->
            <div class="col-lg-4 col-md-12 pt-4">

              <hr>

              <h5 class="text-center font-weight-bold dark-grey-text"><strong>Top Sellers</strong></h5>

              <hr>


              <!-- First row -->
              <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Dell V-964i</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$649</strong> <span
                      class="grey-text"><small><s>$889</s></small></span></h6>

                </div>

              </div>
              <!-- First row -->

              <!-- Second row -->
              <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Asus GT67i</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$1249</strong> <span
                      class="grey-text"><small><s>$1489</s></small></span></h6>

                </div>

              </div>
              <!-- Second row -->

              <!-- Third row -->
              <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Headphones</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$49</strong> <span
                      class="grey-text"><small><s>$89</s></small></span></h6>

                </div>

              </div>
              <!-- Third row -->

            </div>
            <!-- Top Sellers -->

            <!-- Random Products -->
            <div class="col-lg-4 col-md-12 pt-4">

              <hr>

              <h5 class="text-center font-weight-bold dark-grey-text"><strong>Random products</strong></h5>

              <hr>

              <!-- First row -->
              <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Dell 786i</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$749</strong> <span
                      class="grey-text"><small><s>$889</s></small></span></h6>

                </div>

              </div>
              <!-- First row -->

              <!-- Second row -->
              <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Samsung V54</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$249</strong> <span
                      class="grey-text"><small><s>$489</s></small></span></h6>

                </div>

              </div>
              <!-- Second row -->

              <!-- Third row -->
              <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg"
                      class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a><strong>Canon 675-D</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$2149</strong> <span
                      class="grey-text"><small><s>$2489</s></small></span></h6>

                </div>

              </div>
              <!-- Third row -->

            </div>
            <!-- Random Products -->

          </div>

        </section> --}}
        <!-- Section product list -->

        <!-- Grid row -->
        {{-- <div class="row">

          <!-- Grid column -->
          <div class="col-12">

            <!-- Image -->
            <div class="view z-depth-1">

              <img src="https://mdbootstrap.com/img/Photos/Others/ecommerce5.jpg" class="img-fluid"
                alt="sample image">

              <div class="mask rgba-stylish-slight">

                <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">

                  <div>

                    <a>

                      <span class="badge badge-primary">SALE</span>

                    </a>

                    <h2 class="card-title font-weight-bold pt-md-3 pt-1">

                      <strong>Sale from 20% to 50% on every tablet!

                      </strong>

                    </h2>

                    <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">Lorem ipsum dolor sit amet, consectetur

                      adipisicing elit. </p>

                    <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">Read more</a>

                  </div>

                </div>

              </div>

            </div>
            <!-- Image -->

          </div>
          <!-- Grid column -->

        </div> --}}

        <!-- Grid row -->
        {{-- <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>LAST ITEMS</strong></h4>

        <hr class="mb-5"> --}}

        <!-- Grid row -->
        {{-- <div class="row">

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card card-ecommerce">

              <!-- Card image -->
              <div class="view overlay">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                  alt="">

                <a>

                  <div class="mask rgba-white-slight"></div>

                </a>

              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body">

                <!-- Category & Title -->
                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5>
                <span class="badge badge-danger mb-2">bestseller</span>

                <!-- Rating -->
                <ul class="rating">

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                </ul>

                <!-- Card footer -->
                <div class="card-footer pb-0">

                  <div class="row mb-0">

                    <span class="float-left"><strong>1439$</strong></span>

                    <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                          class="fas fa-shopping-cart ml-3"></i></a>

                    </span>

                  </div>

                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card card-ecommerce">

              <!-- Card image -->
              <div class="view overlay">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" class="img-fluid"
                  alt="">

                <a>

                  <div class="mask rgba-white-slight"></div>

                </a>

              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body">

                <!-- Category & Title -->
                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5>
                <span class="badge badge-danger mb-2">bestseller</span>

                <!-- Rating -->
                <ul class="rating">

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                </ul>

                <!-- Card footer -->
                <div class="card-footer pb-0">

                  <div class="row mb-0">

                    <span class="float-left"><strong>1439$</strong></span>

                    <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                          class="fas fa-shopping-cart ml-3"></i></a>

                    </span>

                  </div>

                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card card-ecommerce">

              <!-- Card image -->
              <div class="view overlay">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid"
                  alt="">

                <a>

                  <div class="mask rgba-white-slight"></div>

                </a>

              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body">

                <!-- Category & Title -->
                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone</a></strong></h5><span
                  class="badge badge-info mb-2">new</span>

                <!-- Rating -->
                <ul class="rating">

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                </ul>

                <!-- Card footer -->
                <div class="card-footer pb-0">

                  <div class="row mb-0">

                    <span class="float-left"><strong>1439$</strong></span>

                    <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                          class="fas fa-shopping-cart ml-3"></i></a>

                    </span>

                  </div>

                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card card-ecommerce">

              <!-- Card image -->
              <div class="view overlay">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid"
                  alt="">

                <a>

                  <div class="mask rgba-white-slight"></div>

                </a>

              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body">

                <!-- Category & Title -->
                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iMac</a></strong></h5><span
                  class="badge badge-danger mb-2">bestseller</span>

                <!-- Rating -->
                <ul class="rating">

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star blue-text"></i></li>

                  <li><i class="fas fa-star grey-text"></i></li>

                </ul>

                <!-- Card footer -->
                <div class="card-footer pb-0">

                  <div class="row mb-0">

                    <span class="float-left"><strong>1439$</strong></span>

                    <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                          class="fas fa-shopping-cart ml-3"></i></a>

                    </span>

                  </div>

                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div> --}}
        <!-- Grid row -->

        <!-- Grid row -->
        {{-- <div class="row justify-content-center mb-4">

          <!-- Pagination -->
          <nav class="mb-4">

            <ul class="pagination pagination-circle pg-blue mb-0">

              <!-- First -->
              <li class="page-item disabled clearfix d-none d-md-block"><a
                  class="page-link waves-effect waves-effect">First</a></li>

              <!-- Arrow left -->
              <li class="page-item disabled">

                <a class="page-link waves-effect waves-effect" aria-label="Previous">

                  <span aria-hidden="true">«</span>

                  <span class="sr-only">Previous</span>

                </a>

              </li>

              <!-- Numbers -->
              <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>

              <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>

              <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>

              <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>

              <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

              <!-- Arrow right -->
              <li class="page-item">

                <a class="page-link waves-effect waves-effect" aria-label="Next">

                  <span aria-hidden="true">»</span>

                  <span class="sr-only">Next</span>

                </a>

              </li>

              <!-- First -->
              <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a>
              </li>

            </ul>

          </nav>
          <!-- Pagination -->

        </div> --}}
        <!-- Grid row -->

      </section>
      <!-- Products Grid -->

    </div>
    <!-- Content -->

  </div>

</div>

@endsection
