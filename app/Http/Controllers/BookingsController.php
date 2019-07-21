<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = DB::table('bookings')->get();
        // $bookings = DB::table('bookings')->where('id', request('customerID'))->get();

        return view('bookings.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name' => request('customerName'),
            'email' => request('customerEmail'),
            'phoneNo' => request('customerPhone'),
            'bookingDate' => request('bookingDate'),
            'reserveDate' => request('reserveDate'),
            'time' => request('time'),
            'noOfPeople' => request('noOfPeople'),
            'served' => false,
        );

        $booking = Booking::create($data);
        return redirect('bookings/create')->with('status', $booking->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        // $check = Booking::findOrFail($booking->id);
        return view('bookings.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        // $booking->name = request('customerName');
        // $booking->email = request('customerEmail');
        // $booking->phoneNo = request('customerPhone');
        // $booking->bookingDate = request('bookingDate');
        // $booking->reserveDate = request('reserveDate');
        // $booking->time = request('time');
        // $booking->noOfPeople = request('noOfPeople');
        // $booking->served = false;

        // $booking->save();

        $data = array(
            'name' => request('customerName'),
            'email' => request('customerEmail'),
            'phoneNo' => request('customerPhone'),
            'bookingDate' => request('bookingDate'),
            'reserveDate' => request('reserveDate'),
            'time' => request('time'),
            'noOfPeople' => request('noOfPeople'),
            'served' => false,
        );

        $booking->update($data);

        return redirect('bookings/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect('bookings/create');
    }

    public function search()
    {
        $redirect = request('redirect');
        $booking = Booking::findOrFail($redirect);
        return view('bookings.show', compact('booking'));
    }
}
