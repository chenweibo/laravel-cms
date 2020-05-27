<?php

namespace App\Filters;

use EloquentFilter\ModelFilter;

class ContentFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function title($title)
    {
        $this->where('title', 'like', \sprintf('%%%s%%', $title));
    }

    public function path($menus_id)
    {
        $this->where('menus_id', 'like', \sprintf('%%%s%%', $menus_id));
    }
}
