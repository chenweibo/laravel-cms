<?php

namespace App\Policies;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy extends Policy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create models.
     *
     * @return mixed
     */
    public function create(User $user)
    {
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Menu        $menu
     *
     * @return mixed
     */
    public function update(?User $user, Menu $menu)
    {
        return optional($user)->id === $menu->created_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Menu $menu
     *
     * @return mixed
     */
    public function delete(User $user, Menu $menu)
    {
        return $user->isAuthorOf($menu);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Menu $menu
     *
     * @return mixed
     */
    public function restore(User $user, Menu $menu)
    {
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Menu $menu
     *
     * @return mixed
     */
    public function forceDelete(User $user, Menu $menu)
    {
    }
}
