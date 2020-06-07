<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PathController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();
        if ($path == '/') {
            $menu = Menu::path($path)->get()->first();
        } else {
            $menu = Menu::path('/'.$path)->get()->first();
        }
        if ($menu) {
            $view = $menu->view['pageView'];

            return view(\sprintf('home.%s', Str::of($view)->basename('.blade.php')), ['menu' => $menu]);
        }
        abort(404);
    }

    public function contentList(Request $request, $id)
    {
        $menu = Menu::find($id);
        $perPage = $menu->perPage;
        $count = $perPage ? $perPage : 100;

        if ($menu && $menu->type == '2') {
            $result = [];
            $children = Menu::where('parentId', $menu->id)->orderBy('sort', 'asc')->paginate($count);
            if ($children->count()) {
                $result['hasChildren'] = true;
                $result['data'] = $children;
            } else {
                $result['hasChildren'] = false;
                $result['data'] = Content::where('menus_id', $menu->id)->orderBy('sort', 'asc')->paginate($count);
            }

            return view(\sprintf('home.%s', Str::of($menu->view['pageList'])->basename('.blade.php')), ['menu' => $menu, 'content' => $result]);
        }
        abort(404);
    }

    public function contentView($id)
    {
        $content = Content::find($id);
        if ($content->redirect) {
            if (checkUrl($content->redirect)) {
                return redirect()->away($content->redirect);
            }
            $url = url($content->redirect);

            return redirect()->away($url);
        }
        if ($content) {
            return view(\sprintf('home.%s', Str::of($content->menu->view['pageView'])->basename('.blade.php')), ['content' => $content, 'menu' => $content->menu]);
        }
        abort(404);
    }

    public function gbook(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'title'     => 'required',
                'telephone' => 'required',
            ]);
            Message::create($request->all());

            return ['message' => ok];
        }
        $request->validate([
            'title'     => 'required',
            'telephone' => 'required',
        ]);
        Message::create($request->all());

        return back();

        abort(404);
    }

    public function search(Request $request)
    {
        $keys = $request->keys;
        $per = $request->per;

        $list = Content::where('title', 'like', \sprintf('%%%s%%', $keys))->paginate($per);

        return view('home.search', ['list' => $list]);
    }
}
