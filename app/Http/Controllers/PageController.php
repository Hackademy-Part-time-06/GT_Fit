<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    return view('contact');
   }

   public function send(Request $request){

     //Validazione dei dati
     $request->validate([
       "nome"=>"required|string",
       "email"=>"required|email",
       "messaggio"=>"required|min:10",
     ]);

      //Se sono tutti validi, allora continua 

      $data = [
        "nome"=>$request->nome,
        "email"=>$request->email,
        "telefono"=>$request->telefono,
        "messaggio"=>$request->messaggio,
      ];
//dd($data);

        Mail::to($request->input('email'))->send(New InfoMail($data));
       
        return redirect()->route('homepage')->with('succes','email inviata');
   }
}
