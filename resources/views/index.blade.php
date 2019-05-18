<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Artrium</title>

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
    <!-- bootsratp -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- myCss -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


</head>
<body>
        <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>
      <!-- Preloader End -->
         
     
     <header>
         <div class="navDiv">
            <nav class="navbar navbar-expand-lg navbar-light">   <!-- "fixed-top" class for fixed in the top -->
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
        <!--  <div id="">   try to put image on top of video
           <img src="{{ asset('image/logo/logo.jpg') }}">
         </div> -->
      <div class="overlay"></div>
      <video poster="{{ asset('video/bg.jpg') }}" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('video/Mongolian.mp4') }}" type="video/mp4">
      </video>

    </header>
    <div class="container-fluid first">
      <div id="content" class="row content">
          <div class="col-md-6 align-self-center">   
              <p class=" text-justify text-center">
                  Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
              </p>
          </div>
          <div  class="col-md-6" >
              
          </div>
      </div>
      <div>
          <div>
              <img  class="gradient-color-right" src="{{asset('image/thai-back.png')}}">
          </div>
          <div class="overlay-right">
              <img class="img-fluid rounded float-right myImg" alt="Responsive image" src="{{asset('image/thai-2.png')}}">
          </div>
      </div>
  </div>
  

  <div class="container-fluid second">
      <div id="content-two" class="row content-two">
          <div class="col-md-6">
              
          </div>
          <div class="col-md-6 align-self-center">   
              <p class=" text-justify text-center">
                  Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
              </p>
          </div>
      </div>
      <div>
          <div >
              <img class="gradient-color-left gradient-color" alt="Responsive image" src="{{asset('image/thai-back.png')}}">
          </div>
          <div class="overlay-left">
              <img class="img-fluid rounded float-left myImg" alt="Responsive image" src="{{asset('image/thai-2.png')}}">
          </div>
      </div>
  </div>
  

  <div class="container-fluid third">
          <div id="content" class="row content">
              <div class="col-md-6 align-self-center">   
                  <p class=" text-justify text-center">
                      Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                  </p>
              </div>
              <div class="col-md-6">
                  
              </div>
          </div>
          <div>
              <div>
                  <img  class="gradient-color-right" src="{{asset('image/thai-back.png')}}">
              </div>
              <div class="overlay-right">
                  <img class="img-fluid rounded float-right myImg" alt="Responsive image" src="{{asset('image/thai-2.png')}}">
              </div>
          </div>
      </div>
      
      
      <div class="container-fluid fourth">
              <div id="content-two" class="row content-two">
                  <div class="col-md-6">
                      
                  </div>
                  <div class="col-md-6 align-self-center">   
                      <p class=" text-justify text-center">
                          Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                      </p>
                  </div>
              </div>
              <div>
                  <div >
                      <img class="gradient-color-left gradient-color" alt="Responsive image" src="{{asset('image/thai-back.png')}}">
                  </div>
                  <div class="overlay-left">
                      <img class="img-fluid rounded float-left myImg" alt="Responsive image" src="{{asset('image/thai-2.png')}}">
                  </div>
              </div>
          </div>
          
      

  





<!-- 

       
       <div class="row" id="footer">
          <div class="col-sm-5 align-self-centre">
              <p class=" text-justify text-center">
                  Muffin I love jelly beans pudding. I love donut chocolate bar topping. Apple pie croissant toffee lollipop lollipop fruitcake tootsie roll biscuit. Oat cake cookie I love bonbon apple pie pudding oat cake carrot cake marzipan.
              </p>
          </div>
          <div class="col-sm-2">
              <a href="https://www.google.com/maps/place/The+Atrium+Restaurant/@23.8033073,90.4192192,15z/data=!4m5!3m4!1s0x3755c7b1c6ccc04b:0xa6f2a07bd56571af!8m2!3d23.802477!4d90.4228988"  target="_blank"><img class="img-fluid "id="location" src="../assets/atruim-location.png" alt=""></a>
          </div>
      </div>




-->



    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- myJS -->
        <script src="{{ asset('js/active.js') }}"></script>
  
</body>
</html>