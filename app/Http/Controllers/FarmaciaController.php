<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    public function index()
    {
        return Farmacia::all();
    }

    public function store(Request $request)
    {
        return Farmacia::create($request->all());
    }

    public function show($id)
    {
        return Farmacia::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $farmacia = Farmacia::findOrFail($id);
        $farmacia->update($request->all());
        return $farmacia;
    }

    public function destroy($id)
    {
        Farmacia::findOrFail($id)->delete();
        return 204;
    }
}
