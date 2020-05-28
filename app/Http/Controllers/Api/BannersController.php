<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannersRequest;
use App\Http\Resources\BannerResource;
use App\Models\Banner;
use App\Models\Component;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BannerResource::collection(Banner::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BannersRequest $request)
    {
        return new  BannerResource(Banner::create($request->all()));
    }

    public function create()
    {
        $component = Component::where('belong', 2)->get();

        return ['component' => handleComponentDetail($component)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Banner              $banner
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BannersRequest $request, Banner $banner)
    {
        $banner->update($request->all());

        return response()->json([
            'message' => 'ok',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Banner $banner
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return $this->withNoContent();
    }
}
