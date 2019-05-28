<?php

namespace WDashboard;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    

    /**
     * Funcion que retorna Comunas Asociados a un Establecimiento
     *
     * @return void clase Comuna
     */
    public function commune()
    {
        return $this->hasMany('WDashboard\Commune');
    }

}
