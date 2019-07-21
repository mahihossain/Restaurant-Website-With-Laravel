@extends('layouts.menuFooter')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
        <link rel="stylesheet" href="{{ asset('css/receipt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <div class="container-fluid justify-content-center container-receipt">
        <h2 class="row justify-content-md-center heading">Bill</h2>
                <div class="row middle">
                    <div class="col  custom">
                        <form method="POST" action="/receiptstore" class="custom-form">
                            @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
										<label for="customerName">Name</label>
										<input type="text" name="customerName" class="form-control" id="customerName"  >
									</div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="example-date-input" class="col-2 col-form-label">Reserve Date</label>
                                            <input class="form-control" type="date" name="reserveDate" id="example-date-input" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-4">
											<label for="MealName1">Item Name</label>
											<input type="text" class="form-control" name="ItemName1" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
											<label for="ItemPrice1">Price</label>
											<input type="number" class="form-control" name="ItemPrice1" placeholder="Price">
                                        </div>
									</div>
									<div class="form-row">
                                        <div class="form-group col-md-4">
											<label for="MealName2">Item Name</label>
											<input type="text" class="form-control" name="ItemName2" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
											<label for="ItemPrice2">Price</label>
											<input type="number" class="form-control" name="ItemPrice2" placeholder="Price">
                                        </div>
									</div>
									<div class="form-row">
                                        <div class="form-group col-md-4">
											<label for="MealName3">Item Name</label>
											<input type="text" class="form-control" name="ItemName3" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
											<label for="ItemPrice3">Price</label>
											<input type="number" class="form-control" name="ItemPrice3" placeholder="Price">
                                        </div>
									</div>
									<div class="form-row">
                                        <div class="form-group col-md-4">
											<label for="MealName3">Item Name</label>
											<input type="text" class="form-control" name="ItemName4" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
											<label for="ItemPrice4">Price</label>
											<input type="number" class="form-control" name="ItemPrice4" placeholder="Price">
                                        </div>
                                <button type="submit" class="btn btn-primary">Place Receipt</button>
                            </form>
                </div>
                </div>
        </div>
    </body>
    
</html>