<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Content.
 *
 * @property int                             $id
 * @property string                          $title
 * @property int                             $sort
 * @property string                          $time
 * @property int                             $menus_id
 * @property int                             $page_views
 * @property string                          $detail
 * @property array                           $extra
 * @property bool                            $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \App\Models\Menu                $menu
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content filter($input = [], $filter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content list()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Content onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content paginateFilter($perPage = null, $columns = [], $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content simplePaginateFilter($perPage = null, $columns = [], $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereBeginsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereEndsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereLike($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereMenusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content wherePageViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Content withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Content withoutTrashed()
 * @mixin \Eloquent
 */
class Content extends Model
{
    use SoftDeletes;
    use Filterable;

    protected $fillable = ['title', 'sort', 'redirect', 'recommend', 'time', 'menus_id', 'page_views', 'detail', 'extra', 'status', 'type'];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'menus_id', 'id');
    }

    protected $casts = [
        'extra' => 'json', // 声明json类型
        'status' => 'boolean',
        'time' => 'datetime:Y-m-d',
        'recommend' => 'boolean',
    ];

    /**
     *  内容列表过滤字段.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeList($query)
    {
        return $query->select('id', 'sort', 'title', 'time', 'menus_id', 'page_views');
    }

    public function getMergeAttribute($value)
    {
        $extra = $this->extra;

        return $extra;
    }

    /**
     * 取得上一篇的id值及其名称.
     *
     * @return array
     */
    public function getPrevAttribute()
    {
        $id = self::where('id', '<', $this->id)->where('menus_id', $this->menus_id)->max('id');
        if (!blank($id)) {
            return self::find($id);
        }

        return null;
    }

    /**
     * 获得url.
     *
     * @param $id
     *
     * @return array
     */
    protected function getBladeUrlAttribute()
    {
        if ($this->menu) {
            if ($this->menu->parentId == 0) {
                return action('Home\PathController@contentView', ['id' => $this->id]);
            }

            return action('Home\PathController@contentList', ['id' => $this->id]);
        }

        return action('Home\PathController@contentView', ['id' => $this->id]);
    }

    /**
     * 取得下一篇的id值及其名称.
     *
     * @param $id
     *
     * @return array
     */
    protected function getNextAttribute()
    {
        $id = self::where('id', '>', $this->id)->where('menus_id', $this->menus_id)->min('id');

        if (!blank($id)) {
            return self::find($id);
        }

        return null;
    }

    protected function getDataAttribute()
    {
        return handleSiteStructure($this->extra);
    }
}
