@extends('layouts.app')
@section('titulo', 'Modificar Vehículo')
@section('contenido')
    <div class="mb-3 text-center">
        <h2 >Modificar Vehículo {{$vehiculo->placa}}</h2>
    </div>
    <form action="{{route('vehiculos.update',$vehiculo)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3"> 
            <label class="form-label">Placa *</label> 
            <input type="text" name="placa" class="form-control" value="{{$vehiculo->placa}}" required> 
        </div>
        <div class="mb-3"> 
            <label class="form-label">Tipo *</label>
            <select name="tipo_id" class="form-select" required>
                <option value="">Seleccione un tipo</option>
                <option value="1" {{ $vehiculo->tipo_id == '1' ? 'selected' : '' }}>Automóvil</option>
                <option value="2" {{$vehiculo->tipo_id== '2' ? 'selected': ''}}>Moto</option>
                <option value="3" {{$vehiculo->tipo_id== '3' ? 'selected': ''}}>Camioneta</option>
            </select>
        </div>      
        <div class="mb-3">
            <label class="form-label">Propietario *</label>
            <input type="text" name="propietario" class="form-control" value="{{$vehiculo->propietario}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" rows="3">{{$vehiculo->observaciones}}</textarea>
        </div>
        <a href="{{route('vehiculos.index')}}"class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
