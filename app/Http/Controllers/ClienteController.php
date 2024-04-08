<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Método para obtener todos los clientes
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    // Método para crear un nuevo cliente
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->correo = $request->input('correo');
        $cliente->cod_cliente = $request->input('cod_cliente');
        $cliente->save();

        return response()->json($cliente, 201);
    }

    // Método para obtener un cliente por su ID
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }
        return response()->json($cliente);
    }

    // Método para actualizar un cliente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->correo = $request->input('correo');
        $cliente->save();

        return response()->json($cliente);
    }

    // Método para eliminar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }
        $cliente->delete();

        return response()->json(['message' => 'Cliente eliminado']);
    }
}
