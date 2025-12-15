@extends('layouts.app')
@section('titulo', 'Vehículos')
@section('contenido')
<div class="mb-3">
    <a href="{{route('vehiculos.create')}}"class="btn btn-outline-dark" >Crear</a>
</div>

<div class="table-responsive">
    <table class="table  table-dark table-striped">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Ingreso</th>
                <th>Observaciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{{$vehiculo->placa}}</td>
                <td>{{$vehiculo->tipo->nombre}}</td>
                <td>{{$vehiculo->propietario}}</td>
                <td>{{$vehiculo->created_at}}</td>
                <td>{{$vehiculo->observaciones}}</td>
                <td>
                    <a href="{{ route('vehiculos.edit',$vehiculo) }}" class="btn btn-sm btn-warning">
                        Editar</a>
                    <form action="{{ route('vehiculos.destroy',$vehiculo) }}" method="POST" class="d-inline">
                        @csrf   
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">Eliminar</button>
                </td>
            </tr>
            @endforeach

        </tbody>
    
    </table>
</div>

@endsection