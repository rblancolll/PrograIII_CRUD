@extends('plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoc')
    <div class="card">
        <h5 class="card-header">Agregar nuevo camion</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('camiones.storec') }}" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Placa</label>
                <input type="text" name="placa_camion" class="form-control" required>
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required>
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required>
                <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control" required>
                <label for="">Capacidad Toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control" required>
                <label for="">Transporte Codigo</label>
                <input type="text" name="transporte_codigo" class="form-control" required>

                <br>
                <a href="{{ route("camiones.indexc") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection
