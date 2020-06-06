<?php

namespace App\Traits;

use App\Models\User;

trait MaintainUserCreate
{
    public static function bootMaintainUserCreate()
    {
        static::saving(function ($model) {
            $model->created_id = $model->created_id ?? \auth()->id();
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_id')->withTrashed();
    }

    /**
     * @param \App\User|int $user
     *
     * @return bool
     */
    public function isCreatedBy($user)
    {
        if ($user instanceof User) {
            $user = $user->id;
        }

        return $this->created_id == \intval($user);
    }
}
