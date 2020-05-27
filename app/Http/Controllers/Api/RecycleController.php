<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class RecycleController extends Controller
{
    public function getRecycle(Request $request)
    {
        return  Content::onlyTrashed()->select('id', 'title', 'deleted_at')->paginate(10);
    }

    public function getRecycleOne($id)
    {
        Content::withTrashed()
            ->where('id', $id)
            ->restore();

        return ['messages' => '恢复成功'];
    }
}
