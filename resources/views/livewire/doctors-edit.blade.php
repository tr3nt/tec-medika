<div class="row mt-5">
    <div class="col col-6 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h3>Editar Médico</h3>
            </div>
            <div class="col mt-3">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" class="form-control" wire:model="form.name">
            </div>
            <div class="col col-auto mt-3">
                <div class="form-check mt-4">
                    <input class="form-check-input" type="radio" wire:model="form.active" id="active" value="{{ 1 }}">
                    <label class="form-check-label" for="active">
                        Activo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" wire:model="form.active" id="inactive" value="{{ 0 }}">
                    <label class="form-check-label" for="inactive">
                        Inactivo
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col col-6">
                <label for="middle" class="form-label">Apellido Paterno</label>
                <input id="middle" class="form-control" wire:model="form.middle_name">
            </div>
            <div class="col col-6">
                <label for="last" class="form-label">Apellido Materno</label>
                <input id="last" class="form-control" wire:model="form.last_name">
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col">
                <input type="checkbox" class="form-check-input" id="nutri" wire:model="form.specialities" value="{{ 1 }}">
                <label class="form-check-label" for="nutri">Nutriólogo</label>
            </div>
            <div class="col">
                <input type="checkbox" class="form-check-input" id="nutri" wire:model="form.specialities" value="{{ 2 }}">
                <label class="form-check-label" for="nutri">Gastroenterólogo</label>
            </div>
            <div class="col">
                <input type="checkbox" class="form-check-input" id="nutri" wire:model="form.specialities" value="{{ 3 }}">
                <label class="form-check-label" for="nutri">Odontólogo</label>
            </div>
            <div class="col col-12 d-grid mt-5">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <div class="col col-12 d-grid mt-2">
                <a href="/medicos" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
