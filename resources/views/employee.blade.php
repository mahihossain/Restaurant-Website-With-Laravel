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
        <link rel="stylesheet" href="{{ asset('css/employee.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <div class="container-fluid justify-content-center">
            <h2 class="row justify-content-md-center heading">Add Employee</h2>
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


    </body>
    
</html>