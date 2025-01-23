<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['producto', 'cantidad', 'total', 'id_usuario'];


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
