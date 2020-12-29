<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StoreEmployeeData extends Component
{
    public $employeename;
    public $departement;
    public $employeeskill=[];

    public function render()
    {
        return view('livewire.store-employee-data',[
            'departements' => \App\Departement::all(),
            'employeeskils' => \App\EmployeSkill::all()
        ]);


    }

    public function Storedata(){
        $tahun = date('y');
        $bulan = date('m');
        $data = \App\PersonalData::whereYear('created_at',date('Y'))->whereMonth('created_at',date('m'))->count();

        $invID = str_pad(  $data + 1, 5, "0", STR_PAD_LEFT );
        $kode = $tahun.$bulan . $invID ;

        $saveDataPersonal = \App\PersonalData::create([
            'employee_id'=>$kode,
            'employee_name'=>$this->employeename,
            'id_departement'=>$this->departement
            ]);
            
        $saveDataPersonal->employee_skill()->attach($this->employeeskill);
        
        $this->resetForm();
        $this->emit('storepersonaldata',$saveDataPersonal);
    }

    public function resetForm(){
        $this->employeename= null;
        $this->departement=null;
        $this->employeeskill=null;
    }
}
