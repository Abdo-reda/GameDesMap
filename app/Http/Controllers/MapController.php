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

    public function store(Request $request): JsonResponse
    {
        $map = MAP::create($request->all());
        return response()->json($map->toArray(), Response::HTTP_CREATED);
    }

    public function update(Map $map, Request $request): JsonResponse //I should validate the request, make sure name is string and so on ...
    {
        $map->update($request->all());
        return response()->json($map->toArray()); //return the correct status response
    }

    public function destroy(Map $map): Response
    {
        $map->delete();
        return response()->noContent();
    }
}

/*
GET           /users                      index   users.index
POST          /users                      store   users.store
GET           /users/{user}               show    users.show
PUT|PATCH     /users/{user}               update  users.update
DELETE        /users/{user}               destroy users.destroy

*/