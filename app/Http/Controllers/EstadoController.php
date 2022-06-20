<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEstadoRequest;
use App\Http\Requests\UpdateEstadoRequest;
use App\Models\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $lista = Estado::all();
        //dd($lista);
        return view('estado.index',['lista_estados'=>$lista]);
    }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
    public function create()
    {
        return view('estado.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        Estado::create($request->all());
        return redirect()->route('estado.index');
    }
    public function destroy($id)
    {
        // dd($id);
        $clube = Estado::findOrFail($id);
        $clube->delete();
        return  redirect()->route('estado.index');
    }
    public function edit($id)
    {
        // dd($id);
        $Estado = Estado::findOrFail($id);
        return view('Estado.edit',['Estado'=>$Estado]);
    }
    public function update(Request $request, $id)
    {
        // dd($id);
        $cidade = Estado::findOrFail($id);
        $data = [
            'nome'=> $request['nome'],
            'fundacao'=> $request['fundacao']
        ];
        $cidade->update($data);
        return redirect()->route('estado.index');
    }
}
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\StoreEstadoRequest  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(StoreEstadoRequest $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Estado  $estado
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Estado $estado)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Estado  $estado
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Estado $estado)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateEstadoRequest  $request
//      * @param  \App\Models\Estado  $estado
//      * @return \Illuminate\Http\Response
//      */
//     public function update(UpdateEstadoRequest $request, Estado $estado)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Estado  $estado
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Estado $estado)
//     {
//         //
//     }
// }
