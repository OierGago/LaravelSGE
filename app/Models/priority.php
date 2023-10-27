<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class priority extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPrioridad';
    public function incidencias(): HasMany {
        return $this->hasMany(incidents::class,'idPrioridad','idPrioridad');
    }
    public function incidenciasCinco(): HasMany {
        return $this->hasMany(incidents::class,'idPrioridad','idPrioridad')->limit(5);
    }

}
