<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($empleado) ? $empleado->Nombre : '' }}" id="Nombre" />
<br>
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" name="ApellidoPaterno" value="{{ isset($empleado) ? $empleado->ApellidoPaterno : '' }}"
    id="ApellidoPaterno" />
<br>
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" name="ApellidoMaterno" value="{{ isset($empleado) ? $empleado->ApellidoMaterno : '' }}"
    id="ApellidoMaterno" />
<br>
<label for="Correo"> Correo </label>
<input type="email" name="Correo" value="{{ isset($empleado) ? $empleado->Correo : '' }}" id="Correo" />
<br>
<label for="Foto"> Foto </label>
@if (isset($empleado))
    <img src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="" width="90" height="90" />
@endif
<input type="file" name="Foto" value="{{ isset($empleado) ? $empleado->ApellidoMaterno : '' }}" id="Foto" />
<br>
<input type="submit" value="Guardar Datos" />
