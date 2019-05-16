<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{ URL::asset('js/active.js') }}"></script>
</head>
<body>
 
    <div id="flip">Click to slide down panel</div>
    <div id="panel">Hello world!</div>
    <div class="container-fluid">
      <div id="reverse" class="row">
          <div class="col col align-self-center">   
              <p class=" text-justify text-center">
                  Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
              </p>
          </div>
          <div id="squeeze" class="col-sm-6">
              <img class="img-fluid rounded float-right myImg left-image" alt="Responsive image" src="{{ URL::asset('images/appetizer-bowl-delicious-1640772.jpg') }}">
          </div>
      </div>
  </div>

  <div class="container-fluid second">
      <div class="row">
          <div class="col-sm-7">
              <img class="img-fluid rounded float-right myImg right-image" alt="Responsive image" src="{{ URL::asset('images/appetizer-bowl-delicious-1640772.jpg') }}">
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
                  <img class="img-fluid rounded float-right myImg right-image" alt="Responsive image" src="{{ URL::asset('images/appetizer-bowl-delicious-1640772.jpg') }}">
              </div>
          </div>
       </div>

       <div >
          <div id="footer" class="row">
              <div class="col col align-self-center">
                  <p class=" text-justify text-center">
                      Muffin I love jelly beans pudding. I love donut chocolate bar topping. Apple pie croissant toffee lollipop lollipop fruitcake tootsie roll biscuit. Oat cake cookie I love bonbon apple pie pudding oat cake carrot cake marzipan.
                  </p>
              </div>
              <div class="col">
                  <a href="https://www.google.com/maps/place/The+Atrium+Restaurant/@23.8033073,90.4192192,15z/data=!4m5!3m4!1s0x3755c7b1c6ccc04b:0xa6f2a07bd56571af!8m2!3d23.802477!4d90.4228988"  target="_blank"><img class="img-fluid "id="location" src={{ URL::asset('images/atrium-square.png') }} alt=""></a>
              </div>
              <div class="col col align-self-center">
                  <p class=" text-justify text-center">
                      Sugar plum macaroon I love sweet caramels. Muffin dragée halvah pastry gummies biscuit candy canes jelly-o donut. Carrot cake jelly-o croissant I love I love donut cake cheesecake wafer.
                  </p>
              </div>
          </div>
       </div>



</body>
</html>