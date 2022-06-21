<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTorcedorRequest;
use App\Http\Requests\UpdateTorcedorRequest;
use App\Models\Torcedor;

class TorcedorController extends Controller

    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        { 
            $lista = Torcedor::all();
            //dd($lista);
            return view('torcedor.index',['lista_torcedor'=>$lista]);
        }
    
    //     /**
    //      * Show the form for creating a new resource.
    //      *
    //      * @return \Illuminate\Http\Response
    //      */
        public function create()
        {
            return view('torcedor.create');
        }
        public function store(Request $request)
        {
            // dd($request);
            Torcedor::create($request->all());
            return redirect()->route('Torcedor.index');
        }
        public function destroy($id)
        {
            // dd($id);
            $torcedor = Torcedor::findOrFail($id);
            $torcedor->delete();
            return  redirect()->route('torcedor.index');
        }
        public function edit($id)
        {
            // dd($id);
            $torcedor = Torcedor::findOrFail($id);
            return view('Torcedor.edit',['Torcedor'=>$torcedor]);
        }
        public function update(Request $request, $id)
        {
            // dd($id);
            $torcedor = Torcedor::findOrFail($id);
            $data = [
                'nome'=> $request['nome'],
            ];
            $torcedor->update($data);
            return redirect()->route('torcedor.index');
        }
    }
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\StoreTorcedorRequest  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(StoreTorcedorRequest $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Torcedor  $torcedor
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Torcedor $torcedor)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Torcedor  $torcedor
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Torcedor $torcedor)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateTorcedorRequest  $request
//      * @param  \App\Models\Torcedor  $torcedor
//      * @return \Illuminate\Http\Response
//      */
//     public function update(UpdateTorcedorRequest $request, Torcedor $torcedor)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Torcedor  $torcedor
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Torcedor $torcedor)
//     {
//         //
//     }
// }
