<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return Empleado::all();
    }

    public function store(Request $request)
    {
        return Empleado::create($request->all());
    }

    public function show($id)
    {
        return Empleado::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return $empleado;
    }

    public function destroy($id)
    {
        Empleado::findOrFail($id)->delete();
        return 204;
    }
}
