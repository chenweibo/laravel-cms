<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Artisan;

class ToolsController extends Controller
{
    public function clearCache()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        return ['messages' => 'ok'];
    }

    public function cache()
    {
        Artisan::call('config:cache');
        Artisan::call('route:cache');

        return ['messages' => 'ok'];
    }

    public function createLink()
    {
        Artisan::call('storage:link');

        return ['messages' => 'ok'];
    }
}
