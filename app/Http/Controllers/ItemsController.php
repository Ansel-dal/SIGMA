<?php

namespace App\Http\Controllers;

use App\Models\Itemsgroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('titulo1.deposito.items.index');
    } 
    public function activos()
    {
        //
        $datos['grupos'] = Itemsgroup::all();
        $response = Http::get('https://consumos.foodservice.com.ar/api/empresas');
        $datos['empresas'] = json_decode($response);
        $datos['estados'] = ['Nuevo', 'Usado'];
        return view('titulo1.deposito.items.activos',$datos);
    } 
    public function insumos()
    {
        //
        $datos['grupos'] = Itemsgroup::all();
        $response = Http::get('https://consumos.foodservice.com.ar/api/empresas');
        $datos['empresas'] = json_decode($response);
        $datos['estados'] = ['Nuevo', 'Usado'];
        return view('titulo1.deposito.items.insumos',$datos);
    } 
    public function repuestos()
    {
        //
        $datos['grupos'] = Itemsgroup::all();
        $response = Http::get('https://consumos.foodservice.com.ar/api/empresas');
        $datos['empresas'] = json_decode($response);
        $datos['estados'] = ['Nuevo', 'Usado'];
        return view('titulo1.deposito.items.repuestos',$datos);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('titulo1.deposito.items.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
