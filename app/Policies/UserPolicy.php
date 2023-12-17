<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

/**
 * UserPolicy class represents a policy for determining user permissions.
 */
class UserPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'mamaroneck@gmail.com';
    }

    /**
     * Edit a user's information.
     *
     * This method allows for editing a user's information. It takes in two User objects, $user and $model,
     * and returns a boolean value indicating whether the edit was successful or not.
     *
     * @param User $user The user to be edited.
     * @param User $model The new user model containing the updated information.
     * @return bool True if the edit was successful, false otherwise.
     */
    public function edit(User $user, User $model): bool
    {
        return (bool) mt_rand(0, 1);
    }
}
