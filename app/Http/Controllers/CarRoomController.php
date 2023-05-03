<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRoom;

class CarRoomController extends Controller
{
    public function index()
    {
        $carRooms = CarRoom::all();
        return response()->json($carRooms);
    }

    public function show($id)
    {
        $carRoom = CarRoom::findOrFail($id);
        return response()->json($carRoom);
    }

    public function store(Request $request)
    {
        $carRoom = CarRoom::create($request->all());
        return response()->json($carRoom, 201);
    }

    public function update(Request $request, $id)
    {
        $carRoom = CarRoom::findOrFail($id);
        $carRoom->update($request->all());
        return response()->json($carRoom);
    }

    public function getAvailable()
    {
        $carRooms = CarRoom::where('is_available', true)->get();
        return response()->json($carRooms);
    }

    public function getUnavailable()
    {
        $carRooms = CarRoom::where('is_available', false)->get();
        return response()->json($carRooms);
    }

    public function destroy($id)
    {
        $carRoom = CarRoom::findOrFail($id);
        $carRoom->delete();
        return response()->json(null, 204);
    }
}
