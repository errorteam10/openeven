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
    public function kioskcheckin(Request $request) {
      return view('pages.kiosk.mobile');
      die(json_encode($request->all()));
    }

    public function check_in(Request $request) {
      $data = json_decode(Ticket::get()->where('id', $request->get('ticket'))->first());
      //die(json_encode($data));
      if($data->id == $request->get('ticket') && $data->event_id == $request->get('event') && $data->owner == $request->get('owner')) {
        $data = json_decode(Ticket::where('id', $request->get('ticket'))->update([
          'status' => 'past'
          ]));
        $event = json_decode(Events::get()->where('id', $request->get('event'))->first());
        $user = json_decode(Users::get()->where('id', $request->get('owner'))->first());
        die(json_encode([
          "status" => 200,
          "message" => "You Have Checked In",
          "data" => json_encode([
            'event_name'    => $event->title,
            'customer_name' => $user->name
          ])
        ]));
      }
      die(json_encode());
    }
    public function kioskcheck_in(Request $request) {
      $data = json_decode(Ticket::get()->where('id', $request->get('ticket'))->first());
      if($data->id == $request->get('ticket') && $data->event_id == $request->get('event') && $data->owner == $request->get('owner')) {
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
