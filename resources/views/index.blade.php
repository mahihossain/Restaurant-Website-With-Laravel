<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Artrium</title>

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
    <!-- bootsratp -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <source src="{{ asset('video/food.mp4') }}" type="video/mp4">
      </video>

    </header>

    <div class="container-fluid">
      <div id="reverse" class="row">
          <div class="col col align-self-center">   
              <p class=" text-justify text-center">
                  Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
              </p>
          </div>
          <div id="squeeze" class="col-sm-6">
              <img class="img-fluid rounded float-right myImg left-image" alt="Responsive image" src="{{asset('image/appetizer-bowl-delicious.jpg')}}">
          </div>
      </div>
  </div>

  <div class="container-fluid second">
      <div class="row">
          <div class="col-sm-7">
              <img class="img-fluid rounded float-right myImg right-image" alt="Responsive image" src="{{asset('image/appetizer-bowl-delicious.jpg')}}">
          </div>
          <div class="col col align-self-center">
              <p class=" text-justify text-center">
                  Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
              </p>
          </div>
      </div>
   </div>

   <div class="container-fluid third">
          <div id="reverse" class="row">
              <div class="col col align-self-center">
                  <p class=" text-justify text-center">
                      Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                  </p>
              </div>
              <div class="col-sm-8">
                  <img class="img-fluid rounded float-right myImg right-image" alt="Responsive image" src="{{asset('image/appetizer-bowl-delicious.jpg')}}">
              </div>
          </div>
       </div>

       
      <div class="row" id="footer">
          <div class="col col align-self-center">
              <p class=" text-justify text-center">
                  Muffin I love jelly beans pudding. I love donut chocolate bar topping. Apple pie croissant toffee lollipop lollipop fruitcake tootsie roll biscuit. Oat cake cookie I love bonbon apple pie pudding oat cake carrot cake marzipan.
              </p>
          </div>
          <div class="col">
              <a href="https://www.google.com/maps/place/The+Atrium+Restaurant/@23.8033073,90.4192192,15z/data=!4m5!3m4!1s0x3755c7b1c6ccc04b:0xa6f2a07bd56571af!8m2!3d23.802477!4d90.4228988"  target="_blank"><img class="img-fluid "id="location" src="{{asset('image/atruim-location.png')}}" alt=""></a>
          </div>
          <div class="col col align-self-center">
              <p class=" text-justify text-center">
                  Sugar plum macaroon I love sweet caramels. Muffin dragée halvah pastry gummies biscuit candy canes jelly-o donut. Carrot cake jelly-o croissant I love I love donut cake cheesecake wafer.
              </p>
          </div>
      </div>

      {{-- <section > // should we keep these --DHRUBO
        <div class="container">
            <div class="row">
                 <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
            </div>
            
        </div>
         
      </section>

      <section >
          <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut lmarabore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
      </section> --}}





    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- myJS -->
        <script src="{{ asset('js/active.js') }}"></script>
  
</body>
</html>