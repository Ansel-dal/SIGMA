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


        <a href="{{ url('grupos/create') }}" class="btn btn-success">Agregar nuevo grupo</a>
        <hr>
        <br>
        <table id="table_id" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th>Marca</th>
                    <th>Rubro</th>
                    <th>VAEmpresa</th>
                    <th>SEmpresa</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groups as $group)
                    <tr>
                        <td>{{ $group->codigo }}</td>
                        {{-- <td>
                        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}"
                            width="100" alt="">
                    </td> --}}
                        <td>{{ $group->Nombre }}</td>
                        <td>{{ $group->Detalle }}</td>
                        <td>{{ $group->Marca }}</td>
                        <td>{{ $group->Rubro }}</td>
                        <td>{{ $group->VAEmpresa }}</td>
                        <td>{{ $group->SEmpresa }}</td>




                        <td>

                            {{-- <form action="{{ url('/activos/' . $activo->codigo) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar"
                                    class="btn btn-danger">

                            </form> --}}

                            <form action="{{ url('/grupos/' . $group->codigo) }}" id="{{$group->codigo}}" method="post"
                                class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}

                            </form>
                            <a onclick="return deleteConfirm({{$group->codigo}})" class="btn">
                                <i data-feather="trash-2" color="red"></i>
                            </a>                           
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $groups->links() !!}
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
