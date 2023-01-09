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
        <a href="{{ url('grupos/create') }}" class="btn btn-success">Agregar nuevo grupo</a>
        <br>
        <br>
        <table id="table_id" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Estado</th>
                    <th>Ubicacion</th>
                    <th>Grupo</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activos as $activo)
                    <tr>
                        <td>{{ $activo->codigo }}</td>
                        {{-- <td>
                        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}"
                            width="100" alt="">
                    </td> --}}
                        <td>{{ $activo->estado }}</td>
                        <td>{{ $activo->ubicacion }}</td>
                        <td>{{ $grupos->where('Identificador', '=', 'A')->first()->Nombre }} - {{ $grupos->where('Identificador', '=', 'A')->first()->Detalle }}</td>

                        {{-- @foreach ($grupos as $grupo)
                        <td>{{ $grupos->Nombre->where('Identificador', '=', 'A') }}</td>

                        @endforeach --}}
                        <td>{{ $activo->precio }}</td>

                        <td>

                            {{-- <form action="{{ url('/activos/' . $activo->codigo) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar"
                                    class="btn btn-danger">

                            </form> --}}

                            <form action="{{ url('/activos/' . $activo->codigo) }}" id="{{$activo->codigo}}" method="post"
                                class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}

                            </form>
                            <a onclick="return deleteConfirm({{$activo->codigo}})" class="btn">
                                <i data-feather="trash-2" color="red"></i>
                            </a>                           
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $activos->links() !!}
    </div>
    <script>
        window.deleteConfirm = function(formId) {
            Swal.fire({
                icon: 'warning',
                title: '¡CUIDADO! Vas a eliminar este activo.',
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            })

        }
    </script>
@endsection
