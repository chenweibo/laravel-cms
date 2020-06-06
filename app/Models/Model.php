<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * App\Models\Model.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 * @mixin \Eloquent
 */
class Model extends EloquentModel
{
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
