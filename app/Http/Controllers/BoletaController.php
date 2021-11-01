<?php

namespace App\Http\Controllers;

use App\Models\t_boletas;
use Illuminate\Http\Request;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletas = t_boletas::all();
        return $boletas;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boleta = new t_boletas();
        $boleta->codigo = $request->get('cod');
        $boleta->socio = $request->get('socio');
        $boleta->vencimiento = $request->get('venc');
        $boleta->cuota = $request->get('cuota');
        $boleta->situacion = $request->get('sit');
        $boleta->tipo_pago = $request->get('tipo_pago');
        $boleta->id_cuenta = $request->get('id_cuenta');
        $boleta->id_user = $request->get('id_user');

        $boleta->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boleta = t_boletas::find($id);
        return $boleta;
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
