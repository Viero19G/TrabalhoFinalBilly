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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
