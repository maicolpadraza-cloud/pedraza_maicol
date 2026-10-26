<div class="mb-3">
    <label class="form-label" for="nombre">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" maxlength="100" value="{{ old('nombre', $destino->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label" for="pais">País</label>
    <input class="form-control" id="pais" name="pais" maxlength="100" value="{{ old('pais', $destino->pais ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label" for="clima">Clima</label>
    <input class="form-control" id="clima" name="clima" maxlength="50" value="{{ old('clima', $destino->clima ?? '') }}" required>
</div>
<button class="btn btn-primary" type="submit">Guardar</button>
<a class="btn btn-outline-secondary" href="{{ route('destinos.index') }}">Cancelar</a>
