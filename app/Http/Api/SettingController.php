<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Http\Resources\SettingsResource;

class SettingController extends Controller
{
      use ApiResponser;
     
    public function index()
    {
        
        $setting = new SettingsResource(Settings::all());
        return $this->success($setting, 'Settings featech successfully', 200);
    }
}
