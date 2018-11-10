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
    public function make_event(Request $reqest) {
      if($equest->post('name') != null && $request->post('name') != '') {
        $data = json_decode(Events::insert([
          'name' => $request->post('name'),
          'organizer' => Auth()->User()->name,
          'tags' => $request->post('tags'),
          'data' => json_encode([
            'about' => $request->post('about'),
            'images' => $reqest->post('images'),
            'title'=> $request->post('name'),
            'tagline' => $request->post('tagline'),
            'theme' => json_encode([
              'css' => $request->post('css'),
              'text_color' => $request->post('text-color'),
              'heading_color' => $request->post('heading_color'),
              'background_color' => $reqest->post('background_color')
            ])
          ]),
          'layout' => 'default',
          'logo' => $request->post('logo'),
          'cover_image' => $request->post('cover_image')
        ]));
      }
    }
}
