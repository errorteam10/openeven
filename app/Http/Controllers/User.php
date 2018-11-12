<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tickets as Ticket;
use App\event as Events;
class User extends Controller
{
    //

    public function home() {
      $past = json_decode(Ticket::where([['owner', Auth()->User()->id],['status', 'past'],])->get());
      $current = json_decode(Ticket::where([['owner', Auth()->User()->id],['status', 'active'],])->get());
      $events = json_decode(Events::where([['organizer', Auth()->User()->id]])->get());
      return view('pages.user.home', [
        'past' => $past,
        'current' => $current,
        'events' => $events
      ]);
    }
}
