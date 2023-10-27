<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class comments extends Model
{
    use HasFactory;
    protected $primaryKey = 'idComentario';
    public function incidencias(): BelongsTo {
        return $this->BelongsTo(incidents::class,'idIncidencias','idIncidencias');
    }
    public function usuario(): HasOne {
        return $this->HasOne(users::class,'id','idUsuarios');
    }

}
