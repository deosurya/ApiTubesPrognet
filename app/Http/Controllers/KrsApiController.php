<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use Illuminate\Http\Request;

class KrsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Krs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $krs = new Krs();
        $krs->fill($request->all())->save();
        return $krs;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Krs::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $krs = Krs::find($id);
        $krs->fill($request->all())->save();
        return $krs;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $krs = Krs::find($id);
        $krs->delete();
    }
}
