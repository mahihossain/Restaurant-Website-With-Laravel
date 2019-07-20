@section('menubar')
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
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
@show

@section('footersection')
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
@show   