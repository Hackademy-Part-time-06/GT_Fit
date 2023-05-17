<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

public static $courses = [
    'Pancafit' => [
        "room" => 2,
        "tools" => "panca",
        "time" => "15:30" ],

    'Bodypump' => [
            "room" => 8,
            "tools" => "bilanciere",
            "time" => "11:30" ],
        ];


   public function homepage() {
    return view('homepage');
   }

   public function corsi() {
    return view('corsi');
   }

   public function detail() {
    return view('detail');
   }

   public function contatti() {
    return view('contatti');
   }
}
