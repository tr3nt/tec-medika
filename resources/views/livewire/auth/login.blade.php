<form wire:submit.prevent="login" class="row mt-5">
    <div class="col col-6 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h3>Bienvenido</h3>
            </div>
            <div class="col-12 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" wire:model="form.email" id="email" class="form-control" />
                @error('form.email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mt-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" wire:model="form.password" id="pass" class="form-control" />
                @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mt-5 text-center">
                <button type="submit" class="btn btn-secondary">Ingresar</button>
            </div>
        </div>
    </div>
</form>