<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Set;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function getBaseSite()
    {
        return Set::firstOrCreate(['type' => 'site']);
    }

    public function saveSite(Request $request)
    {
        return Set::updateOrCreate(
            ['type' => 'site'],
            ['sets' => $request->sets]
        );
    }
}
