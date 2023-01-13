@extends('layouts.template')

@section('content')
    <a href="{{ url()->previous() }}" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    <div class="container">
        <form action="{{ url('/movimientos') }}" method="POST" id="myForm"enctype="multipart/form-data">
            @csrf
            @include('titulo1.movimientos.form', ['modo' => 'Agregar']);
        </form>
    </div>
@endsection
