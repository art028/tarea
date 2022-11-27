<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }
    public function create1()
    {
        return view('autores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'isbn' => 'required | min:13 | numeric',
            'titulo' => 'required' ,
            'autor' => 'required' ,
            'pagina' => 'required | numeric' ,
            'editorial' => 'required' ,
            'email' => 'required | email' ,

        ]);
        DB::table('tb_libros')->insert([
            "isbn"=> $req-> input('isbn'),
            "titulo"=> $req-> input('titulo'),
            "autor_id"=> $req-> input('autor'),
            "pagina"=> $req-> input('pagina'),
            "editorial"=> $req-> input('editorial'),
            "correo"=> $req-> input('editar'),
            "fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('libro/registrar')->with('success',$req -> titulo);
        
    }

    public function store1(Request $req)
    {
        $req->validate([
            'nombre' => 'required | min:4',
            'fecha' => 'required ' ,
            'numero' => 'required | max:4' 

        ]);
        DB::table('tb_autores')->insert([
            "nombre"=> $req-> input('nombre'),
            "fecha"=> $req-> input('fecha'),
            "libros"=> $req-> input('numeros','0'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        
        return redirect('autor/registrar')->with('success','Autor Guardado');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
