<?php

namespace App\Policies;

use App\Models\Admin\Poster;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PosterPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }


    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->userCanDo('Poster', 'browse');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Poster  $poster
     * @return mixed
     */
    public function view(User $user, Poster $poster)
    {
        return $user->userCanDo('Poster', 'read');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->userCanDo('Poster', 'add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Poster  $poster
     * @return mixed
     */
    public function update(User $user, Poster $poster)
    {
        return $user->userCanDo('Poster', 'edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Poster  $poster
     * @return mixed
     */
    public function delete(User $user, Poster $poster)
    {
        return $user->userCanDo('Poster', 'delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Poster  $poster
     * @return mixed
     */
    public function restore(User $user, Poster $poster)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Poster  $poster
     * @return mixed
     */
    public function forceDelete(User $user, Poster $poster)
    {
        return true;
    }
}
