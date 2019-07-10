<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/receipt.css') }}">
</head>

<body>
        <h2 class="row justify-content-md-center">Bill</h2>
                <div class="col justify-content-center form-col">
                        <form class="custom-form">
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="customerName">Name</label>
                                    <input type="text" class="form-control" id="customerName" value="Rifat Hossain" readonly>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="customerEmail">Email</label>
                                    <input type="email" class="form-control" id="customerEmail" value="abc@gmail.com" readonly>
                                  </div>
                                  <div class="form-group col-md-4">
                                        <label for="customerPhone">Phone No</label>
                                        <input type="text" class="form-control" id="customerPhone" value="017120768463" readonly>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="example-date-input" class="col-2 col-form-label">Booking Date</label>
                                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input" readonly>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="example-date-input" class="col-2 col-form-label">Reserve Date</label>
                                            <input class="form-control" type="date" value="2019-08-22" id="example-date-input" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Time</label>
                                        <input type="text" class="form-control" id="customerTime" value="8.00 P.M" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">No of people</label>
                                        <input type="text" class="form-control" id="customerNumber" value="4" readonly>

                                    </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="MealName1">Item Name</label>
                                          <input type="text" class="form-control" id="ItemName" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="ItemPrice1">Price</label>
                                          <input type="text" class="form-control" id="ItemPrice" placeholder="Price">
                                        </div>
                                 </div>
                                 <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="MealName2">Item Name</label>
                                          <input type="text" class="form-control" id="ItemName" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="ItemPrice2">Price</label>
                                          <input type="text" class="form-control" id="ItemPrice" placeholder="Price">
                                        </div>
                                 </div>
                                 <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="MealName3">Item Name</label>
                                          <input type="text" class="form-control" id="ItemName" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="ItemPrice3">Price</label>
                                          <input type="text" class="form-control" id="ItemPrice" placeholder="Price">
                                        </div>
                                 </div>
                                 <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="MealName3">Item Name</label>
                                          <input type="text" class="form-control" id="ItemName" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="ItemPrice4">Price</label>
                                          <input type="text" class="form-control" id="ItemPrice" placeholder="Price">
                                        </div>
                                 </div>
                                <button type="submit" class="btn btn-primary">Place Booking</button>
                              </form>
                </div>
        </div>
    </body>
    
</html>