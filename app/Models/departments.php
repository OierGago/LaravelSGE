<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class departments extends Model
{

    use HasFactory;
    protected $primaryKey = 'idDepartamento';
    public function incidencias(): HasMany {
        return $this->HasMany(incidents::class,'idDepartamento','idDepartamento');
        }
    public function incidenciasCinco(): HasMany {
        return $this->hasMany(incidents::class,'idDepartamento','idDepartamento')->limit(5);
    }

}
