@extends('layouts.landing')
@extends('layouts.menuFooter')

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Restaurant</title>
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
      <!-- owl-carousel jquery slide  -->
<!--  <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.theme.default.min.css') }}"> -->
      <!-- gallery -->
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


</head>
<body>
        <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>
      <!-- Preloader End -->

    <header>
      <div class="viewport">
        {{-- Menu --}}
      <!--  tst code for adding image in vdo  --> 
      <div class="overlay"></div>
      <video poster="{{ asset('video/bg.jpg') }}" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="{{ asset('video/mergeFood720p.mp4') }}" type="video/mp4">
      </video>
    </header>
    <!--............ logo ..............-->
    <div class="container-fluid logo_back fixedElement animated bounce logo_ani">
      <div id="logo_center">
        <a href="#jump"><img src="{{ asset('image/logo/logo.png') }}" class="logo_size"></a>
      </div>
    </div>


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
    </div>
<!-- .........................food highlite end........................... -->

    <!-- ............................................gallery -->
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
                    <div class="row wow slideInUp" data-wow-duration="1.5s"  data-wow-delay=".1s">
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




    <!-- ======================================svg================================================================================================== ---->

      </div>
    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        {{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!--  {{-- library for gallery --}} -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
         <!-- lattering -->
        <script src="{{ asset('js/lettering/jquery.lettering-0.6.1.min.js') }}"></script>
        <!-- gallery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.compact-gallery',{animation:'slideIn'});
        </script>
            <!-- wow.js scrool animate -->
         <script src="{{ asset('js/wow/wow.min.js') }}"></script>
          <!-- owl-carousel jquery slide  -->
        <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>


    <!-- myJS -->
        <script src="{{ asset('js/active.js') }}"></script>
        
        
        <script>
            baguetteBox.run('.compact-gallery',{animation:'slideIn'});
        </script>
      
  
</body>
</html>