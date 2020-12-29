<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateEmployeeData extends Component
{
    public $employeename;
    public $departement;
    public $employeeskill=[];
    public $personal_id;

    protected $listeners = [
        'getdata'=>'showdata'
    ];

    public function render()
    {
        return view('livewire.update-employee-data',[
            'departements' => \App\Departement::all(),
            'employeeskils' => \App\EmployeSkill::all()
        ]);
    }

    public function showdata($getdata){
        $this->employeename = $getdata['employee_name'];
        $this->departement = $getdata['id_departement'];
        $this->personal_id = $getdata['id'];
    }

    public function Updatedata(){
        $update_pesonal_data = \App\PersonalData::find($this->personal_id);
        $update_pesonal_data->update([
            'employee_name'=>$this->employeename,
            'id_departement' => $this->departement
        ]);

        if ($this->employeeskill == null) {
            # code...
        }else{
            $update_pesonal_data->employee_skill()->sync($this->employeeskill);
        }

        $this->resetForm();
        $this->emit('updatepersonaldata',$update_pesonal_data);
    }

    public function resetForm(){
        $this->employeename= null;
        $this->departement=null;
        $this->employeeskill=null;
    }
}
