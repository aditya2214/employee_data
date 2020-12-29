<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function departement_r()
    {
        return $this->belongsTo('App\PersonalData', 'id_employee', 'id');
    }
}
