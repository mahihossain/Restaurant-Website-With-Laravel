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
        <h2 class="row justify-content-md-center heading"> {{$booking->name}}'s Info</h2>
            <div class="col">
                    <form action="/bookings/{{$booking->id}}" method="POST">

                        {{method_field('PATCH')}}
                        @csrf
                        
                        <div id="border-color" class="col justify-content-center form-col">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="customerName">Name</label>
                                    <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Name" value="{{$booking->name}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerID">ID</label>
                                    <input type="text" class="form-control" name="customerID" id="customerID" placeholder="ID" value="{{$booking->id}}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerEmail">Email</label>
                                    <input type="email" class="form-control" name="customerEmail" id="customerEmail" placeholder="email" value="{{$booking->email}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="customerPhone">Phone No</label>
                                    <input type="text" class="form-control" name="customerPhone" id="customerPhone" placeholder="Phone no" value="{{$booking->phoneNo}}">
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="example-date-input" class="col-2 col-form-label">Booking Date</label>
                                            <input class="form-control" type="date" name="bookingDate" id="bookingDate" value="{{$booking->bookingDate}}">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="example-date-input" class="col-2 col-form-label">Reserve Date</label>
                                            <input class="form-control" type="date" name="reserveDate" id="reserveDate" value="{{$booking->reserveDate}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Time</label>
                                        <input name="time" id="inputState" class="form-control" value="{{$booking->time}}"></input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">No of people</label>
                                        <input name="noOfPeople" type="number" id="inputState" class="form-control" value="{{$booking->noOfPeople}}" max="4" min="1"></input>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                    </form>
            </div>
            <div class="col">
                <form action="/bookings/{{$booking->id}}" method="post">
                    {{method_field('DELETE')}}
                    @csrf
                    <button type="submit" class="btn btn-primary custom-btn">Delete</button>
                </form>
            </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="{{ asset('js/booking.js') }}"></script>

</body>
</html>