<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Homes;

class HomesController extends Controller
{
    public function index()
    {
        return Homes::all();
    }
    public function show(Homes $homes)
    {
        return $homes;
    }
    public function store(Request $request)
    {
        $homes = Homes::create($request->all());
        return response()->json($homes, 201);
    }
    public function update(Request $request, Homes $homes)
    {
        $homes->update($request->all());
        return response()->json($homes, 200);
    }
    public function delete(Homes $homes)
    {
        $homes->delete();

        return response()->json(null, 204);
    }
    public function showNum(int $num)
    {

        return Homes::simplePaginate($num)->items();
    }
}
