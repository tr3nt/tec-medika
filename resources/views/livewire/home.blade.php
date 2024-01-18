<div class="row mt-5">
    <div class="col col-8 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h2>Hola {{ $name }}</h2>
            </div>
            <div class="col">
                <h4 class="mt-4 text-center">Próximas citas</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Paciente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        <tr>
                            <td>{{ $cita->hour }}:00hrs</td>
                            <td>{{ $cita->paciente->fullName }}</td>
                        </tr>
                        @endforeach
                        @if(count($citas) === 0)
                        <tr>
                            <td colspan="2" class="text-center">No hay citas en esta fecha</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="col text-center">
                <div class="calendar">
                    <div class="month">
                        <a href="#" class="nav">
                            <i class="fas fa-angle-left"></i>
                        </a>
                        <div>{{ $mesTxt }} <span class="year">{{ $year }}</span></div>
                        <a href="#" class="nav">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="days">
                        <span>Lun</span>
                        <span>Mar</span>
                        <span>Mie</span>
                        <span>Jue</span>
                        <span>Vie</span>
                        <span>Sab</span>
                        <span>Dom</span>
                    </div>
                    <div class="dates">
                        @for ($i = 1; $i <= $dias; $i++)
                        <button wire:click="search('{{ $year . '-' . $mes . '-' . $i }}')"
                                class="{{ $dia == $i ? 'today' : '' }}">
                            <time>{{ $i }}</time>
                        </button>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>