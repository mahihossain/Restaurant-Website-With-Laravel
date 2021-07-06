@extends('layouts.menuFooter')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <!-- gallery -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat|Courgette|Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
        <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
        <!-- bootsratp -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- myCss -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('css/booking.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>

<body>

    @if (session('status'))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <h2 class="message"><strong>{{ session('status') }}</strong> This is your booking id. Please remember it.</h2>
        </div>
    @endif

    
    <div class="container-fluid justify-content-center container-booking">
        <h2 class="row justify-content-md-center heading">Booking Place For Your Meal</h2>
        <div class="row middle">
            <div class="row align-items-center custom">
                <div class="col img-col">
                    <img class="img-fluid my-img" src="{{asset('image/form-img.jpg')}}" alt="Booking Image">
                </div>
                <div class="col justify-content-center form-col">
                    <form method="POST" action="/bookings" class="custom-form" onsubmit="return mySubmitFunction(event)">
                        @csrf
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="customerName">Name</label>
                            <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Name" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="customerEmail">Email</label>
                            <input type="email" class="form-control" name="customerEmail" id="customerEmail" placeholder="email" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="customerPhone">Phone No</label>
                            <input type="text" class="form-control" name="customerPhone" id="customerPhone" placeholder="Phone no" >
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="example-date-input" class="col-2 col-form-label">Booking Date</label>
                                    <input class="form-control" type="date" name="bookingDate" id="bookingDate" >
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="example-date-input" class="col-2 col-form-label">Reserve Date</label>
                                    <input class="form-control" type="date" name="reserveDate" id="reserveDate">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">Time</label>
                                <select name="time" id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>7.00 P.M</option>
                                    <option>7.30 P.M</option>
                                    <option>8.00 P.M</option>
                                    <option>8.30 P.M</option>
                                    <option>9.00 P.M</option>
                                    <option>9.30 P.M</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">No of people</label>
                                <select name="noOfPeople" id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Place Booking</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="{{ asset('js/booking.js') }}"></script>

</body>
</html>