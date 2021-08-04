<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function selectSeats(){
        $seats = DB::select('select * from seats');
        return view('customerViews.selectSeat',compact('seats'));
    }

//    public function selectBus(){
//        $buses = DB::select('select * from buses');
//        return view('customerViews.booking',compact('buses'));
//    }

//    public function find()
//    {
//        return view('customerViews.booking');
//    }
//    public function findSearch()
//    {
//        $searchSource = Input::get ( "searchSource" );
//        $searchDestination = Input::get ( "searchDestination" );
//        $test = Booking::where ( 'source', 'LIKE', '%' . $searchSource . '%' )->orWhere ( 'destination', 'LIKE', '%' . $searchDestination . '%' )->get ();
//        if (count ( $test ) > 0)
//            return view ( 'customerViews.booking' )->withDetails ( $test )->withQuery ( $searchSource,$searchDestination );
//        else
//            return view ( 'customerViews.booking' )->withMessage ( 'No Details found. Try to search again !' );
//    }
}
