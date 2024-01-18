<div class="row mt-5">
    <div class="col col-6 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h3>Paciente: {{ $paciente->fullName }}</h3>
            </div>
            <div class="col col-12 text-center mt-3">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($citas as $cita)
                    <tr class="text-center">
                        <td>{{ getSpanishDate($cita->date) }}</td>
                        <td>{{ $cita->hour }}:00hr</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <form wire:submit.prevent="save" class="col col-12 input-group mt-3">
                <input type="date" class="form-control" wire:model="form.date">
                <input type="number" class="form-control" wire:model="form.hour" placeholder="0-23">
                <button class="btn btn-primary">Guardar</button>
            </form>
            <!--    ALERT    -->
            @if(session('message'))
                <div class="col col-12 mt-3">
                    {!! session('message') !!}
                </div>
            @endif
            <!----------------->
            <div class="col col-12">
                @error('form.date') <span class="text-danger">{{ $message }}</span> @enderror <br>
                @error('form.hour') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
</div>
