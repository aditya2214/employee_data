<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class EmployeeDataIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate=5;
    public $search;
    public $statusUpdate=false;

    protected $listeners = [
        'storepersonaldata'=>'handlestore',
        'updatepersonaldata'=>'handleupdate'
    ];

    public function render()
    {
        return view('livewire.employee-data-index',[
            'employees' => \App\PersonalData::where('employee_id','like','%'.$this->search.'%')->orWhere('employee_name','like','%'.$this->search.'%')->orderBy('created_at','DESC')->paginate($this->paginate)
        ]);
    }

    public function handlestore($saveDataPersonal){

    }

    public function handleupdate(){

    }

    public function destroy($id){
        \App\PersonalData::where('id',$id)->delete();
        \App\BridgePersonalAndSkill::where('personal_data_id',$id)->delete();
    }

    public function getdata($id){
        $this->statusUpdate=true;
        $getdata =  \App\PersonalData::find($id);
        $this->emit('getdata',$getdata);
    }
}
