<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\event as Events;

class Pages extends Controller
{
    //

    public function discover() {
      $data = json_encode(Events::get()->all());
      return view('pages.discover', [
        'events' => json_decode($data)
      ]);
    }
}
