<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    // Método para obtener todos los pedidos
    public function index()
    {
        $pedidos = Pedido::all();
        return response()->json($pedidos);
    }

    // Método para mostrar un pedido específico
    public function show($id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }
        return response()->json($pedido);
    }

    // Método para crear un nuevo pedido
    public function store(Request $request)
    {
    
        $pedido = Pedido::create($request->all());

        return response()->json($pedido, 201);
    }

    // Método para actualizar un pedido existente
    public function update(Request $request, $id)
    {
        // Encuentra el pedido por su id
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        // Valida los datos del request
        $request->validate([
            // Aquí pon las reglas de validación para los datos del pedido
        ]);

        // Actualiza el pedido con los datos proporcionados
        $pedido->update($request->all());

        return response()->json($pedido, 200);
    }

    // Método para eliminar un pedido existente
    public function destroy($id)
    {
        // Encuentra el pedido por su id
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        // Elimina el pedido
        $pedido->delete();

        return response()->json(null, 204);
    }
}
