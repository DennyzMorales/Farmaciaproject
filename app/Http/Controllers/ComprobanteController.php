<?php

namespace App\Http\Controllers;

use App\Models\Comprobante;
use Illuminate\Http\Request;

class ComprobanteController extends Controller
{
    public function index()
    {
        return Comprobante::all();
    }

    public function store(Request $request)
    {
        return Comprobante::create($request->all());
    }

    public function show($id)
    {
        return Comprobante::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $comprobante = Comprobante::findOrFail($id);
        $comprobante->update($request->all());
        return $comprobante;
    }

    public function destroy($id)
    {
        $comprobante = Comprobante::findOrFail($id);
        $comprobante->delete();
        return response()->json(null, 204);
    }
}
