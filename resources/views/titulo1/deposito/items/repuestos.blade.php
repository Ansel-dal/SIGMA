@extends('layouts.template')

@section('content')
    <a href="{{ url('items') }}" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    <div class="container">
        <form action="{{ url('/repuestos') }}" method="POST" id="myForm" enctype="multipart/form-data">
            @csrf
            @include('titulo1.deposito.items.form', ['accion' => 'Agregar', 'tipo' => 'repuesto']);
        </form>
    </div>
@endsection
