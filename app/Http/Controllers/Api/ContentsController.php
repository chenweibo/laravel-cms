<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentsRequest;
use App\Http\Resources\ContentsResource;
use App\Models\Component;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return ContentsResource::collection(Content::filter($request->all())->list()->with(['menu' => function ($query) {
            $query->select('id', 'title', 'parentId');
        }])->paginate(10));
    }

    public function create()
    {
        $menu = Menu::allTree()->get();
        $component = Component::where('belong', 1)->get();

        return ['menu' => $menu, 'component' => handleComponentDetail($component)];
    }

    public function show(Content $content)
    {
        $menu = Menu::allTree()->get();
        $component = Component::where('belong', 1)->get();

        return ['menu' => $menu, 'content' => $content, 'component' => handleComponentDetail($component)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContentsRequest $request)
    {
        return new ContentsResource(Content::create($request->all()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $content->update($request->all());

        return response()->json([
            'message' => 'ok',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();

        return $this->withNoContent();
    }
}
