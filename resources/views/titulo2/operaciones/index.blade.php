@extends('layouts.template')
@section('content')
    <a href="deposito" class="nav-link">
        <i data-feather="arrow-left"></i>
    </a>
    <br />
    <div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ Session::get('mensaje') }}
            </div>
        @endif
        <br>
        <br>
        <table id="table_id" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($operaciones as $operacion)
                    <tr>
                        <td>{{ $operacion->id }}</td>
                        <td>{{ $operacion->name }}</td>
                        <td>2</td>
                        {{-- <td>{{ $operacion->cantidad }}</td> --}}
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $operaciones->links() !!}
    </div>
   
@endsection
