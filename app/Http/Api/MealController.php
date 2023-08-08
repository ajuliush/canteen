<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Http\Resources\MealResource;

class MealController extends Controller
{
    use ApiResponser;
     
    public function index()
    {
        
        $meal = new MealResource(Meal::all());
        return $this->success($meal, 'Meal featech successfully', 200);
    }
}
