@extends('layouts.app')
@section('titulo', 'Registrar Vehículo')
@section('contenido')
    <div class="mb-3 text-center">
        <h2 class="">Registrar Nuevo Vehículo</h2>
    </div>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="mb-3"> 
            <label class="form-label">Placa *</label> 
            <input type="text" name="placa" class="form-control" required> 
        </div>
        <div class="mb-3"> 
            <label class="form-label">Tipo *</label>
            <select name="tipo_id" class="form-select" required>
                <option value="">Seleccione un tipo</option>
                <option value="1">Carro</option>
                <option value="2">Moto</option>
                <option value="3">Camioneta</option>
            </select>
        </div>      
        <div class="mb-3">
            <label class="form-label">Propietario *</label>
            <input type="text" name="propietario" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" rows="3"></textarea>
        </div>
       
        <a href="{{route('vehiculos.index')}}"class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
        
    </form>
@endsection
