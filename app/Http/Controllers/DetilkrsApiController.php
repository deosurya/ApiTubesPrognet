<?php

namespace App\Http\Controllers;

use App\Models\Detilkrs;
use Illuminate\Http\Request;

class DetilkrsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Detilkrs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detilkrs = new Detilkrs();
        $detilkrs->fill($request->all())->save();
        return $detilkrs;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Detilkrs::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detilkrs = Detilkrs::find($id);
        $detilkrs->fill($request->all())->save();
        return $detilkrs;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detilkrs = Detilkrs::find($id);
        $detilkrs->delete();
    }
}
