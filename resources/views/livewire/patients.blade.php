<div class="row mt-5">
    <div class="col col-6 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h3>Pacientes</h3>
            </div>
            <div class="col col-12 d-grid mt-3">
                <a href="/pacientes/nuevo" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="col col-12 mt-3 input-group">
                <input class="form-control" placeholder="Todos">
                <button class="btn btn-secondary" wire:click="search">Buscar</button>
            </div>
            @if($patients)
            <div class="col col-12 mt-3">
                <ul class="list-group">
                    @foreach($patients as $patient)
                    <li class="list-group-item">
                        <a class="btn btn-primary btn-sm" href="/pacientes/editar/{{ $patient->id }}"><i class="bi bi-pencil-fill"></i></a>
                        <a class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
                        &nbsp; {{ $patient->fullName }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!--    ALERT    -->
            @if(session('message'))
                <div class="col col-12 mt-3">
                    {!! session('message') !!}
                </div>
            @endif
            <!----------------->
        </div>
    </div>
</div>