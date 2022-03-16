<?php

namespace App\Http\Controllers;

use App\Models\t_cuentas;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cuentas = t_cuentas::all();
        return view('cuentas\registros\index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuentas\registros\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = new t_cuentas();
        $cuenta->grupo = $request->get('grupo');
        $cuenta->n_sorteo1 = $request->get('n_sorteo1');
        $cuenta->n_sorteo2 = $request->get('n_sorteo2');
        $cuenta->n_sorteo3 = $request->get('n_sorteo3');
        $cuenta->n_sorteo4 = $request->get('n_sorteo4');
        $cuenta->c_cuotas = $request->get('c_cuota');
        $cuenta->p_cuotas = $request->get('p_cuota');
        $cuenta->precio_total = $request->get('precio_total');
        $cuenta->vencimiento = $request->get('venc');
        $cuenta->id_cliente = $request->get('id_cliente');
        $cuenta->id_producto = $request->get('id_producto');
        $cuenta->id_vendedor = $request->get('id_vendedor');
        $cuenta->id_cobrador = $request->get('id_cobrador');
        $cuenta->id_user = $request->get('id_user');

        $cuenta->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuenta = t_cuentas::find($id);
        return $cuenta;
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
