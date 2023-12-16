<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matakuliah::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matakuliah = new Matakuliah();
        $matakuliah->fill($request->all())->save();
        return $matakuliah;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Matakuliah::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matakuliah = Matakuliah::find($id);
        $matakuliah->fill($request->all())->save();
        return $matakuliah;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matakuliah = Matakuliah::find($id);
        $matakuliah->delete();
    }
}
