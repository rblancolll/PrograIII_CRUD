@extends('plantilla')

@section('tituloPagina', 'Crud de camiones')

@section('contenidoc')

    <div class="card">
    <h5 class="card-header">CRUD con laravel 8 y MySQL</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                </div>
            </div>
            <h5 class="card-title text-center">Listado de camiones en el sistema</h5>
            <p>
                <a href="{{ route("camiones.createc") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>  Agregar nuevo camión
                </a>
            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad_toneladas</th>
                    <th>Transporte_codigo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->placa_camion }}</td>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->modelo }}</td>
                            <td>{{ $item->capacidad_toneladas }}</td>
                            <td>{{ $item->transporte_codigo }}</td>

                            <td>
                                <form action="{{ route("camiones.editc", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("camiones.showc", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <hr>
                <br>
                <br>


            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
                <hr>
            </div>

            </p>

        </div>
    </div>


    {{--
            <div class="row">
                <h1>Hola usando Layouts</h1>
                <i class="Fab fa-500px"></i>
                <a href="{{ route('transportes.create') }}">Agregar</a>
            </div>
     --}}

@endsection
