<?php

namespace App\Http\Controllers\Api;
use App\Http\Traits\ApiResponser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
class MeetingController extends Controller
{
    use ApiResponser;
     
    public function index()
    {
        return Meeting::all();
    }
}
