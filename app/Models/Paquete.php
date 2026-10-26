<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paquete extends Model
{
    protected $primaryKey = 'id_paquete';

    public $timestamps = false;

    protected $fillable = [
        'id_destino',
        'nombre',
        'dias',
        'precio',
    ];

    public function destino(): BelongsTo
    {
        return $this->belongsTo(Destino::class, 'id_destino', 'id_destino');
    }
}
