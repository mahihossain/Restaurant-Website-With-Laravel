<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/employee.css') }}">
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
        <header class="booking-header">
                <div class="viewport">
          
                    <div class="Div" id="logo_center">
                      <nav class="navbar navbar-expand-lg navbar-light wow fadeInDown"data-wow-duration="2s"  data-wow-delay=".1s" id="jump">   <!-- "fixed-top" class for fixed in the top -->
                        <!-- <a class="navbar-brand" href="#"> 
                          <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
                        </a> --> <!-- this for logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
          
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                  <li class="nav-item ">
                                    <a class="nav-link test" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('booking') }}">Booking <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('receipt') }}">Receipt <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('employee') }}">Employee <span class="sr-only">(current)</span></a>
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
                </header>
    <div class="container-fluid justify-content-center">
            <h2 class="row justify-content-md-center">Add Employee</h2>
            <div class="row middle">
                <div class="row align-items-center custom">
                        <div class="col img-col">
                                <img class="img-fluid my-img" src="{{asset('image/form-img.jpg')}}" alt="Booking Image">
                            </div>
                            <div class="col justify-content-center form-col">
                                    <form class="custom-form">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="customerName">First Name</label>
                                                    <input type="text" class="form-control" id="customerName" value="John ">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="customerEmail">Middle Name</label>
                                                    <input type="text" class="form-control" id="customerMiddleName" value=" Doe">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="customerEmail">Last Name</label>
                                                    <input type="text" class="form-control" id="customerLastName" value=" Smith">
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="customerFatherName">Father Name</label>
                                                                <input type="text" class="form-control" id="customerFatherName" value="John ">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="customerMotherName">Mother Name</label>
                                                                <input type="text" class="form-control" id="customerMotherName" value=" Doe">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="presentAddress">Present Address</label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputState">House No</label>
                                                        <input type="text" class="form-control" id="House no" value="8">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputState">Location</label>
                                                        <input type="text" class="form-control" id="Location" value="Rampura">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                            <label for="inputState">Village/Street</label>
                                                            <input type="text" class="form-control" id="Village/Street" value="4">
                                                    </div>
                                                </div>
            
                                                <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <label for="inputState">Thana</label>
                                                            <input type="text" class="form-control" id="Thana" value="8">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputState">District</label>
                                                            <input type="text" class="form-control" id="District" value="Rampura">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                                <label for="inputState">Post Code</label>
                                                                <input type="text" class="form-control" id="Post Code" value="4">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="permanentAddress">Permanent Address</label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="inputState">House No</label>
                                                            <input type="text" class="form-control" id="House no" value="8">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="inputState">Location</label>
                                                            <input type="text" class="form-control" id="Location" value="Rampura">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                                <label for="inputState">Village/Street</label>
                                                                <input type="text" class="form-control" id="Village/Street" value="4">
                                                        </div>
                                                    </div>
                
                                                    <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="inputState">Thana</label>
                                                                <input type="text" class="form-control" id="Thana" value="8">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="inputState">District</label>
                                                                <input type="text" class="form-control" id="District" value="Rampura">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                    <label for="inputState">Post Code</label>
                                                                    <input type="text" class="form-control" id="Post Code" value="4">
                                                            </div>
                                                        </div>
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Date of Birth">Date of Birth</label>
                                                    <input class="form-control" type="date" value="2019-08-19" id="date-of-birth">
            
                                                </div>
                                             </div>
                                            <button type="submit" class="btn btn-primary">Add Employee</button>
                                          </form>
                            </div>
                    </div>
                </div>
            </div>
                    
    </div>
    <!-- Footer -->
    <section class="eighth">
            <div class="container-fluid">

              <div class="row parallax total-review">
                <div class="col-sm-4 left-footer wow fadeInRightBig" data-wow-duration="1.5s"  data-wow-delay="1.3s" >
<div class="mapouter"><div class="gmap_canvas"><iframe width="619" height="355" id="gmap_canvas" src="https://maps.google.com/maps?q=Northsouth&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:355px;width:619px;}.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:619px;}</style></div>                  </div>
                 <div class="col-sm-4 footer-center ">
                  
                    <div class="wow flipInX" data-wow-duration="2.5s"  data-wow-delay=".2s">
                      <i class="fa fa-map-marker"></i>
                      <p><span>C Block, Baridhara</span> Dhaka, Bangladesh</p>
                    </div>

                    <div class="wow flipInX" data-wow-duration="2.5s"  data-wow-delay=".5s">
                      <i class="fa fa-phone"></i>
                      <p>+01 771881718</p>
                    </div>

                    <div class="wow flipInX" data-wow-duration="2.5s"  data-wow-delay=".8s">
                      <i class="fa fa-envelope"></i>
                      <p><a href="mailto:support@company.com">support@company.com</a></p>
                    </div>
                </div>
                <div class="col-sm-4 right-footer">
                  <p class="footer-company-about wow fadeIn" data-wow-duration="2s"  data-wow-delay="1.9s" >
                    <span>Restaurant</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irur8e dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in .
                  </p>
                  <div class="footer-icons">
                    <a href="#" class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="2.1s"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="2.4s"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="2.7s"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="3s"><i class="fa fa-github"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        </div>

    </body>
    
</html>