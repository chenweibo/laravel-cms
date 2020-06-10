<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CommonController extends Controller
{
    public function getBaseSite()
    {
        $result = Set::firstOrCreate(['type' => 'site']);
        Cache::pull('site');

        return $result;
    }

    public function saveSite(Request $request)
    {
        $result = Set::updateOrCreate(
            ['type' => 'site'],
            ['sets' => $request->sets]
        );
        Cache::pull('site');

        return $result;
    }
}
