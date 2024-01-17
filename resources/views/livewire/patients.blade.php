<div class="row mt-5">
    <div class="col col-6 mx-auto">
        <div class="row text-center">
            <div class="col col-12">
                <h3>Pacientes</h3>
            </div>
            <div class="col col-12 d-grid mt-3">
                <a href="/pacientes/nuevo" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="col col-12 mt-3 input-group">
                <input class="form-control">
                <button class="btn btn-secondary">Buscar</button>
            </div>
        </div>
    </div>
    @if(session('message'))
        {!! session('message') !!}
    @endif
</div>
