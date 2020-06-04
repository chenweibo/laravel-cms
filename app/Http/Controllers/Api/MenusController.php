<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenusRequest;
use App\Http\Resources\MenuResource;
use App\Models\Component;
use App\Models\Menu;
use Illuminate\Support\Facades\Cache;

class MenusController extends Controller
{
    /**
     * get Menu tree.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category = Menu::allTree()->get();

        return new MenuResource(Menu::allTree()->get());
    }

    public function create()
    {
        $menu = Menu::allTree()->get();
        $view = scandir(base_path('resources/views/home'));
        $component = Component::where('belong', 0)->get();

        return ['menu' => $menu, 'view' => $view, 'component' => handleComponentDetail($component)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(MenusRequest $request)
    {
        $result = Menu::create($request->all());
        Cache::pull('menu');

        return new MenuResource($result);
    }

    public function show(Menu $menu)
    {
        $menuTree = Menu::allTree()->get();
        $view = scandir(base_path('resources/views/home'));
        $component = Component::where('belong', 0)->get();

        return ['view' => $view, 'menuTree' => $menuTree, 'content' => $menu, 'component' => handleComponentDetail($component)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(MenusRequest $request, Menu $menu)
    {
        $this->authorize('update', $menu);

        $menu->update($request->all());
        Cache::pull('menu');

        return response()->json([
            'message' => 'ok',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        $menu->where('parentId', $menu->id)->with('findChildren')->delete();
        Cache::pull('menu');

        return $this->withNoContent();
    }
}
