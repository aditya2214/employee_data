<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeSkill extends Model
{
    public function personal_data()
    {
    	return $this->belongsToMany('App\PersonalData');
    }
}
