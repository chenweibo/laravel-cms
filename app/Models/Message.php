<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Message.
 *
 * @property int                             $id
 * @property string                          $title
 * @property string                          $telephone
 * @property string                          $address
 * @property string                          $email
 * @property string                          $detail
 * @property bool                            $isRead
 * @property array                           $extra
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    protected $fillable = ['title', 'telephone', 'address', 'email', 'detail', 'isRead', 'extra'];

    protected $casts = [
        'extra' => 'json', // 声明json类型
        'isRead' => 'boolean',
    ];
}
