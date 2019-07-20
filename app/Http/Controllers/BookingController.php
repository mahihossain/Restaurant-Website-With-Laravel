<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bookings = DB::table('bookings')->get();
        $bookings = DB::table('bookings')->where('name', request('customerName'))->where('reserveDate',request('reserveDate'))->where('time', request('time'))->get();

        return view('showbookings')->withBookings($bookings); 
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
        // return request()->all();
        $booking = new Booking();

        $booking->name = request('customerName');
        $booking->email = request('customerEmail');
        $booking->phoneNo = request('customerPhone');
        $booking->bookingDate = request('bookingDate');
        $booking->reserveDate = request('reserveDate');
        $booking->time = request('time');
        $booking->noOfPeople = request('noOfPeople');
        $booking->served = false;

        $booking->save();
        return redirect('booking')->with('status', $booking->id);

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
}
