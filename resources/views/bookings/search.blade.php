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
		<link rel="stylesheet" href="{{ asset('css/showbooking.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>

<body>
    <div class="container-fluid justify-content-center container-booking">
        <h2 class="row justify-content-md-center heading">Search Bookings</h2>

            @if (Auth::check())
                <form method="POST" action="/receipt/search">
                    @csrf
                    <div class="col search">
                        <div class="form-group col-md-3">
                            <label for="customerID">ID</label>
                            <input type="number" class="form-control" name="redirect" id="customerID" placeholder="Name" >
                        </div>
                        <button type="submit" class="btn btn-primary">Search Booking</button>
                    </div>
                </form>
            @else
                <form method="POST" action="/bookings/search">
                    @csrf
                    <div class="col search">
                        <div class="form-group col-md-3">
                            <label for="customerID">ID</label>
                            <input type="number" class="form-control" name="redirect" id="customerID" placeholder="Name" >
                        </div>
                        <button type="submit" class="btn btn-primary">Search Booking</button>
                    </div>
                </form>
            @endif
                
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="{{ asset('js/booking.js') }}"></script>

</body>
</html>