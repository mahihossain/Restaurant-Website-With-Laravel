@extends('layouts.landing')

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Atrium</title>
    <link rel="icon" type="image/ico" href="{{ secure_asset('image/favicon.ico') }}">

    <!-- Galery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />      <!-- font -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Caveat|Courgette|Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

      <!-- bootsratp -->
        <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
      <!-- myCss -->
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/responsive.css') }}">
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
     <div class="Div " id="logo_center">
            <nav class="navbar navbar-expand-lg navbar-light fixed_top wow fadeInDown bg-dark"data-wow-duration="1s"  data-wow-delay="0s" id="jump">   <!-- "fixed-top" class for fixed in the top -->
              <!-- <a class="navbar-brand" href="#"> 
                <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
              </a> --> <!-- this for logo -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <a class="navbar-brand navbar_brand"><img src="{{ secure_asset('image/logo/logo.png') }}" class="logo_size"></a>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-2">
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
   <div class="Div biglogounder_nav">
          <div id="logo_center" >
            <div class="big_logo">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1012 360" style="enable-background:new 0 0 1012 360;" xml:space="preserve">
                <style type="text/css">
                .st0{fill:rgba(0, 0, 0, 0.5);stroke:#fdf9ef;stroke-width:4.5;stroke-linejoin:round;stroke-miterlimit:10;}
                </style>
                <g>
                  <path class="st0" d="M473.795,152.924H361.326c-5.795,0-10.226,1.477-13.281,4.435c-3.061,2.959-4.586,6.993-4.586,12.102
                    c0,4.931,1.466,8.895,4.404,11.899c2.943,3.004,7.427,4.502,13.463,4.502h38.603v143.194c0,8.152,1.648,14.251,4.944,18.285
                    s7.566,6.051,12.81,6.051c5.158,0,9.37-1.999,12.628-5.984c3.253-3.992,4.88-10.103,4.88-18.352V185.862h38.603
                    c6.036,0,10.563-1.498,13.581-4.502c3.018-3.004,4.527-6.969,4.527-11.899c0-4.928-1.488-8.919-4.463-11.966
                    C484.459,154.449,479.911,152.924,473.795,152.924z"/>
                    <path class="st0" d="M580.784,209.93c-6.432-3.853-13.067-5.782-19.895-5.782s-12.291,1.929-16.38,5.782
                      c-4.094,3.856-8.085,9.547-11.976,17.075c-0.241-7.527-1.546-13.219-3.933-17.075c-2.381-3.853-6.271-5.782-11.676-5.782
                      c-10.563,0-15.839,8.249-15.839,24.738v102.188c0,7.349,1.504,12.905,4.527,16.667c3.018,3.768,6.865,5.652,11.553,5.652
                      c4.768,0,8.695-1.86,11.799-5.58c3.093-3.72,4.645-9.3,4.645-16.739V300.42c0-11.027,0.31-20.375,0.952-28.038
                      c0.631-7.663,1.787-14.27,3.457-19.831c1.664-5.556,4.003-9.747,7.026-12.567c3.018-2.826,6.908-4.239,11.676-4.239
                      c3.494,0,7.524,0.833,12.093,2.488c4.564,1.655,7.443,2.488,8.637,2.488c3.173,0,6.138-1.461,8.877-4.372
                      c2.74-2.911,4.11-6.606,4.11-11.09C590.437,218.894,587.216,213.785,580.784,209.93z"/>
                      <path class="st0" d="M624.272,204.147c-4.768,0-8.637,1.839-11.617,5.513c-2.975,3.678-4.463,9.143-4.463,16.404v105.008
                        c0,7.174,1.488,12.681,4.463,16.534c2.981,3.853,6.849,5.785,11.617,5.785c4.768,0,8.695-1.884,11.799-5.652
                        c3.093-3.762,4.645-9.318,4.645-16.667V224.99c0-6.543-1.552-11.652-4.645-15.329C632.967,205.986,629.04,204.147,624.272,204.147z
                        "/>
                        <path class="st0" d="M624.63,151.176c-4.366,0-8.203,1.679-11.494,5.042c-3.302,3.361-4.944,7.642-4.944,12.838
                          c0,5.737,1.605,10.175,4.821,13.312c3.216,3.137,7.09,4.704,11.617,4.704c4.366,0,8.139-1.591,11.318-4.774
                          c3.173-3.179,4.768-7.597,4.768-13.243c0-5.824-1.632-10.263-4.885-13.309C632.571,152.7,628.836,151.176,624.63,151.176z"/>
                          <path class="st0" d="M773.197,204.147c-4.848,0-8.776,1.839-11.794,5.513c-3.023,3.678-4.527,9.143-4.527,16.404v44.638
                            c0,17.567-0.92,28.956-2.745,34.149c-2.221,5.918-5.758,10.713-10.6,14.384c-4.848,3.678-10.006,5.513-15.486,5.513
                            c-5.645,0-10.114-1.636-13.41-4.909c-3.296-3.267-5.576-7.796-6.849-13.575c-1.273-5.785-1.905-12.929-1.905-21.45v-58.751
                            c0-7.262-1.509-12.727-4.527-16.404c-3.018-3.675-6.988-5.513-11.911-5.513c-4.848,0-8.744,1.818-11.676,5.447
                            c-2.943,3.629-4.409,9.122-4.409,16.471v72.737c0,14.614,2.023,25.816,6.073,33.612c3.414,6.455,8.241,11.522,14.475,15.193
                            c6.239,3.672,13.287,5.513,21.147,5.513c6.518,0,12.313-0.924,17.396-2.76c5.083-1.836,9.771-4.638,14.057-8.4
                            c4.292-3.762,8.38-8.424,12.275-13.98v4.704c0,6.54,1.445,11.625,4.345,15.26c2.9,3.629,6.571,5.447,11.023,5.447
                            c4.447,0,8.08-1.751,10.9-5.242c2.82-3.503,4.233-8.744,4.233-15.737V226.065c0-7.349-1.477-12.841-4.409-16.471
                            C781.93,205.965,778.04,204.147,773.197,204.147z"/>
                            <path class="st0" d="M1001.826,227.276c-3.178-7.349-7.984-12.998-14.416-16.942c-6.432-3.943-14.095-5.918-22.993-5.918
                              c-7.625,0-14.576,1.818-20.853,5.447c-6.271,3.629-12.147,9.209-17.626,16.739c-3.815-7.44-8.658-12.995-14.539-16.673
                              c-5.881-3.675-12.907-5.513-21.089-5.513c-7.861,0-15.01,1.797-21.447,5.38c-6.432,3.584-12.468,9.188-18.108,16.806v-3.496
                              c0-5.915-1.488-10.553-4.463-13.916c-2.981-3.361-6.694-5.042-11.141-5.042c-4.613,0-8.326,1.797-11.141,5.381
                              c-2.82,3.584-4.227,8.829-4.227,15.731v105.005c0,7.621,1.563,13.382,4.704,17.277c3.136,3.901,7.165,5.852,12.093,5.852
                              c5.003,0,9.033-1.951,12.093-5.852c3.055-3.895,4.586-9.656,4.586-17.277v-49.614c0-15.411,1.686-27.247,5.062-35.496
                              c3.376-8.243,10.386-12.367,21.03-12.367c5.319,0,9.214,1.637,11.676,4.91c2.462,3.273,3.97,7.458,4.527,12.567
                              s0.835,12.283,0.835,21.516v58.485c0,7.711,1.531,13.491,4.586,17.343s7.047,5.785,11.97,5.785c5.083,0,9.177-1.932,12.275-5.785
                              s4.645-9.632,4.645-17.343v-48.805c0-15.689,1.193-26.619,3.574-32.802c2.146-4.843,5.142-8.696,8.995-11.57
                              c3.853-2.862,7.925-4.3,12.216-4.3c5.319,0,9.289,1.618,11.911,4.843c2.622,3.225,4.227,7.21,4.827,11.963
                              c0.594,4.753,0.888,11.069,0.888,18.956v61.716c0,7.621,1.573,13.382,4.709,17.277c3.136,3.901,7.17,5.852,12.093,5.852
                              c5.083,0,9.172-1.932,12.27-5.785c3.098-3.853,4.65-9.632,4.65-17.343v-71.662C1006,244.35,1004.609,233.909,1001.826,227.276z"/>
                              <path class="st0" d="M169.314,146.062c-52.373-25.093-99.235-23.072-99.235-23.072c-21.918,12.367-5.479,37.102-5.479,37.102
                                c28.918,0,54.902,7.899,77.95,20.489L9.805,351.786h60.274L177.64,204.847c67.105,56.647,100.66,146.938,100.66,146.938h38.356
                                V24.051L278.299,5.5L169.314,146.062z M278.299,259.031c-19.56-42.308-45.909-71.48-73.276-91.592l73.276-100.101V259.031z"/>
                              </g>
                            </svg>
                          </div>
                          
                        </div>
                      </div>

        <div class="">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 " src="{{secure_asset('image/header/header.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{secure_asset('image/galleryimg/F9.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{secure_asset('image/galleryimg/F9.jpg')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev slide_arrow" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next slide_arrow" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
          
    



<!-- HEader end -->
    {{-- <div id="logo_top_left" class="logo_back animated bounce logo_ani">
      <div class="logo_position" id="logo_center">
        <a href="#jump"><img src="{{ secure_asset('image/logo/logo.png') }}" class="logo_size"></a>
      </div>
    </div> --}}

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
        <img class="img-fluid rounded float-right myImgThai" alt="Responsive image" src="{{secure_asset('image/foodhighlite/thai.png')}}">
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
        <img class="img-fluid rounded float-left myImgIndian wow rotateInUpRight" data-wow-duration="1.5s"  data-wow-delay=".3s" alt="Responsive image" src="{{secure_asset('image/foodhighlite/indian.png')}}">
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
            <img class="img-fluid rounded float-right myImgContinental wow rotateInUpLeft " data-wow-duration="1.5s"  data-wow-delay=".3s" alt="Responsive image" src="{{secure_asset('image/foodhighlite/continental.png')}}">
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
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F1.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F1.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F2.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F2.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInDown" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F3.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F3.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInLeft" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F4.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F4.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeIn" data-wow-duration="2s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F5.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F5.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInRight" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F6.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F6.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F7.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F7.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F8.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F8.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay=".2s">
                  <a class="lightbox" href="{{secure_asset('image/galleryimg/F9.jpg')}}">
                    <img class="img-fluid image" src="{{secure_asset('image/galleryimg/F9.jpg')}}">
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
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="far fa-star-half-alt"></i></li>
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
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="far fa-star"></i></li>
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
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="far fa-star"></i></li>
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
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="far fa-star"></i></li>
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
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="far fa-star"></i></li>
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
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                      <li class="list-inline-item"><i class="far fa-star"></i></li>
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
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span>C Block, Baridhara</span> Dhaka, Bangladesh</p>
                      </div>

                      <div class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s">
                        <i class="fas fa-phone"></i>
                        <p>+01 771881718</p>
                      </div>

                      <div class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s">
                        <i class="fas fa-envelope"></i>
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
                      <a href="https://www.facebook.com/atriumbangladesh/" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://m.me/atriumbangladesh" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s"><i class="fab fa-facebook-messenger"></i></a>
                      <a href="https://www.tripadvisor.com/Restaurant_Review-g293936-d1460212-Reviews-The_Atrium_Restaurant-Dhaka_City_Dhaka_Division.html?m=19905" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s"><i class="fab fa-tripadvisor"></i></a>
                      <a href="#" class="wow fadeIn" data-wow-duration="1s"  data-wow-delay=".1s"><i class="fab fa-linkedin-in"></i></a>
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
         <script src="{{ secure_asset('js/wow/wow.min.js') }}"></script>

    <!-- myJS -->
        <script src="{{ secure_asset('js/active.js') }}"></script>

      
  
</body>
</html>
