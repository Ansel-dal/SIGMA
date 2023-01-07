@extends('layouts.template')

@section('content')
    <a href="{{ url()->previous() }}" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    {{-- <div class="container">
        <form action="{{ url('/activos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('titulo1.activos.form', ['modo' => 'Crear']);
        </form>
    </div> --}}
@endsection
