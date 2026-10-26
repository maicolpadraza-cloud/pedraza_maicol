<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destino extends Model
{
    protected $primaryKey = 'id_destino';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'pais',
        'clima',
    ];

    public function paquetes(): HasMany
    {
        return $this->hasMany(Paquete::class, 'id_destino', 'id_destino');
    }
}
