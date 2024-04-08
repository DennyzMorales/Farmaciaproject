<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index()
    {
        return Medicamento::all();
    }

    public function store(Request $request)
    {
        return Medicamento::create($request->all());
    }

    public function show($id)
    {
        return Medicamento::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->update($request->all());
        return $medicamento;
    }

    public function destroy($id)
    {
        Medicamento::findOrFail($id)->delete();
        return 204;
    }
}
