<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Overtrue\LaravelUploader\StrategyResolver;

class UploadsController extends Controller
{
    public function commonUpload(Request $request)
    {
        $response = StrategyResolver::resolveFromRequest($request, $request->get('strategy', 'default'))->upload();

        return response()->json([
            'status' => 'done',
            'url' => $response->url,
            'path' => $response->path,
            'filename' => $response->filename,
            'origin_name' => $response->originalName,
            //...
        ]);
    }

    public function fileUpload(Request $request)
    {
        $response = StrategyResolver::resolveFromRequest($request, $request->get('strategy', 'file'))->upload();

        return response()->json([
            'status' => 'success',
            'url' => $response->url,
            'path' => $response->path,
            'filename' => $response->filename,
            'origin_name' => $response->originalName,
            //...
        ]);
    }

    public function editorUpload(Request $request)
    {
        $response = StrategyResolver::resolveFromRequest($request, $request->get('strategy', 'editor'))->upload();

        return response()->json([
            'status' => 'success',
            'url' => $response->url,
            'path' => $response->path,
            'filename' => $response->filename,
            'origin_name' => $response->originalName,
            //...
        ]);
    }

    public function thumbnailUpload(Request $request)
    {
        $response = StrategyResolver::resolveFromRequest($request, $request->get('strategy', 'thumbnail'))->upload();

        return response()->json([
            'status' => 'success',
            'url' => $response->url,
            'origin_name' => $response->originalName,
            //...
        ]);
    }

    /**
     * 上传文件到指定位置.
     *
     * @urlParam path required 路径+文件名
     */
    public function uploadsSomePath(Request $request)
    {
        // code...
    }
}
