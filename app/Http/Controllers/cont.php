<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cont extends Controller
{
   

    public function principal(){
        return view('principal');
    }

    public function registro(){
        return view('registro');
    }

    public function registrar(Request $req){
        
        $req->validate([
            'isbn' => 'required | min:13 | numeric',
            'titulo' => 'required' ,
            'autor' => 'required' ,
            'titulo' => 'required' ,
            'pagina' => 'required | numeric' ,
            'editorial' => 'required' ,
            'email' => 'required | email' ,

        ]);
        return redirect('1')->with('success','Todo Correcto: Libro "xxxxx" guardado');

        
    }

}
