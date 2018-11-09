<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tickets as Tickets;

class Ticket extends Controller
{

    //Get Ticket Based On Ticket ID. Also Verifies User Owns the ticket.
    public function get_ticket(Request $request) {
      if($request->post('ticket') != null && $request->post('event') != null) {
        $data = json_decode(Tickets::get()->where('id', $request->post('ticket'))->first());
        if($data != [''] && $data != null) {
          if($data->owner == $request->post('owner')) {
            if($request->post('access') !=null && $request->post('access') == 'ajax') {
              die(json_encode($data));
            } else {
              return view('pages.ticketing.ticket', [
                'ticket' => $data
              ]);
            }
          }
        }
      }
    }
    //Get Ticket info From the JS Framework And Inject.
    public function make_ticket(Request $request) {
      if($request->post('user_id') != '' && $reques->post('user_id') != null) {
        $data = json_decode(Tickets::insert([
          'event_id' => $request->post('event_id'),
          'event_name' => $request->post('event_name'),
          'event_price' => $request->post('event_price'),
          'event_contact' => $request->post('event_contact'),
          'user_qr' => $request->post('user_qr'),
          'purchase_date' => $request->post('purchase_date')
        ]));
      }
    }
}
