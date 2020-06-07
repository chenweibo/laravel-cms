<?php

namespace App\Models;

use App\Traits\MaintainUserCreate;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use MaintainUserCreate;

    protected $fillable = ['title', 'redirect', 'recommend', 'perPage', 'url', 'parentId', 'pageInfo', 'path', 'view', 'type', 'sort', 'extra', 'hide'];

    protected $casts = [
        'extra'     => 'json', // 声明json类型
        'hide'      => 'boolean',
        'recommend' => 'boolean',
        'view'      => 'json', // 声明json类型
    ];

    public function findChildren()
    {
        return $this->hasMany('App\Models\Menu', 'parentId', 'id');
    }

    public function content()
    {
        return $this->hasMany('App\Models\Content', 'menus_id', 'id');
    }

    //无限极树
    public function children()
    {
        return $this->findChildren()->with('children');
    }

    public function scopeAllTree($query)
    {
        return $query->with(['children' => function ($query) {
            $query->orderBy('sort', 'asc');
        }])->orderBy('sort', 'asc')->where('parentId', 0);
    }

    public function scopeOneTree($query)
    {
        return $query->with(['children' => function ($query) {
            $query->where('hide', false)->orderBy('sort', 'asc');
        }])->orderBy('sort', 'asc');
    }

    public function scopePath($query, $path)
    {
        return $query->where('url', $path);
    }

    public function getBladeUrlAttribute()
    {
        if ($this->redirect) {
            return $this->redirect;
        }
        if ($this->type == '2') {
            return action('Home\PathController@contentList', ['id' => $this->id]);
        }

        return action('Home\PathController@index', ['path' => $this->url]);
    }

    protected function getDataAttribute()
    {
        return handleSiteStructure($this->extra);
    }
}
