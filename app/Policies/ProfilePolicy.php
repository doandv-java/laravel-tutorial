<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Profile $profile
     * @return void
     */
    public function view(User $user, Profile $profile): void
    {
        //
    }

    /**
     * @param User $user
     * @return void
     */
    public function create(User $user): voids
    {
        //
    }

    /**
     * @param User $user
     * @param Profile $profile
     * @return bool
     */
    public function update(User $user, Profile $profile): bool
    {
        return $user->id == $profile->user_id;
    }

    /**
     * @param User $user
     * @param Profile $profile
     * @return void
     */
    public function delete(User $user, Profile $profile): void
    {
        //

    }

    /**
     * @param User $user
     * @param Profile $profile
     * @return void
     */
    public function restore(User $user, Profile $profile): void
    {

    }

    /**
     * @param User $user
     * @param Profile $profile
     * @return void
     */
    public function forceDelete(User $user, Profile $profile): void
    {

    }


}
