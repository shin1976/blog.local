<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
      // $data = [];
      // $data["first_name"] = "Luke";
      // $data["last_name"] = "Skywalker";
      //
      // return view('pages.about',$data);

      $first_name="Luke";
      $last_name="SkyWalker";

      return view('pages.about', compact('first_name', 'last_name'));

      // return view('pages.about');
    }
    public function contact() {
      return view('contact');
    }
}
