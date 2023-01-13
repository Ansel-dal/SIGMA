@extends('layouts.template')

@section('content')
    <a href="{{ url('grupos') }}" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    <div class="container">
        <form action="{{ url('/grupos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('titulo1.deposito.grupos.form', ['modo' => 'Crear']);
        </form>
    </div>
 
@endsection
