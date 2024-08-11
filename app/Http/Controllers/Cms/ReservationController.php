<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Reservation\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::first();
        return view('cms.pages.reservation.index', compact('reservation'));
    }

    public function edit_reservation(ReservationRequest $request)
    {
        $reservation = Reservation::first();
        if($reservation){
            $reservation->update($request->post());
        }else{
            Reservation::create($request->post());
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set reservation'
        ], 200);
    }
}
