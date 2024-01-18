<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DoctorsEdit extends Component
{
    public User $medico;
    public array $form;

    public function mount(int $id)
    {
        $this->medico = User::with('specialities')->whereId($id)->first();
        $this->form = $this->medico->toArray();
        // Obtener las especialidades
        $this->form["specialities"] = array_column($this->form["specialities"], 'id');
    }

    public function save() : Redirector
    {
        // Guardar las especialidades
        $this->updateSpecialities();
        // Guardar el médico
        $this->medico->update($this->form);
        setAlert('Médico actualizado correctamente.');

        return redirect(route('medicos'));
    }

    private function updateSpecialities() : void
    {
        DB::table('user_speciality')
            ->whereUsersId($this->form['id'])
            ->delete();
        foreach($this->form['specialities'] as $speciality) {
            DB::table('user_speciality')->insert([
                'users_id' => $this->form['id'],
                'specialities_id' => $speciality,
            ]);
        }
        unset($this->form['specialities']);
    }
}
