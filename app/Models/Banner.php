<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Banner.
 *
 * @property int                             $id
 * @property string                          $title
 * @property string                          $description
 * @property array                           $banners
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Banner onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereBanners($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Banner withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Banner withoutTrashed()
 * @mixin \Eloquent
 */
class Banner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'banners',
    ];

    protected $casts = [
        'banners' => 'json',
    ];
}
