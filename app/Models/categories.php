<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categories extends Model
{
    use HasFactory;
    protected $primaryKey = 'idCategoria';

    public function incidencias(): HasMany {
        return $this->hasMany(incidents::class,'idCategoria','idCategoria');
    }
    public function incidenciasCinco(): HasMany {
        return $this->hasMany(incidents::class,'idCategoria','idCategoria')->limit(5);
    }

}
