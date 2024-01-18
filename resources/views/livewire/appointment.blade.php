<div class="row">
    <div class="col">
        <h4 class="mt-4 text-center">Próximas citas</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Paciente</th>
                    <th>Exp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citas as $cita)
                <tr>
                    <td>{{ $cita->hour }}:00hrs</td>
                    <td>{{ $cita->paciente->fullName }}</td>
                    <td>
                        <button class="btn btn-success btn-sm" onclick="generatePdf({{ json_encode($cita) }})">
                            <i class="bi bi-file-pdf-fill"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
                @if(count($citas) === 0)
                <tr>
                    <td colspan="3" class="text-center">No hay citas en esta fecha</td>
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

@section('js')
<script>
    function generatePdf(cita) {
        const doc = new jsPDF();

        // Razón social
        doc.setFontSize(20);
        doc.text('Tec-Medika', 10, 20);

        // Dibujar linea a un lado de la razón social
        const rectWidth = doc.internal.pageSize.getWidth() - 60;
        doc.rect(60, 15, rectWidth, 5, 'F');

        // Datos del paciente
        doc.setFontSize(14);
        doc.text(`Nombre:  ${cita.paciente.name}`, 10, 40);
        doc.text(`Apellido Paterno:  ${cita.paciente.middle_name}`, 10, 50);
        doc.text(`Apellido Materno:  ${cita.paciente.last_name}`, 10, 60);

        // Save the PDF or open in a new window
        doc.save(`expediente-${cita.paciente.name}-${cita.paciente.middle_name}-${cita.paciente.last_name}.pdf`);
    }
</script>
@endsection