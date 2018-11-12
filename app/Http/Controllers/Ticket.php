<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tickets as Tickets;
use App\event as Events;

use LaravelQRCode\Facades\QRCode;

class Ticket extends Controller
{

    public function purchase(Request $request) {
      $id =  rand(1, 10000);
      $data = json_decode(Tickets::insert([
        'id' => $id,
        'event_id' => $request->get('event'),
        'event_name' => $request->get('event_name'),
        'event_price' => $request->get('event'),
        'owner' => Auth()->User()->id,
        'status' => 'active'
      ]));

      $data = json_decode(Events::where('id', $request->get('event'))->update(['tickets_bought' =>($request->get('bought') + 1)]));
      return view('pages.ticket', [
        'event_id' => $request->get('event'),
        'owner' => Auth()->User()->id,
        'ticket_id' => $id
      ]);
    }
    //register tickeet into users name via form.
    public function reg_ticket($id, $name, $cost, $bought) {
      return view('pages.buy_ticket', [
        'event_id' => $id,
        'event_name' => $name,
        'event_cost' => $cost,
        'bought' => $bought
      ]);
    }

    //Get Ticket Based On Ticket ID. Also Verifies User Owns the ticket.
    public function get_ticket(Request $request) {
      if($request->post('ticket') != null && $request->post('event') != null) {
        $data = json_decode(Tickets::get()->where('id', $request->post('ticket'))->first());
        if($data != [''] && $data != null) {
          if($data->owner == $request->post('owner')) {
            if($request->post('access') !=null && $request->post('access') == 'ajax') {
              die(json_encode($data));
            } else {
              die(QRCode::text(json_encode([
                "owner" => "1",
                "event" => "1",
                "ticket" => "1"
                ]))->png());
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
