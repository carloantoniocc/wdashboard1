<?php

namespace WDashboard;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    
    /**
     * Funcion que retorna establecimiento Asociados a una comuna
     *
     * @return void clase establecimiento
     */    
	public function establishment()
	{
	    return $this->belongsTo('WDashboard\Establishment');
	}



}
