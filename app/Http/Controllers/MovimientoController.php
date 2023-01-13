<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Itemsgroup;
use App\Models\Movimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['movimientos'] = Movimiento::paginate(20);
        $datos['grupos'] = Itemsgroup::where('Identificador', '=', 'A')->paginate(20);
        $datos['bienes'] = Activo::paginate(20);
        return view('titulo1.movimientos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $response = Http::get('https://consumos.foodservice.com.ar/api/empresas');
        $datos['empresas'] = json_decode($response);
        $datos['grupos'] = Itemsgroup::paginate(20);
        $datos['bienes'] = Activo::paginate(20);
        $datos['requerimentos'] = ["Alta nueva por reparación", "Ampliación de servicio", "Eventos especiales", "Apertura de contrato", "Reparación proveedor"];
        $datos['niveles'] = ["1", "2", "3"];

        return view('titulo1.movimientos.create', $datos);
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
        $campos = [
            'requerimento' => 'required|string|max:100'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];
        $this->validate($request, $campos, $mensaje);
        $datosGrupo = request()->except('_token');
        Movimiento::insert($datosGrupo);

        /*Edito la ubicación del bien*/    
        $bien = Activo::findOrFail(159);
        $bien['ubicacion'] = $request->destino;        
        $bien->update();

        return redirect('movimientos')->with('mensaje', 'Movimiento agregado con éxito');
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
        Movimiento::destroy($id);
        return redirect('movimientos')->with('mensaje', 'Movimiento boreado con éxito');
    }
}