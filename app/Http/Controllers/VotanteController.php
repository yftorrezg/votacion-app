<?php

namespace App\Http\Controllers;

use App\Models\Votante;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class VotanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votantes = Votante::all();
        return view(
            'votantes.index',
            ['votantes' => $votantes]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('votantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datos=$request->all();
        
        Votante::create($datos);
        return redirect(route('votante.index'))->with('mensaje','Votante agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function show(Votante $votante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function edit(Votante $votante)
    {
        return view('votantes.edit',['votante'=>$votante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Votante $votante)
    {
        $datos=$request->all();
        $votante->update($datos);
        return redirect(route('votante.index'))->with('mensaje','Votante actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votante $votante)
    {
        $votante->delete();
        return redirect(route('votante.index'))->with('mensaje','Votante eliminado con éxito');
    }
}
