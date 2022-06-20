<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClubeRequest;
use App\Http\Requests\UpdateClubeRequest;
use App\Models\Clube;

class ClubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $lista = Clube::all();
        //dd($lista);
        return view('clubes.index',['lista_clubes'=>$lista]);
    }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
    public function create()
    {
        return view('clubes.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        Clube::create($request->all());
        return redirect()->route('clube.index');
    }
    public function destroy($id)
    {
        // dd($id);
        $clube = Clube::findOrFail($id);
        $clube->delete();
        return  redirect()->route('clube.index');
    }
    public function edit($id)
    {
        // dd($id);
        $clube = Clube::findOrFail($id);
        return view('clubes.edit',['clube'=>$clube]);
    }
    public function update(Request $request, $id)
    {
        // dd($id);
        $clube = Clube::findOrFail($id);
        $data = [
            'nome'=> $request['nome'],
            'fundacao'=> $request['fundacao']
        ];
        $clube->update($data);
        return redirect()->route('clube.index');
    }
}
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\StoreClubeRequest  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(StoreClubeRequest $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Clube  $clube
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Clube $clube)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Clube  $clube
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Clube $clube)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateClubeRequest  $request
//      * @param  \App\Models\Clube  $clube
//      * @return \Illuminate\Http\Response
//      */
//     public function update(UpdateClubeRequest $request, Clube $clube)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Clube  $clube
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Clube $clube)
//     {
//         //
//     }
// }