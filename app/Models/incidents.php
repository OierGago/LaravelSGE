<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class incidents extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'idIncidencias';
    public function categoria(): HasOne {
        return $this->hasOne(categories::class,'idCategoria','idCategoria');
        }
    public function departamento(): HasOne {
        return $this->hasOne(departments::class,'idDepartamento','idDepartamento');
        }
    public function usuario(): HasOne {
        return $this->hasOne(users::class,'id','idUsuarios');
        }
    public function estatus(): HasOne {
        return $this->hasOne(incidentStatus::class,'idEstadoDeIncidencias','idEstadoDeIncidencias');
        }
    public function prioridad(): HasOne {
        return $this->hasOne(priority::class,'idPrioridad','idPrioridad');
        }
    public function comentarios(): HasMany {
        return $this->hasMany(comments::class, 'idIncidencias', 'idIncidencias');
        }
}
