@extends('layouts.template')

@section('content')
    <br />
    <br />
    <h1>Alta de bienes</h1>
    <br />
    <p>Seleccione qué tipo de bien que dará de alta</p>
    <hr />

    <div class="row">
        <div class="col-md-4 col-xl-4">
            <div class="card text-white bg-primary">
                <div class="card-header">Activos </div>
                <div class="card-body">
                    <p class="card-text">Acá se podrá dar de alta cualquier activo perteneciente a los <strong><a
                                href="activos" style="color:black;">grupos</a></strong>.</p>
                    <br>
                    <a href="{{url('items/activos')}}" class="btn btn-dark" style="float: right;">Alta de activos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4">
            <div class="card text-white bg-primary">
                <div class="card-header">Insumos </div>
                <div class="card-body">
                    <p class="card-text">Acá se podrá dar de alta cualquier activo perteneciente a los <strong><a
                                href="insumos" style="color:black;">insumos</a></strong>.</p>
                    <br>
                    <a href="items/insumos" class="btn btn-dark" style="float: right;">Alta de insumos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4">
            <div class="card text-white bg-primary">
                <div class="card-header">Repuestos </div>
                <div class="card-body">
                    <p class="card-text">Acá se podrá dar de alta cualquier activo perteneciente a los <strong><a
                                href="repuestos" style="color:black;">repuestos</a></strong>.</p>
                    <br>
                    <a href="items/repuestos" class="btn btn-dark" style="float: right;">Alta de repuestos</a>
                </div>
            </div>
        </div>
       
    </div>
@endsection
