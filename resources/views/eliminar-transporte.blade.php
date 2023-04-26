@extends('plantilla')

@section("tituloPagina", "eliminar un registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Eliminar un transporte!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Razón Social</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $transportes->id }}</td>
                        <td>{{ $transportes->nombre }}</td>
                        <td>{{ $transportes->razon_social }}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('transportes.destroyt', $transportes->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("transportes.indext") }}" class="btn btn-info">
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

