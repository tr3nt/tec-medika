<div class="row mt-5">
    <div class="col col-6 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h3>Pacientes</h3>
            </div>
            <div class="col col-12 d-grid mt-3">
                <a href="/pacientes/nuevo" class="btn btn-primary">Nuevo</a>
            </div>
            <form class="col col-12 mt-3 input-group" wire:submit.prevent="search">
                <input class="form-control" placeholder="Todos" wire:model="buscaTexto">
                <button class="btn btn-secondary" type="submit">Buscar</button>
            </form>
            @if($patients)
            <div class="col col-12 mt-3">
                <ul class="list-group">
                    @foreach($patients as $patient)
                    <li class="list-group-item">
                        <a class="btn btn-primary btn-sm" href="/pacientes/editar/{{ $patient->id }}"><i class="bi bi-pencil-fill"></i></a>
                        <a class="btn btn-success btn-sm" href="/citas/paciente/{{ $patient->id }}"><i class="bi bi-calendar3-fill"></i></a>
                        <a class="btn btn-danger btn-sm" onclick="generatePdf({{ json_encode($patient) }})"><i class="bi bi-file-pdf-fill"></i></a>
                        &nbsp; {{ $patient->fullName }}
                        <!--a class="btn btn-danger btn-sm basura"><i class="bi bi-trash-fill"></i></a-->
                    </li>
                    @endforeach
                    @if (count($patients) === 0)
                    <li class="list-group-item text-center">No hay pacientes</li>
                    @endif
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