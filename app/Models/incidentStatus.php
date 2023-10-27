<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class incidentStatus extends Model
{
    use HasFactory;
    protected $primaryKey = 'idEstadoDeIncidencias';
    public function incidencias(): HasMany {
        return $this->hasMany(incidents::class,'idEstadoDeIncidencias','idEstadoDeIncidencias');
    }
    public function incidenciasCinco(): HasMany {
        return $this->hasMany(incidents::class,'idEstadoDeIncidencias','idEstadoDeIncidencias')->limit(5);
    }

}
