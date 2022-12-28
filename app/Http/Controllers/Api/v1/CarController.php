<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json("Car index");
    }

    public function show(Car $car)
    {
        return $car;
    }

    public function store(StoreCarRequest $request)
    {
        Car::create($request->validated());
        return response()->json("Car Created");
    }
    public function update(StoreCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        return response()->json("Car updated");
    }
}
