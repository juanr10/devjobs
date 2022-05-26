<?php

namespace App\Policies;

use App\User;
use App\Vacant;
use Illuminate\Auth\Access\HandlesAuthorization;

class VacantPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacant  $vacant
     * @return mixed
     */
    public function view(User $user, Vacant $vacant)
    {
        return $user->id === $vacant->user_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacant  $vacant
     * @return mixed
     */
    public function update(User $user, Vacant $vacant)
    {
        return $user->id === $vacant->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacant  $vacant
     * @return mixed
     */
    public function delete(User $user, Vacant $vacant)
    {
        return $user->id === $vacant->user_id;
    }
}
