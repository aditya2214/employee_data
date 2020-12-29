<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    protected $guarded = [];

    protected $table = "personal_data";

    public function employee_skill()
    {
    	return $this->belongsToMany('App\EmployeSkill');
    }

    public function depart()
    {
        return $this->belongsTo('App\Departement', 'id_departement');
    }
}
