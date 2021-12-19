<h2 class="mt-4 mb-4"> {{ $modo === 'Crear' ? 'Crear Empleado' : 'Editar Empleado' }} </h2>
<div class="form-group">
    <label class="form-label" for="Nombre"> Nombre </label>
    <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado) ? $empleado->Nombre : '' }}"
        id="Nombre" />
</div>
<br>
<div class="form-group">
    <label class="form-label" for="ApellidoPaterno"> Apellido Paterno </label>
    <input class="form-control" type="text" name="ApellidoPaterno"
        value="{{ isset($empleado) ? $empleado->ApellidoPaterno : '' }}" id="ApellidoPaterno" />
</div>
<br>
<div class="form-group">
    <label class="form-label" for="ApellidoMaterno"> Apellido Materno </label>
    <input class="form-control" type="text" name="ApellidoMaterno"
        value="{{ isset($empleado) ? $empleado->ApellidoMaterno : '' }}" id="ApellidoMaterno" />
</div>
<br>
<div class="form-group">
    <label class="form-label" for="Correo"> Correo </label>
    <input class="form-control" type="email" name="Correo" value="{{ isset($empleado) ? $empleado->Correo : '' }}"
        id="Correo" />
</div>
<br>
<div class="form-group">
    <label class="form-label" for="Foto"> Foto </label>
    @if (isset($empleado))
        <img src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="" width="90" height="90" />
    @endif
    <input class="form-control" type="file" name="Foto"
        value="{{ isset($empleado) ? $empleado->ApellidoMaterno : '' }}" id="Foto" />
</div>
<br>
<input class="btn btn-primary" type="submit" value="{{ $modo === 'Crear' ? 'Agregar Empleado' : 'Editar Empleado' }}" />
<a class="btn btn-secondary" href="/empleado"> Volver sin {{ $modo === 'Crear' ? 'agregar' : 'editar' }} </a>
