<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event as Events;

class Event extends Controller
{
    //

    public function get_event($request) {
      if($request != null && $request != '') {
        $data = json_decode(Events::get()->where('id', $request));
      }
      die(json_encode($data));
    }
}
