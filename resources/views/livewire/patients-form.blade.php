<div class="row mt-5">
    <div class="col col-6 mx-auto">
        <form class="row" wire:submit.prevent="save">
            <div class="col col-12 text-center">
                <h3>{{ $titulo }} Paciente</h3>
            </div>
            <div class="col col-12 mt-3">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" id="name" wire:model="form.name">
                @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col col-12 mt-3">
                <label for="middle-name" class="form-label">Apellido Paterno</label>
                <input class="form-control" id="middle-name" wire:model="form.middle_name">
                @error('form.middle_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col col-12 mt-3">
                <label for="last-name" class="form-label">Apellido Materno</label>
                <input class="form-control" id="last-name" wire:model="form.last_name">
                @error('form.last_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col col-12 d-grid mt-5">
                <button type="submit" class="btn btn-primary">{{ $tituloBtn }}</button>
            </div>
        </form>
    </div>
</div>