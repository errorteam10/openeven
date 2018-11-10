<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tickets as Ticket;
use App\event as Events;
use App\users as Users;

class Mobile extends Controller
{
    //

    public function checkin(Request $request) {
      return view('pages.mobile.mobile');
      die(json_encode($request->all()));
    }

    public function check_in(Request $request) {
      $data = json_decode(Ticket::get()->where('id', $request->get('ticket')));
      if($data[0]->id == $request->get('ticket') && $data[0]->event_id == $request->get('event') && $data[0]->owner == $request->get('owner')) {
        $data = json_decode(Ticket::where('id', $request->get('ticket'))->update([
          'status' => 'past'
          ]));
        $event = json_decode(Events::get()->where('id', $request->get('event'))->first());
        $user = json_decode(Users::get()->where('id', $request->get('owner'))->first());
        die(json_encode([
          "status" => 200,
          "message" => "You Have Checked In",
          "data" => json_encode([
            'event_name'    => $event->name,
            'customer_name' => $user->name
          ])
        ]));
      }
      die(json_encode());
    }
}
