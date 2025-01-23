<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory; // Add this trait

    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_usuario');
    }
}