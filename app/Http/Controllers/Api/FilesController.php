<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function getTemplateFileList()
    {
        return ['list' => scandir(base_path('resources/views/home')), 'path' => base_path('resources/views/home')];
    }

    public function getHomeCssFileList()
    {
        return ['list' => scandir(public_path()), 'path' => public_path()];
    }

    public function getStorageFileList()
    {
        return ['list' => scandir(storage_path('app/public')), 'path' => storage_path('app/public')];
    }

    public function getFileListByPath(Request $request)
    {
        return ['list' => scandir($request->path), 'path' => $request->path];
    }

    public function mkDir(Request $request)
    {
        File::makeDirectory($request->path, $mode = 0755, $recursive = false, $force = false);

        return ['message' => 'ok'];
    }

    public function deleteDir(Request $request)
    {
        File::deleteDirectory($request->path, $preserve = false);

        return ['message' => 'ok'];
    }

    public function mkFile(Request $request)
    {
        if (touch($request->path)) {
            return ['message' => 'ok'];
        }

        return ['error' => '创建失败，检查权限，或者函数问题。'];
    }

    public function deleteFile(Request $request)
    {
        if (unlink($request->path)) {
            return ['message' => 'ok'];
        }

        return ['error' => '删除失败，检查权限，或者函数问题。'];
    }

    public function getFileContent(Request $request)
    {
        return ['data' => File::getRequire($request->path)];
    }

    public function saveFile(Request $request)
    {
        File::replace($request->path, $request->fileContent);

        return ['message' => 'ok'];
    }

    public function someRename(Request $request)
    {
        if (rename($request->oldname, $request->newname)) {
            return ['message' => 'ok'];
        }

        return ['error' => '修改失败，检查权限，或者函数问题。'];
    }

    public function downloadFile(Request $request)
    {
        return response()->download($request->path);
    }
}
