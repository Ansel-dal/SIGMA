@extends('layouts.template')

@section('content')
    <a href="deposito" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    <br />
    <h3 class="page-title">Pañol</h3>

    <p class="lead">Descripión pañol (*).</p>
    <hr />
    <div class="row">
        <div class="col-md-4 col-xl-6">
            <div class="card text-white bg-primary">
                <div class="card-header">Repuestos</div>
                <div class="card-body">
                    <p class="card-text">Descripción de repuestos.(*)</p>
                    <a href="repuestos" class="btn btn-dark" style="float: right;">Ver repuestos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-6">
            <div class="card text-white bg-primary">
                <div class="card-header">Insumos</div>
                <div class="card-body">
                    <p class="card-text">Descripción de insumos.(*)</p>
                    <a href="insumos" class="btn btn-dark" style="float: right;">Ver insumos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
