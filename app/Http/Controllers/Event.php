<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event as Events;

class Event extends Controller
{
    //Get The Events By The Current user
    public function mine() {
      if(Auth()->User()->id != null && Auth()->User()->id != '') {
        $data = json_decode(Events::get()->where('owner', Auth()->User()->id));
      //  dd($data);
        return view('pages.user.events', [
          'events' => $data
        ]);
      }
    }
    //GEt Random Events based on $count provided
    public function get_random($count) {
      if($count != null && $count != '') {
        $data = json_decode(Events::take($count)->get()->random());
      }
      die(json_encode($data));
      return view('pages.events.discover', [
        'events' => $data
      ]);
    }
    //Get Event using the predetermined event ID
    public function get_event($request, $access = "user") {
      if($request != null && $request != '') {
        $data = json_decode(Events::get()->where('id', $request));
        if($access != null && $access == 'ajax') {
          die(json_encode($data));
        } else {
          //die(json_encode($data));
          return view('pages.events.event', [
            'event' => $data
          ]);
        }
      }
    }
    //Get Events Based On The organizer
    public function get_organizer($name) {
      if($name != null && $name != '') {
        $data = json_decode(Events::get()->where('organizer', $name));
      }
      die(json_encode($data));
      return view('pages.events.organizer', [
        'events' => $data
      ]);
    }
    //Create an Event. This data must be sanatized for security reasons. Users mst have the the Create, Read, and Write Permissions in their group.
    public function make_event(Request $request) {
    //  dd($request->all());
    $name = $request->get('name');
    //dd($name);
        $data = json_decode(Events::insert([
          'title' => $name,
          'tags' => $request->get('tags'),
          'about' => $request->get('about'),
          'owner' => Auth()->User()->id,
          'images' => $request->get('images'),
          'tagline' => $request->get('tagline'),
          'css' => $request->get('css'),
          'text_color' => $request->get('text_color'),
          'heading_color' => $request->get('heading_color'),
          'background_color' => $request->get('background_color'),
          'layout' => $request->get('layout'),
          'logo' => $request->get('logo'),
          'hotel_name' => $request->get('hotel_name'),
          'hotel_location' => $request->get('hotel_location'),
          'hotel_pricing' => $request->get('hotel_pricing'),
          'parking_name' => $request->get('parking_name'),
          'parking_location' => $request->get('parking_location'),
          'parking_pricing' => $request->get('parking_pricing'),
          'food_name' => $request->get('food_name'),
          'food_location' => $request->get('food_location'),
          'food_pricing' => $request->get('food_pricing'),
          'number_of_tickets' => $request->get('number_of_tickets'),
          'venue_location' => $request->get('venue_location'),
          'pricing' => $request->get('pricing'),
          'cover_image' => $request->get('cover')
        ]));
        return redirect()->back();
    }
}
