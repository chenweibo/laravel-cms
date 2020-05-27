<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Set.
 *
 * @property int                             $id
 * @property string                          $title
 * @property string                          $type
 * @property array                           $sets
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set whereSets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Set whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Set extends Model
{
    protected $fillable = [
        'title', 'type', 'sets',
    ];

    protected $casts = [
        'sets' => 'json', // 声明json类型
    ];
}
