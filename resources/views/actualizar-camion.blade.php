@extends('plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoc')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo camion</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('camiones.updatec', $camiones->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required value="{{$camiones->id}}">
                <label for="">Placa</label>
                <input type="text" name="placa_camion" class="form-control" required value="{{$camiones->placa_camion}}">
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required value="{{$camiones->marca}}">
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required value="{{$camiones->color}}">
                <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control" required value="{{$camiones->modelo}}">
                <label for="">Capacidad Toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control" required value="{{$camiones->capacidad_toneladas}}">
                <label for="">Transporte Codigo</label>
                <input type="text" name="transporte_codigo" class="form-control" required value="{{$camiones->transporte_codigo}}">

                <br>
                <a href="{{ route("camiones.indexc") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection
