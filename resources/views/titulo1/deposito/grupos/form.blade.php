<legend>{{ $modo }} grupo de activos</legend>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif

<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" value="{{ isset($grupo->Nombre) ? $grupo->Nombre : old('Nombre') }}" class="form-control"
        name="Nombre" id="Nombre" placeholder="Ingresar nombre">
</div>
<br>
<div class="form-group">
    <label for="">Detalle</label>
    <input type="text" class="form-control" value="{{ isset($grupo->Detalle) ? $grupo->Detalle : old('Detalle') }}"
        name="Detalle" id="Detalle" placeholder="Ingresar detalle">
</div>
<br>
<div class="form-group">
    <label for="">Marca</label>
    <input type="text" class="form-control" value="{{ isset($grupo->Marca) ? $grupo->Marca : old('Marca') }}"
        name="Marca" id="Marca" placeholder="Ingresar marca">
</div>
<br>
<div class="form-group">
    <label for="">Stock Real</label>
    <input type="text" class="form-control" value="{{ isset($grupo->SReal) ? $grupo->SReal : old('SReal') }}"
        name="SReal" id="SReal" placeholder="Ingresar stock real">
</div>
<br>
<div class="form-group">
    <label for="">Stock mínimo</label>
    <input type="text" class="form-control" value="{{ isset($grupo->SMin) ? $grupo->SMin : old('SMin') }}"
        name="SMin" id="SMin" placeholder="Ingresar stock mínimo">
</div>
<br>
<div class="form-group">
    <label for="">Stock máximo</label>
    <input type="text" class="form-control" value="{{ isset($grupo->SMax) ? $grupo->SMax : old('SMax') }}"
        name="SMax" id="SMax" placeholder="Ingresar stock máximo">
</div>
<br>
<div class="form-group">
    <label for="">Valor actual</label>
    <input type="text" class="form-control" value="{{ isset($grupo->VUActual) ? $grupo->VUActual : old('VUActual') }}"
        name="VUActual" id="VUActual" placeholder="Ingresar valor actual">
</div>
<br>

<br>
<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-primary" href="{{ url('grupo') }}">Regresar</a>

</div>
