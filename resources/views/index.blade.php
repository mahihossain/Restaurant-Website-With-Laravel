@extends('layouts.landing')

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Atrium</title>
    <link rel="icon" type="image/ico" href="{{ asset('image/favicon.ico') }}">

    <!-- Galery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />      <!-- font -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat|Courgette|Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
        <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
      <!-- bootsratp -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <!-- myCss -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
               <!-- animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 


</head>
<body>
        <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>
      <!-- Preloader End -->
         
     <!-- Header part satrt -->
     <div class="Div" id="logo_center">
            <nav class="navbar navbar-expand-lg navbar-light wow fadeInDown"data-wow-duration="2s"  data-wow-delay="0s" id="jump">   <!-- "fixed-top" class for fixed in the top -->
              <!-- <a class="navbar-brand" href="#"> 
                <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
              </a> --> <!-- this for logo -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                    <a class="nav-link test" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Catering <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Events <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Our story <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">FAQ <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
                
              </div>
            </nav>
          </div>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('image/galleryimg/F9.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/galleryimg/F9.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/galleryimg/F9.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    




<!-- HEader end -->
    <div class="container-fluid logo_back fixedElement animated bounce logo_ani">
      <div id="logo_center">
        <a href="#jump"><img src="{{ asset('image/logo/logo.png') }}" class="logo_size"></a>
      </div>
    </div>

    <!-- ======================================svg================================================================================================== ---->
    
    {{-- @section('svg')
        
    @endsection --}}
    
    <!-- .........................food highlite start........................... -->
    
    
    <div id="scroll-container" class="scroll-container">
    <div class="container-fluid first" style="height: 100vh">
      <div id="content" class="row content ">
          <div class="col-md-6 align-self-center align">   
              <h2 class=" text-justify text-center thai-h2 wow fadeIn " data-wow-duration="3s"  data-wow-delay=".2s">Thai</h2>
              <p class=" text-justify text-center food thai-p wow fadeIn " data-wow-duration="1.5s"  data-wow-delay=".5s">
                Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                Bear claw candy wafer I love pie tart. Lollipop bear claw oat cake dragée oat cake muffin. Pie soufflé cupcake jelly-o.
                  
              </p>
              <div class="col-md-3 col-sm-3 col-xs-6 offset-button wow fadeInUp " data-wow-duration="1.2s"  data-wow-delay=".6s"> <a href="#" class="btn btn-sm animated-button-thai btn-thai ">MENU</a> </div>
          </div>
          <div  class="col-md-6" >
              
          </div>
      </div>
      <div class="gradient-color-right-thai wow slideInLeft " data-wow-duration="2s" data-wow-delay=".1s">
          
      </div>
      <div class="overlay-right-thai wow rotateInUpLeft " data-wow-duration="1.5s"  data-wow-delay=".3s">
        <img class="img-fluid rounded float-right myImgThai" alt="Responsive image" src="{{asset('image/foodhighlite/thai.png')}}">
    </div>
  </div>
  

  <div class="container-fluid second">
      <div id="content-two" class="row content-two">
          <div class="col-md-6">
              
          </div>
          <div class="col-md-6 align-self-center align"> 
              <h2 class=" text-justify text-center indian-h2 wow fadeIn " data-wow-duration="3s"  data-wow-delay=".2s">Indian</h2>  
              <p class=" text-justify text-center food indian-p wow fadeIn " data-wow-duration="1.5s"  data-wow-delay=".5s">
                Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                Bear claw candy wafer I love pie tart. Lollipop bear claw oat cake dragée oat cake muffin. Pie soufflé cupcake jelly-o.
                
              </p>
              <div class="col-md-3 col-sm-3 col-xs-6 offset-button wow fadeInUp " data-wow-duration="1.2s"  data-wow-delay=".6s"> <a href="#" class="btn btn-sm animated-button-indian btn-indi">MENU</a> </div>

          </div>
      </div>
      <div class= "gradient-color-left-indian wow slideInRight" data-wow-duration="2s"  data-wow-delay=".1s">
          
      </div>
      <div class="overlay-left">
        <img class="img-fluid rounded float-left myImgIndian wow rotateInUpRight" data-wow-duration="1.5s"  data-wow-delay=".3s" alt="Responsive image" src="{{asset('image/foodhighlite/indian.png')}}">
    </div>
  </div>
  

  <div class="container-fluid third">
          <div id="content" class="row content">
              <div class="col-md-6 align-self-center align">  
                  <h2 class=" text-justify text-center continental-h2 wow fadeIn " data-wow-duration="3s"  data-wow-delay=".2s">Continental</h2> 
                  <p class=" text-justify text-center food continental-p wow fadeIn " data-wow-duration="1.5s"  data-wow-delay=".5s">
                    Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                    Bear claw candy wafer I love pie tart. Lollipop bear claw oat cake dragée oat cake muffin. Pie soufflé cupcake jelly-o.
                    
                  </p>
                  <div class="col-md-3 col-sm-3 col-xs-6 offset-button wow fadeInUp " data-wow-duration="1.2s"  data-wow-delay=".6s"> <a href="#" class="btn btn-sm animated-button-continental btn-con">MENU</a> </div>
              </div>
              <div class="col-md-6">
                  
              </div>
          </div>
          <div class="gradient-color-right-continental wow slideInLeft " data-wow-duration="2s"  data-wow-delay=".1s">
              
          </div>
          <div class="overlay-right-continental" >
            <img class="img-fluid rounded float-right myImgContinental wow rotateInUpLeft " data-wow-duration="1.5s"  data-wow-delay=".3s" alt="Responsive image" src="{{asset('image/foodhighlite/continental.png')}}">
        </div>
      </div>
      
<!-- 
............................................gallery .................-->
<div id="logo_center">
  <div class="gallery-block compact-gallery fifth">
            <div class="container-fluid gallery-size">
              <div class="heading  text-center wow zoomIn " data-wow-offset="10" data-wow-duration="1.5s"  data-wow-delay=".1s">
                <h2>Our Memories</h2>
              </div>
              
              <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F1.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F1.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F2.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F2.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F3.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F3.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInLeft" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F4.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F4.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeIn" data-wow-duration="2s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F5.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F5.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInRight" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F6.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F6.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F7.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F7.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F8.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F8.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{asset('image/galleryimg/F9.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F9.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
</div>
          <!--........................................... review Start .......................................................-->


          <div class="container seventh">
            <div class="row align-self-center">
              <div class="col-sm-12">
                <h2 class="review-header wow zoomIn " data-wow-offset="12" data-wow-duration="1.5s"  data-wow-delay=".1s">What Our Customers Say About Us</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>   
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                    <div class="item carousel-item active">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="testimonial-wrapper">
                            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
                            <div class="media">
                              <div class="media-left d-flex mr-3">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg" alt="">                   
                              </div>
                              <div class="media-body">
                                <div class="overview">
                                  <div class="name"><b>Paula Wilson</b></div>
                                  <div class="details">Media Analyst / SkyNet</div>
                                  <div class="star-rating">
                                    <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                  </div>
                                </div>                    
                              </div>
                            </div>
                          </div>                
                        </div>
                        <div class="col-sm-6">
                          <div class="testimonial-wrapper">
                            <div class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus, metus id mi gravida.</div>
                            <div class="media">
                              <div class="media-left d-flex mr-3">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg" alt="">                   
                              </div>
                              <div class="media-body">
                                <div class="overview">
                                  <div class="name"><b>Antonio Moreno</b></div>
                                  <div class="details">Web Developer / SoftBee</div>
                                  <div class="star-rating">
                                    <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                
                        </div>
                      </div>      
                    </div>
                    <div class="item carousel-item">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="testimonial-wrapper">
                            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
                            <div class="media">
                              <div class="media-left d-flex mr-3">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt="">                   
                              </div>
                              <div class="media-body">
                                <div class="overview">
                                  <div class="name"><b>Michael Holz</b></div>
                                  <div class="details">Web Developer / DevCorp</div>                      
                                  <div class="star-rating">
                                    <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                
                        </div>
                        <div class="col-sm-6">
                          <div class="testimonial-wrapper">
                            <div class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus, metus id mi gravida.</div>
                            <div class="media">
                              <div class="media-left d-flex mr-3">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/4.jpg" alt="">                   
                              </div>
                              <div class="media-body">
                                <div class="overview">
                                  <div class="name"><b>Mary Saveley</b></div>
                                  <div class="details">Graphic Designer / MarsMedia</div>
                                  <div class="star-rating">
                                    <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                  </div>
                                </div>                    
                              </div>
                            </div>
                          </div>                
                        </div>
                      </div>      
                    </div>
                    <div class="item carousel-item">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="testimonial-wrapper">
                            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
                            <div class="media">
                              <div class="media-left d-flex mr-3">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/5.jpg" alt="">                   
                              </div>
                              <div class="media-body">
                                <div class="overview">
                                  <div class="name"><b>Martin Sommer</b></div>
                                  <div class="details">SEO Analyst / RealSearch</div>
                                  <div class="star-rating">
                                    <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                  </div>
                                </div>                    
                              </div>
                            </div>
                          </div>                
                        </div>
                        <div class="col-sm-6">
                          <div class="testimonial-wrapper">
                            <div class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus, metus id mi gravida.</div>
                            <div class="media">
                              <div class="media-left d-flex mr-3">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/6.jpg" alt="">                   
                              </div>
                              <div class="media-body">
                                <div class="overview">
                                  <div class="name"><b>John Williams</b></div>
                                  <div class="details">Web Designer / UniqueDesign</div>
                                  <div class="star-rating">
                                    <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                  </div>
                                </div>                    
                              </div>
                            </div>
                          </div>                
                        </div>
                      </div>      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
             

<!--..................................... Footer ...............................-->
            <section class="eighth">
              <div class="container-fluid">

                <div class="row parallax total-review">
                  <div class="col-sm-4 left-footer wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s" >
                    <div class="mapouter"><div class="gmap_canvas embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item"  id="gmap_canvas" src="https://maps.google.com/maps?q=artrium&t=&z=15&ie=UTF8&iwloc=&output=embed" scrolling="yes" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:97%;width:97%;}.gmap_canvas {overflow:hidden;background:none!important;height:97%;width:97%;border-radius: 0%;}</style></div>
                  </div>
                   <div class="col-sm-4 footer-center ">
                    
                      <div class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s">
                        <i class="fa fa-map-marker"></i>
                        <p><span>C Block, Baridhara</span> Dhaka, Bangladesh</p>
                      </div>

                      <div class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s">
                        <i class="fa fa-phone"></i>
                        <p>+01 771881718</p>
                      </div>

                      <div class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s">
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:support@company.com">support@company.com</a></p>
                      </div>
                  </div>
                  <div class="col-sm-4 right-footer">
                    <p class="footer-company-about wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s">
                      <span>Atrium</span>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irur8e dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in .
                    </p>
                    <div class="footer-icons">
                      <a href="#" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s""><i class="fa fa-twitter"></i></a>
                      <a href="#" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s""><i class="fa fa-linkedin"></i></a>
                      <a href="#" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s""><i class="fa fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          </div>

    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        {{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!--  {{-- library for gallery --}} -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <!-- gallery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.compact-gallery',{animation:'slideIn'});
        </script>
            <!-- wow.js scrool animate -->
         <script src="{{ asset('js/wow/wow.min.js') }}"></script>

    <!-- myJS -->
        <script src="{{ asset('js/active.js') }}"></script>

      
  
</body>
</html>