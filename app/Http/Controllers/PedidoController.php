<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Pedido;
use App\Models\Usuario;

class PedidoController extends Controller
{
    // 1. Inserta 5 registros de usuarios y sus pedidos usando factories
    public function insertarDatos()
    {
        // Crear 5 usuarios aleatorios usando factory
        $usuarios = Usuario::factory()->count(5)->create();
        
        // Crear un pedido para cada usuario
        foreach ($usuarios as $usuario) {
            Pedido::create([
                'producto' => 'Producto ejemplo',
                'cantidad' => rand(1, 5),
                'total' => rand(100, 500),
                'id_usuario' => $usuario->id,
            ]);
        }
        
        return response()->json(['mensaje' => 'Datos insertados correctamente']);
    }

    // 2. Recupera todos los pedidos del usuario con ID 2
    public function pedidosUsuario()
    {
        $pedidos = Pedido::where('id_usuario', 2)->get();
        return response()->json($pedidos);
    }

    // 3. Obtiene pedidos con información completa del usuario
    public function pedidosDetalles()
    {
        $pedidos = Pedido::with('usuario')->get();
        return response()->json($pedidos);
    }

    // 4. Recupera pedidos con total entre $100 y $250
    public function pedidosRango()
    {
        $pedidos = Pedido::whereBetween('total', [100, 250])->get();
        return response()->json($pedidos);
    }

    // 5. Encuentra usuarios cuyo nombre empieza con 'R'
    public function usuariosR()
    {
        $usuarios = Usuario::where('nombre', 'like', 'R%')->get();
        return response()->json($usuarios);
    }

    // 6. Cuenta total de pedidos para usuario con ID 5
    public function totalPedidosUsuario()
    {
        $total = Pedido::where('id_usuario', 5)->count();
        return response()->json(['total_pedidos' => $total]);
    }

    // 7. Recupera pedidos ordenados por total descendente con info de usuario
    public function pedidosOrdenados()
    {
        $pedidos = Pedido::with('usuario')->orderByDesc('total')->get();
        return response()->json($pedidos);
    }

    // 8. Obtiene suma total de todos los pedidos
    public function sumaTotalPedidos()
    {
        $suma = Pedido::sum('total');
        return response()->json(['total_suma' => $suma]);
    }

    // 9. Encuentra el pedido más económico con info del usuario
    public function pedidoMasEconomico()
    {
        $pedido = Pedido::with('usuario')->orderBy('total')->first();
        return response()->json($pedido);
    }

    // 10. Obtiene resumen de pedidos agrupados por usuario
    public function pedidosAgrupados()
    {
        $pedidos = Pedido::select('id_usuario', 
            DB::raw('GROUP_CONCAT(producto) as productos'),
            DB::raw('SUM(cantidad) as total_cantidad'),
            DB::raw('SUM(total) as total_pedidos')
        )
        ->groupBy('id_usuario')
        ->get();
        
        return response()->json($pedidos);
    }
}