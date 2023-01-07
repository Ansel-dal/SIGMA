@extends('layouts.template')

@section('content')
    <a href="home" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    <br />
    <h3 class="page-title">Depósito</h3>
    <p class="lead">Descripción depósito (*)</p>
    <br>
    <a href="{{ url('activos/create') }}" class="btn btn-success">Agregar items</a>
    <hr />

    <div class="row">
        <div class="col-md-4 col-xl-6">
            <div class="card text-white bg-primary">
                <div class="card-header">Activos</div>
                <div class="card-body">
                    <p class="card-text">Consulta, alta, baja y edición de activos.</p>
                    <a href="activos" class="btn btn-dark" style="float: right;">Ver activos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-6">
            <div class="card text-white bg-primary">
                <div class="card-header">Pañol</div>
                <div class="card-body">
                    <p class="card-text">Consulta, alta, baja y edición de repuestos e insumos.</p>
                    <a href="pañol" class="btn btn-dark" style="float: right;">Ver pañol</a>
                </div>
            </div>
        </div>
    </div>
@endsection
