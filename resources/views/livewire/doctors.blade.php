<div class="row mt-5">
    <div class="col col-7 mx-auto">
        <div class="row">
            <div class="col col-12 text-center">
                <h3>Médicos</h3>
            </div>
            <div class="col col-12 mt-3">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Activo</th>
                        <th>Nombre</th>
                        <th>Nutri</th>
                        <th>Gastro</th>
                        <th>Odonto</th>
                        <th class="text-center">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($medicos as $medico)
                    @php
                        // Obtener especialidades del médico
                        $specialities = array_column($medico->specialities->toArray(), 'id');
                    @endphp
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" {{ $medico->active ? 'checked' : '' }} disabled>
                            </td>
                            <td>{{ $medico->full_name }}</td>
                            <td>
                                <input type="checkbox" class="form-check-input"
                                {{ in_array(1, $specialities) ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input type="checkbox" class="form-check-input"
                                {{ in_array(2, $specialities) ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input type="checkbox" class="form-check-input"
                                {{ in_array(3, $specialities) ? 'checked' : '' }} disabled>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm" href="/medicos/editar/{{ $medico->id }}">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
