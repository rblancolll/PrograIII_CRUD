@extends('plantilla')

@section("tituloPagina", "eliminar un registro")

@section('contenidoc')
    <div class="card">
        <h5 class="card-header">Eliminar un camion!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Id</th>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad_toneladas</th>
                    <th>Transporte_codigo</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $camiones->id }}</td>
                        <td>{{ $camiones->placa_camion }}</td>
                        <td>{{ $camiones->marca }}</td>
                        <td>{{ $camiones->color }}</td>
                        <td>{{ $camiones->modelo }}</td>
                        <td>{{ $camiones->capacidad_toneladas }}</td>
                        <td>{{ $camiones->transporte_codigo }}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('camiones.destroyc', $camiones->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("camiones.indexc") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>  Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection

