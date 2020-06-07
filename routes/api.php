<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('admin/login', 'Api\AuthController@login');
Route::get('admin/loginOut/{id}', 'Api\AuthController@loginOut');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('admin/me', 'Api\AuthController@me');

    Route::get('/admin/clearCache', 'Api\ToolsController@clearCache');
    Route::get('/admin/Cache', 'Api\ToolsController@Cache');

    Route::Post('admin/upload/common', 'Api\UploadsController@commonUpload');
    Route::Post('admin/upload/file', 'Api\UploadsController@fileUpload');
    Route::Post('admin/upload/editor', 'Api\UploadsController@editorUpload');
    Route::Post('admin/upload/thumbnailUpload', 'Api\UploadsController@thumbnailUpload');

    Route::get('admin/file/public', 'Api\FilesController@getHomeCssFileList');

    Route::get('admin/file/template', 'Api\FilesController@getTemplateFileList');
    Route::get('admin/file/storage', 'Api\FilesController@getStorageFileList');
    Route::get('admin/file/path', 'Api\FilesController@getFileListByPath');
    Route::get('admin/file/content', 'Api\FilesController@getFileContent');
    Route::Post('admin/file/create', 'Api\FilesController@mkFile');
    Route::put('admin/file/update', 'Api\FilesController@saveFile');
    Route::delete('admin/file/delete', 'Api\FilesController@deleteFile');

    Route::put('admin/file/rename', 'Api\FilesController@someRename');

    Route::Post('admin/dir/create', 'Api\FilesController@mkDir');
    Route::delete('admin/dir/delete', 'Api\FilesController@deleteDir');

    Route::Post('admin/file/download', 'Api\FilesController@downloadFile');

    Route::get('/admin/site', 'Api\CommonController@getBaseSite');
    Route::Post('/admin/site', 'Api\CommonController@saveSite');

    Route::Post('/messages/allRead', 'Api\MessageController@readAll');
    Route::delete('/messages/allDelete', 'Api\MessageController@destroyAll');

    Route::get('/admin/recycle', 'Api\RecycleController@getRecycle');
    Route::Post('/admin/recycle/{id}', 'Api\RecycleController@getRecycleOne');

    // Resources
    Route::resources([
        'menus'      => 'Api\MenusController',
        'contents'   => 'Api\ContentsController',
        'banners'    => 'Api\BannersController',
        'messages'   => 'Api\MessageController',
        'components' => 'Api\ComponentsController',
    ]);
});
