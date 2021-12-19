@extends('layouts.app')

@section('content')

    <table class="table table-success table-striped table-hover">
        @if (Session::has('mensaje'))

            <h3> <span class="badge bg-success"> {{ Session::get('mensaje') }} </span> </h3>

        @endif

        <thead class="py-4">
            <tr>
                <th> Id </th>
                <th> Foto </th>
                <th> Nombre </th>
                <th> Apellido Paterno </th>
                <th> Apellido Materno </th>
                <th> Correo </th>
                <th> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td> {{ $empleado->id }} </td>
                    <td>
                        <img src="{{ asset('storage') . '/' . $empleado->Foto }}"
                            alt="{{ asset('storage') . '/' . $empleado->Foto }}" width="60" height="60" />
                    </td>
                    <td> {{ $empleado->Nombre }} </td>
                    <td> {{ $empleado->ApellidoPaterno }} </td>
                    <td> {{ $empleado->ApellidoMaterno }} </td>
                    <td> {{ $empleado->Correo }}</td>
                    <td>
                        <a class="btn btn-primary mb-1" href="{{ url('/empleado/' . $empleado->id) . '/edit' }}">
                            Editar
                        </a>
                        <form action="{{ url('/empleado/' . $empleado->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit"
                                onclick="return confirm('¿Seguro que quieres borrar?');" value="Borrar" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<div class="container d-flex justify-content-center">
  <div class="row">
    <div class="col-12">
       <a class="btn btn-primary" href="/empleado/create"> Agregar </a>
    </div>
  </div>
 </div>

@endsection
