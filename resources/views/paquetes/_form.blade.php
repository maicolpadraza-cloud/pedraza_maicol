<div class="form-group mb-3">
    <label class="form-label" for="id_destino">Destino</label>
    <select class="form-select" id="id_destino" name="id_destino" required>
        <option value="">Selecciona un destino</option>
        @foreach ($destinos as $destino)
            <option value="{{ $destino->id_destino }}" @selected((string) old('id_destino', $paquete->id_destino ?? '') === (string) $destino->id_destino)>
                {{ $destino->nombre }} ({{ $destino->pais }})
            </option>
        @endforeach
    </select>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="nombre">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" maxlength="100" value="{{ old('nombre', $paquete->nombre ?? '') }}" required>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="dias">Días</label>
    <input class="form-control" id="dias" name="dias" type="number" min="1" value="{{ old('dias', $paquete->dias ?? '') }}" required>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="precio">Precio</label>
    <input class="form-control" id="precio" name="precio" type="number" min="0" step="0.01" value="{{ old('precio', $paquete->precio ?? '') }}" required>
</div>
<button class="btn btn-primary" type="submit">Guardar</button>
<a class="btn btn-secondary" href="{{ route('paquetes.index') }}">Cancelar</a>
