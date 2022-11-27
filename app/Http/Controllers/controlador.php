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
        $consultarec= DB::table('tb_recuerdos')->get();
        return view('recuerdo',compact('consultarec'));
    }
    public function index1()
    {
        $consultarautor= DB::table('tb_autores')->get();
        return view('consulta_aut',compact('consultarautor'));
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
            'numero' => 'required | max:4' ,

        ]);
        DB::table('tb_autores')->insert([
            "nombre"=> $req-> input('nombre'),
            "fecha"=> $req-> input('fecha'),
            "libros"=> $req-> input('numeros'),
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
        $consultaid= DB::table('tb_recuerdos')->where('idRecuerdo',$id)->first();

        return view('editar',compact('consultaid'));
    }

    public function edit1($id)
    {
        $consultaid1= DB::table('tb_autores')->where('idAutor',$id)->first();

        return view('autores_actualizar',compact('consultaid1'));
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
        DB::table('tb_recuerdos')->where('idRecuerdo',$id)->update([
            "titulo"=> $request-> input('txttitulo'),
            "recuerdo"=> $request-> input('txtrecuerdo'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('recuerdo')->with('confirmacion','abc');
    }

     public function update1(Request $req, $id)
    {
        $req->validate([
            'nombre' => 'required | min:4',
            'fecha' => 'required ' ,
            'numero' => 'required | max:4' 
        ]);

        DB::table('tb_autores')->where('idAutor',$id)->update([
            "nombre"=> $req-> input('nombre'),
            "fecha"=> $req-> input('fecha'),
            "libros"=> $req-> input('numeros'),
            "updated_at"=> Carbon::now()
        ]);
        
        return redirect('autor/consulta')->with('success',$req -> nombre);

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
