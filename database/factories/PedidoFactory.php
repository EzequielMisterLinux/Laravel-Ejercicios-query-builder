<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        return [
            'producto' => $this->faker->word(),
            'cantidad' => $this->faker->numberBetween(1, 5),
            'total' => $this->faker->numberBetween(100, 500),
            'id_usuario' => Usuario::factory(), // Crea un usuario aleatorio
        ];
    }
}
