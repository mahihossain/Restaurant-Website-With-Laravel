<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use App\Receipt;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bookings = DB::table('bookings')->where('id', request('customerID'))->get();
        
        $bookings = DB::table('bookings')->where('id', request('customerID'))->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receipt = new Receipt();

        $receipt->customer_name = request('customerName');
        $receipt->reserveDate = request('reserveDate');
        $total_item = 0;
        if(!empty(request('ItemName1')))
        {
            $total_item +=1;
        }
        if(!empty(request('ItemName2')))
        {
            $total_item +=1;
        }
        if(!empty(request('ItemName3')))
        {
            $total_item +=1;
        }
        if(!empty(request('ItemName4')))
        {
            $total_item +=1;
        }
        $receipt->total_item =$total_item;
        $receipt->total_spent = request('ItemPrice1')+request('ItemPrice2')+request('ItemPrice3')+request('ItemPrice4');

        $receipt->save();
        return redirect('bookings/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function search()
    {
        $redirect = request('redirect');
        // $booking = Booking::findOrFail($redirect);
        $booking = DB::table('bookings')->where('id', request('redirect'))->get();
        // dd($bookings);
        return view('showreceipt', compact('booking'));
    }
}
