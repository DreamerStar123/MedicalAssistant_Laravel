<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{

  public function finish(Request $r, $id) {

    $booking = Booking::find($id);

    var_dump('id is' .  $id);

    $booking->finished = true;

    $booking->save();

    return redirect()->route('bookings');

  }

  public function delete(Request $r) {

    $booking = Booking::find($r->input('id'));

    $booking->delete();

    return redirect()->route('bookings');

  }

  public function showAll() {

    $today = Booking::whereDate('date', '<', date('Y-m-d', strtotime('tomorrow')))->get();
    $other = Booking::whereDate('date', '>', date('Y-m-d'))->get();

    return view('bookings', [
        'today' => $today,
        'other' => $other
    ]);
  }

  public function create(Request $r) {
    $this->validate($r, [
        'name' => 'required',
        'date' => 'required'
    ]);
    Booking::create(array(
      'name' => $r->input('name'),
      'date' => date('Y-m-d H:i:s', strtotime($r->input('date'))),
      'finished' => false
    ));
    return redirect()->route('bookings');
  }
}
