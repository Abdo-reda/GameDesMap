<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MapController extends Controller
{

    public function index(): JsonResponse
    {
        return response()->json(Map::all()->toArray()); //tb data dot data
    }

    public function show(Map $map): JsonResponse
    {
        return response()->json($map->toArray());
    }


    public function update(Map $map, $request): JsonResponse
    {
        return response()->json('updating ...');
    }

    public function destory(Map $map): Response
    {
        $map->delete();
        return response()->noContent();
    }
}
