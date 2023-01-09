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
        <a href="{{ url('movimiento/create') }}" class="btn btn-success">Agregar nuevo movimiento</a>
        <br>
        <br>
        <table id="table_id" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>N° Solicitud</th>
                    <th>Ítem</th>
                    <th>Salida</th>
                    <th>Destino</th>
                    <th>Urgencia</th>                  
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movimientos as $movimiento)
                    <tr>
                        <td>{{ $movimiento->id }}</td>                       
                        <td>{{ $movimiento->bien }}</td>
                        <td>{{ $movimiento->ubicacionanterior }}</td>
                        <td>{{ $movimiento->destino }}</td>
                        <td>{{ $movimiento->nivelurgencia }}</td>                        
                        
                        <td>
                            {{-- <form action="{{ url('/movimientos/' . $movimiento->codigo) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar"
                                    class="btn btn-danger">

                            </form> --}}

                            <form action="{{ url('/movimientos/' . $movimiento->id) }}" id="{{$movimiento->id}}" method="post"
                                class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}

                            </form>
                            <a onclick="return deleteConfirm({{$movimiento->id}})" class="btn">
                                <i data-feather="trash-2" color="red"></i>
                            </a>                           
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $movimientos->links() !!}
    </div>
    <script>
        window.deleteConfirm = function(formId) {
            Swal.fire({
                icon: 'warning',
                title: '¡CUIDADO! Vas a eliminar este movimiento.',
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
