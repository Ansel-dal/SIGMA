<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Itemsgroup;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['activos'] = Activo::paginate(20);       
        $datos1['grupos'] = Itemsgroup::paginate(20);       
        return view('titulo1.activos.index', $datos, $datos1);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('titulo1.activos.create');

    }
    public function getbyid(int $id)
    {
        //
        $datos['activos'] = Activo::where('grupo', '=', $id)->paginate(20);
        return view('titulo1.activos.index',$datos);

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
        // $activo = Activo::findOrFail($id);
        // if (Storage::delete('public/' . $activo->Foto)) {

        // }
        Activo::destroy($id);
        return redirect('activos')->with('mensaje', 'Empleado boreado con éxito');
    }
}
